<?php 

namespace Isw\Entity;

use DateTime;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;


/**
 * @Entity
 * @Table(name="productos")
 */
class Producto
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", nullable=false)
     * @var string
     */
    protected $nombre;

    /**
     * @Column(type="decimal")
     * @var string
     */
    protected $precio;

    /**
     * @Column(name="creado_en", type="datetime")
     * @var DateTime
     */
    protected $creadoEn;

    /**
     * @Column(name="actualizado_en", type="datetime")
     * @var DateTime
     */
    protected $actualizadoEn;

    public function __construct()
    {
        $this->creadoEn = new DateTime();
        $this->actualizadoEn = new DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }

    public function getCreadoEn()
    {
        return $this->creadoEn;
    }

    public function setCreadoEn($creadoEn)
    {
        $this->creadoEn = $creadoEn;
        return $this;
    }

    public function getActualizadoEn()
    {
        return $this->actualizadoEn;
    }

    public function setActualizadoEn($actualizadoEn)
    {
        $this->actualizadoEn = $actualizadoEn;
        return $this;
    }

}


