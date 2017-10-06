<?php

namespace Model;

class Mesa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $mesa_id;

    /**
     *
     * @var string
     */
    protected $observacao;

    /**
     * Method to set the value of field mesa_id
     *
     * @param integer $mesa_id
     * @return $this
     */
    public function setMesaId($mesa_id)
    {
        $this->mesa_id = $mesa_id;

        return $this;
    }

    /**
     * Method to set the value of field observacao
     *
     * @param string $observacao
     * @return $this
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Returns the value of field mesa_id
     *
     * @return integer
     */
    public function getMesaId()
    {
        return $this->mesa_id;
    }

    /**
     * Returns the value of field observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'mesa_id' => 'mesa_id', 
            'observacao' => 'observacao'
        );
    }

}
