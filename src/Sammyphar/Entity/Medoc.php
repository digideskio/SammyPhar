<?php

namespace Sammyphar\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Artist
{
    /**
     * Artist id.
     *
     * @var integer
     */
    protected $id;

    /**
     * Artist name.
     *
     * @var string
     */
    protected $name;

    /**
     * Artist short biography.
     *
     * @var string
     */
    protected $date;

    /**
     * Artist biography.
     *
     * @var bool
     */
    protected $sell;

    /**
     *
     * @var integer
     */
    protected $price;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getSell() {
        return $this->sell;
    }

    public function setSell($sell) {
        $this->sell = $sell;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}