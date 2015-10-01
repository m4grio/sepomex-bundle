<?php

namespace m4grio\SepomexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * Sepomex
 *
 * @package m4grio\SepomexBundle\Entity
 * @author  Mario Álvarez <ahoy@m4grio.me>
 *
 * @ORM\MappedSuperclass
 */
class Sepomex implements JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="d_codigo", type="string", length=5)
     */
    private $dCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="d_asenta", type="string", length=100)
     */
    private $dAsenta;

    /**
     * @var string
     *
     * @ORM\Column(name="d_tipo_asenta", type="string", length=50)
     */
    private $dTipoAsenta;

    /**
     * @var string
     *
     * @ORM\Column(name="D_mnpio", type="string", length=60)
     */
    private $dMnpio;

    /**
     * @var string
     *
     * @ORM\Column(name="d_estado", type="string", length=50)
     */
    private $dEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="d_ciudad", type="string", length=60)
     */
    private $dCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="d_CP", type="string", length=5)
     */
    private $dCP;

    /**
     * @var string
     *
     * @ORM\Column(name="c_estado", type="string", length=2)
     */
    private $cEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="c_oficina", type="string", length=5)
     */
    private $cOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="c_CP", type="string", length=1)
     */
    private $cCP;

    /**
     * @var string
     *
     * @ORM\Column(name="c_tipo_asenta", type="string", length=2)
     */
    private $cTipoAsenta;

    /**
     * @var string
     *
     * @ORM\Column(name="c_mnpio", type="string", length=5)
     */
    private $cMnpio;

    /**
     * @var string
     *
     * @ORM\Column(name="id_asenta_cpcons", type="string", length=5)
     */
    private $idAsentaCpcons;

    /**
     * @var string
     *
     * @ORM\Column(name="d_zona", type="string", length=20)
     */
    private $dZona;

    /**
     * @var string
     *
     * @ORM\Column(name="c_cve_ciudad", type="string", length=2)
     */
    private $cCveCiudad;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dCodigo
     *
     * @param string $dCodigo
     *
     * @return Sepomex
     */
    public function setDCodigo($dCodigo)
    {
        $this->dCodigo = $dCodigo;

        return $this;
    }

    /**
     * Get dCodigo
     *
     * @return string
     */
    public function getDCodigo()
    {
        return $this->dCodigo;
    }

    /**
     * Set dAsenta
     *
     * @param string $dAsenta
     *
     * @return Sepomex
     */
    public function setDAsenta($dAsenta)
    {
        $this->dAsenta = $dAsenta;

        return $this;
    }

    /**
     * Get dAsenta
     *
     * @return string
     */
    public function getDAsenta()
    {
        return $this->dAsenta;
    }

    /**
     * Set dTipoAsenta
     *
     * @param string $dTipoAsenta
     *
     * @return Sepomex
     */
    public function setDTipoAsenta($dTipoAsenta)
    {
        $this->dTipoAsenta = $dTipoAsenta;

        return $this;
    }

    /**
     * Get dTipoAsenta
     *
     * @return string
     */
    public function getDTipoAsenta()
    {
        return $this->dTipoAsenta;
    }

    /**
     * Set dMnpio
     *
     * @param string $dMnpio
     *
     * @return Sepomex
     */
    public function setDMnpio($dMnpio)
    {
        $this->dMnpio = $dMnpio;

        return $this;
    }

    /**
     * Get dMnpio
     *
     * @return string
     */
    public function getDMnpio()
    {
        return $this->dMnpio;
    }

    /**
     * Set dEstado
     *
     * @param string $dEstado
     *
     * @return Sepomex
     */
    public function setDEstado($dEstado)
    {
        $this->dEstado = $dEstado;

        return $this;
    }

    /**
     * Get dEstado
     *
     * @return string
     */
    public function getDEstado()
    {
        return $this->dEstado;
    }

    /**
     * Set dCiudad
     *
     * @param string $dCiudad
     *
     * @return Sepomex
     */
    public function setDCiudad($dCiudad)
    {
        $this->dCiudad = $dCiudad;

        return $this;
    }

    /**
     * Get dCiudad
     *
     * @return string
     */
    public function getDCiudad()
    {
        return $this->dCiudad;
    }

    /**
     * Set dCP
     *
     * @param string $dCP
     *
     * @return Sepomex
     */
    public function setDCP($dCP)
    {
        $this->dCP = $dCP;

        return $this;
    }

    /**
     * Get dCP
     *
     * @return string
     */
    public function getDCP()
    {
        return $this->dCP;
    }

    /**
     * Set cEstado
     *
     * @param string $cEstado
     *
     * @return Sepomex
     */
    public function setCEstado($cEstado)
    {
        $this->cEstado = $cEstado;

        return $this;
    }

    /**
     * Get cEstado
     *
     * @return string
     */
    public function getCEstado()
    {
        return $this->cEstado;
    }

    /**
     * Set cOficina
     *
     * @param string $cOficina
     *
     * @return Sepomex
     */
    public function setCOficina($cOficina)
    {
        $this->cOficina = $cOficina;

        return $this;
    }

    /**
     * Get cOficina
     *
     * @return string
     */
    public function getCOficina()
    {
        return $this->cOficina;
    }

    /**
     * Set cCP
     *
     * @param string $cCP
     *
     * @return Sepomex
     */
    public function setCCP($cCP)
    {
        $this->cCP = $cCP;

        return $this;
    }

    /**
     * Get cCP
     *
     * @return string
     */
    public function getCCP()
    {
        return $this->cCP;
    }

    /**
     * Set cTipoAsenta
     *
     * @param string $cTipoAsenta
     *
     * @return Sepomex
     */
    public function setCTipoAsenta($cTipoAsenta)
    {
        $this->cTipoAsenta = $cTipoAsenta;

        return $this;
    }

    /**
     * Get cTipoAsenta
     *
     * @return string
     */
    public function getCTipoAsenta()
    {
        return $this->cTipoAsenta;
    }

    /**
     * Set cMnpio
     *
     * @param string $cMnpio
     *
     * @return Sepomex
     */
    public function setCMnpio($cMnpio)
    {
        $this->cMnpio = $cMnpio;

        return $this;
    }

    /**
     * Get cMnpio
     *
     * @return string
     */
    public function getCMnpio()
    {
        return $this->cMnpio;
    }

    /**
     * Set idAsentaCpcons
     *
     * @param string $idAsentaCpcons
     *
     * @return Sepomex
     */
    public function setIdAsentaCpcons($idAsentaCpcons)
    {
        $this->idAsentaCpcons = $idAsentaCpcons;

        return $this;
    }

    /**
     * Get idAsentaCpcons
     *
     * @return string
     */
    public function getIdAsentaCpcons()
    {
        return $this->idAsentaCpcons;
    }

    /**
     * Set dZona
     *
     * @param string $dZona
     *
     * @return Sepomex
     */
    public function setDZona($dZona)
    {
        $this->dZona = $dZona;

        return $this;
    }

    /**
     * Get dZona
     *
     * @return string
     */
    public function getDZona()
    {
        return $this->dZona;
    }

    /**
     * Set cCveCiudad
     *
     * @param string $cCveCiudad
     *
     * @return Sepomex
     */
    public function setCCveCiudad($cCveCiudad)
    {
        $this->cCveCiudad = $cCveCiudad;

        return $this;
    }

    /**
     * Get cCveCiudad
     *
     * @return string
     */
    public function getCCveCiudad()
    {
        return $this->cCveCiudad;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *       which is a value of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return [
            'd_codigo'         => $this->getDCodigo(),
            'd_asenta'         => $this->getDAsenta(),
            'd_tipo_asenta'    => $this->getDTipoAsenta(),
            'D_mnpio'          => $this->getDMnpio(),
            'd_estado'         => $this->getDEstado(),
            'd_ciudad'         => $this->getDCiudad(),
            'd_CP'             => $this->getDCP(),
            'c_estado'         => $this->getCEstado(),
            'c_oficina'        => $this->getCOficina(),
            'c_CP'             => $this->getCCP(),
            'c_tipo_asenta'    => $this->getCTipoAsenta(),
            'c_mnpio'          => $this->getCMnpio(),
            'id_asenta_cpcons' => $this->getIdAsentaCpcons(),
            'd_zona'           => $this->getDZona(),
            'c_cve_ciudad'     => $this->getCCveCiudad(),
        ];
    }
}
