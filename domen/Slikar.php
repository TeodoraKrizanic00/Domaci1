<?php

class Slikar
{
    private $id;
    private $ime;
    private $prezime;
    private $godinaRodjenja;
    private $godinaSmrti;

    /**
     * @param $id
     * @param $ime
     * @param $prezime
     * @param $godinaRodjenja
     * @param $godinaSmrti
     */
    public function __construct($id, $ime, $prezime, $godinaRodjenja, $godinaSmrti)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godinaRodjenja = $godinaRodjenja;
        $this->godinaSmrti = $godinaSmrti;
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
     * @return Slikar
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * @param mixed $ime
     * @return Slikar
     */
    public function setIme($ime)
    {
        $this->ime = $ime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * @param mixed $prezime
     * @return Slikar
     */
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGodinaRodjenja()
    {
        return $this->godinaRodjenja;
    }

    /**
     * @param mixed $godinaRodjenja
     * @return Slikar
     */
    public function setGodinaRodjenja($godinaRodjenja)
    {
        $this->godinaRodjenja = $godinaRodjenja;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGodinaSmrti()
    {
        return $this->godinaSmrti;
    }

    /**
     * @param mixed $godinaSmrti
     * @return Slikar
     */
    public function setGodinaSmrti($godinaSmrti)
    {
        $this->godinaSmrti = $godinaSmrti;
        return $this;
    }




}