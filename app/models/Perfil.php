<?php

class Perfil extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $perfil_id;

    /**
     *
     * @var string
     */
    protected $tipo_perfil;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     * Method to set the value of field perfil_id
     *
     * @param integer $perfil_id
     * @return $this
     */
    public function setPerfilId($perfil_id)
    {
        $this->perfil_id = $perfil_id;

        return $this;
    }

    /**
     * Method to set the value of field tipo_perfil
     *
     * @param string $tipo_perfil
     * @return $this
     */
    public function setTipoPerfil($tipo_perfil)
    {
        $this->tipo_perfil = $tipo_perfil;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Returns the value of field perfil_id
     *
     * @return integer
     */
    public function getPerfilId()
    {
        return $this->perfil_id;
    }

    /**
     * Returns the value of field tipo_perfil
     *
     * @return string
     */
    public function getTipoPerfil()
    {
        return $this->tipo_perfil;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'perfil_id' => 'perfil_id', 
            'tipo_perfil' => 'tipo_perfil', 
            'descricao' => 'descricao'
        );
    }

}
