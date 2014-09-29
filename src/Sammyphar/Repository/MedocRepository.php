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
    	$medoc['date'] = time();
        $this->db->insert('medoc', $medoc);
        // Get the id of the newly created medoc and set it on the entity.
        $id = $this->db->lastInsertId();
    }

    public function upadte(Medoc $medoc)
    {
        $this->db->upadte('medoc',$medoc);
    }

        /**
     * Returns a medoc matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Sammyphar\Entity\Medoc|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $artistData = $this->db->fetchAssoc('SELECT * FROM medoc WHERE id = ?', array($id));
        return $artistData ? $artistData : FALSE;
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

        $limit = $limit == 0 ? 100 : $limit;

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('m.*')
            ->from('medoc', 'm')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy('m.' . key($orderBy), current($orderBy));
        $statement = $queryBuilder->execute();
        $medocData = $statement->fetchAll();
        
        return $medocData;
    }

    public function delete($medoc)
    {
        return $this->db->delete('medoc', array('id' => $medoc['id']));
    }
}