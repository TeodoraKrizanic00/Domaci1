<?php

class Slika
{
    private $id;
    private $naziv;
    private $pravac;
    private $opis;
    private $slikar;
    private $url;

    /**
     * @param $id
     * @param $naziv
     * @param $pravac
     * @param $opis
     * @param $slikar
     * @param $url
     */
    public function __construct($id, $naziv, $pravac, $opis, $slikar, $url)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->pravac = $pravac;
        $this->opis = $opis;
        $this->slikar = $slikar;
        $this->url = $url;
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
     * @return Slika
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNaziv()
    {
        return $this->naziv;
    }

    /**
     * @param mixed $naziv
     * @return Slika
     */
    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPravac()
    {
        return $this->pravac;
    }

    /**
     * @param mixed $pravac
     * @return Slika
     */
    public function setPravac($pravac)
    {
        $this->pravac = $pravac;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * @param mixed $opis
     * @return Slika
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlikar()
    {
        return $this->slikar;
    }

    /**
     * @param mixed $slikar
     * @return Slika
     */
    public function setSlikar($slikar)
    {
        $this->slikar = $slikar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Slika
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


    

}