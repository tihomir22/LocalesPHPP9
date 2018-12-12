<?php
/**
 * Created by PhpStorm.
 * User: sportak
 * Date: 12/12/2018
 * Time: 8:35
 */

class Licencias
{
    /**
     * @var int
     */
    private $idLicencia;

    /**
     * @var string
     */
    private $Titulo;

    /**
     * @var string
     */
    private $FechaCreacion;

    /**
     * @var string
     */

    private $Expediente;

    /**
     * @var string
     */

    private $ANYO;

    /**
     * @var int
     */

    private $LocalID;

    /**
     * Licencias constructor.
     * @param int $idLicencia
     * @param string $Titulo
     * @param string $FechaCreacion
     * @param string $Expediente
     * @param string $ANYO
     * @param int $LocalID
     */
    public function __construct(int $idLicencia=0, string $Titulo='', string $FechaCreacion='', string $Expediente='', string $ANYO='', int $LocalID=0)
    {
        $this->idLicencia = $idLicencia;
        $this->Titulo = $Titulo;
        $this->FechaCreacion = $FechaCreacion;
        $this->Expediente = $Expediente;
        $this->ANYO = $ANYO;
        $this->LocalID = $LocalID;
    }

    /**
     * @return int
     */
    public function getIdLicencia(): int
    {
        return $this->idLicencia;
    }

    /**
     * @param int $idLicencia
     */
    public function setIdLicencia(int $idLicencia)
    {
        $this->idLicencia = $idLicencia;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->Titulo;
    }

    /**
     * @param string $Titulo
     */
    public function setTitulo(string $Titulo)
    {
        $this->Titulo = $Titulo;
    }

    /**
     * @return string
     */
    public function getFechaCreacion(): string
    {
        return $this->FechaCreacion;
    }

    /**
     * @param string $FechaCreacion
     */
    public function setFechaCreacion(string $FechaCreacion)
    {
        $this->FechaCreacion = $FechaCreacion;
    }

    /**
     * @return string
     */
    public function getExpediente(): string
    {
        return $this->Expediente;
    }

    /**
     * @param string $Expediente
     */
    public function setExpediente(string $Expediente)
    {
        $this->Expediente = $Expediente;
    }

    /**
     * @return string
     */
    public function getANYO(): string
    {
        return $this->ANYO;
    }

    /**
     * @param string $ANYO
     */
    public function setANYO(string $ANYO)
    {
        $this->ANYO = $ANYO;
    }

    /**
     * @return int
     */
    public function getLocalID(): int
    {
        return $this->LocalID;
    }

    /**
     * @param int $LocalID
     */
    public function setLocalID(int $LocalID)
    {
        $this->LocalID = $LocalID;
    }





}