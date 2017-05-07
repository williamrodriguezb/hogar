<?php

namespace backendBundle\Entity;

/**
 * Hogar
 */
class Hogar
{
    /**
     * @var integer
     */
    private $hogarId;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $creado = 'CURRENT_TIMESTAMP';

    /**
     * @var \backendBundle\Entity\Usuarios
     */
    private $usuario;


    /**
     * Get hogarId
     *
     * @return integer
     */
    public function getHogarId()
    {
        return $this->hogarId;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Hogar
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return Hogar
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set usuario
     *
     * @param \backendBundle\Entity\Usuarios $usuario
     *
     * @return Hogar
     */
    public function setUsuario(\backendBundle\Entity\Usuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \backendBundle\Entity\Usuarios
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}

