<?php

class Pravac
{
    private $id;
    private $nazav;

    /**
     * @param $id
     * @param $nazav
     */
    public function __construct($id, $nazav)
    {
        $this->id = $id;
        $this->nazav = $nazav;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Pravac
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNazav()
    {
        return $this->nazav;
    }

    /**
     * @param mixed $nazav
     * @return Pravac
     */
    public function setNazav($nazav)
    {
        $this->nazav = $nazav;
        return $this;
    }


}