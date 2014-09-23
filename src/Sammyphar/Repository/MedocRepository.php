<?php
namespace Sammyphar\Repository;

use Doctrine\DBAL\Connection;
Use Sammyphar\Entity\Medoc;

class MedocRepository 
{
	 /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Saves the medoc to the database.
     *
     * @param \SammyPhar\Entity\Medoc $medoc
     */
    public function save($medoc)
    {
    	$medocData['date'] = time();
        $this->db->insert('medoc', $medocData);
        // Get the id of the newly created medoc and set it on the entity.
        $id = $this->db->lastInsertId();
        $medoc->setId($id);
    }

        /**
     * Returns an artist matching the supplied id.
     *
     * @param integer $id
     *
     * @return \MusicBox\Entity\Artist|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $artistData = $this->db->fetchAssoc('SELECT * FROM artists WHERE artist_id = ?', array($id));
        return $artistData ? $this->buildArtist($artistData) : FALSE;
    }

    /**
     * Returns a collection of medocs, sorted by name.
     *
     * @param integer $limit
     *   The number of medocs to return.
     * @param integer $offset
     *   The number of medocs to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of medocs, keyed by artist id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('name' => 'ASC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('m.*')
            ->from('medoc', 'm')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy('m.' . key($orderBy), current($orderBy));
        $statement = $queryBuilder->execute();
        $artistsData = $statement->fetchAll();
        
        return $artistsData;
    }
}