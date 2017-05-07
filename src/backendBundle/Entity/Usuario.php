<?php

namespace backendBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $usuarioId;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var string
     */
    private $credencial;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var \DateTime
     */
    private $fNacimiento;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $creado = 'CURRENT_TIMESTAMP';


    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set credencial
     *
     * @param string $credencial
     *
     * @return Usuario
     */
    public function setCredencial($credencial)
    {
        $this->credencial = $credencial;

        return $this;
    }

    /**
     * Get credencial
     *
     * @return string
     */
    public function getCredencial()
    {
        return $this->credencial;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Usuario
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set fNacimiento
     *
     * @param \DateTime $fNacimiento
     *
     * @return Usuario
     */
    public function setFNacimiento($fNacimiento)
    {
        $this->fNacimiento = $fNacimiento;

        return $this;
    }

    /**
     * Get fNacimiento
     *
     * @return \DateTime
     */
    public function getFNacimiento()
    {
        return $this->fNacimiento;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Usuario
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return Usuario
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
}

