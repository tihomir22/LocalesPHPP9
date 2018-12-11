<?php
/**
 * Created by PhpStorm.
 * User: sportak
 * Date: 11/12/2018
 * Time: 19:20
 */

class Locales
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var string
     */
    private $Emplazamiento;
    /**
     * @var string
     */
    private $CodigoPortal;
    /**
     * @var string
     */
    private $CodigoVia;
    /**
     * @var string
     */
    private $NumeroVia;
    /**
     * @var string
     */
    private $RefCatas;

    /**
     * @var string
     */
    private $RefMuni;

    /**
     * @var int
     */
    private $Poligono;

    /**
     * @var string
     */
    private $ZonaSaturada;

    /**
     * @var string
     */
    private $Comentarios;

    /**
     * Locales constructor.
     * @param int $ID
     * @param string $Emplazamiento
     * @param string $CodigoPortal
     * @param string $CodigoVia
     * @param string $NumeroVia
     * @param string $RefCatas
     * @param string $RefMuni
     * @param int $Poligono
     * @param string $ZonaSaturada
     * @param string $Comentarios
     */
    public function __construct(int $ID=null, string $Emplazamiento='', string $CodigoPortal='', string $CodigoVia='', string $NumeroVia='', string $RefCatas='', string $RefMuni='', int $Poligono=0, string $ZonaSaturada='', string $Comentarios='')
    {
        $this->ID = $ID;
        $this->Emplazamiento = $Emplazamiento;
        $this->CodigoPortal = $CodigoPortal;
        $this->CodigoVia = $CodigoVia;
        $this->NumeroVia = $NumeroVia;
        $this->RefCatas = $RefCatas;
        $this->RefMuni = $RefMuni;
        $this->Poligono = $Poligono;
        $this->ZonaSaturada = $ZonaSaturada;
        $this->Comentarios = $Comentarios;


    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID(int $ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getEmplazamiento(): string
    {
        return $this->Emplazamiento;
    }

    /**
     * @param string $Emplazamiento
     */
    public function setEmplazamiento(string $Emplazamiento)
    {
        $this->Emplazamiento = $Emplazamiento;
    }

    /**
     * @return string
     */
    public function getCodigoPortal(): string
    {
        return $this->CodigoPortal;
    }

    /**
     * @param string $CodigoPortal
     */
    public function setCodigoPortal(string $CodigoPortal)
    {
        $this->CodigoPortal = $CodigoPortal;
    }

    /**
     * @return string
     */
    public function getCodigoVia(): string
    {
        return $this->CodigoVia;
    }

    /**
     * @param string $CodigoVia
     */
    public function setCodigoVia(string $CodigoVia)
    {
        $this->CodigoVia = $CodigoVia;
    }

    /**
     * @return string
     */
    public function getNumeroVia(): string
    {
        return $this->NumeroVia;
    }

    /**
     * @param string $NumeroVia
     */
    public function setNumeroVia(string $NumeroVia)
    {
        $this->NumeroVia = $NumeroVia;
    }

    /**
     * @return string
     */
    public function getRefCatas(): string
    {
        return $this->RefCatas;
    }

    /**
     * @param string $RefCatas
     */
    public function setRefCatas(string $RefCatas)
    {
        $this->RefCatas = $RefCatas;
    }

    /**
     * @return string
     */
    public function getRefMuni(): string
    {
        return $this->RefMuni;
    }

    /**
     * @param string $RefMuni
     */
    public function setRefMuni(string $RefMuni)
    {
        $this->RefMuni = $RefMuni;
    }

    /**
     * @return int
     */
    public function getPoligono(): int
    {
        return $this->Poligono;
    }

    /**
     * @param int $Poligono
     */
    public function setPoligono(int $Poligono)
    {
        $this->Poligono = $Poligono;
    }

    /**
     * @return string
     */
    public function getZonaSaturada(): string
    {
        return $this->ZonaSaturada;
    }

    /**
     * @param string $ZonaSaturada
     */
    public function setZonaSaturada(string $ZonaSaturada)
    {
        $this->ZonaSaturada = $ZonaSaturada;
    }

    /**
     * @return string
     */
    public function getComentarios(): string
    {
        return $this->Comentarios;
    }

    /**
     * @param string $Comentarios
     */
    public function setComentarios(string $Comentarios)
    {
        $this->Comentarios = $Comentarios;
    }
}