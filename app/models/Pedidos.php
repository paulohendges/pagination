<?php

namespace Model;

class Pedidos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $pedidos_id;

    /**
     *
     * @var double
     */
    protected $valor_total;

    /**
     *
     * @var double
     */
    protected $valor_total_acresc;

    /**
     *
     * @var integer
     */
    protected $mesa_mesa_id;

    /**
     *
     * @var integer
     */
    protected $pedidos_status_pedidos_status_id;

    /**
     *
     * @var integer
     */
    protected $pessoa_pessoa_id;

    /**
     * Method to set the value of field pedidos_id
     *
     * @param integer $pedidos_id
     * @return $this
     */
    public function setPedidosId($pedidos_id)
    {
        $this->pedidos_id = $pedidos_id;

        return $this;
    }

    /**
     * Method to set the value of field valor_total
     *
     * @param double $valor_total
     * @return $this
     */
    public function setValorTotal($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    /**
     * Method to set the value of field valor_total_acresc
     *
     * @param double $valor_total_acresc
     * @return $this
     */
    public function setValorTotalAcresc($valor_total_acresc)
    {
        $this->valor_total_acresc = $valor_total_acresc;

        return $this;
    }

    /**
     * Method to set the value of field mesa_mesa_id
     *
     * @param integer $mesa_mesa_id
     * @return $this
     */
    public function setMesaMesaId($mesa_mesa_id)
    {
        $this->mesa_mesa_id = $mesa_mesa_id;

        return $this;
    }

    /**
     * Method to set the value of field pedidos_status_pedidos_status_id
     *
     * @param integer $pedidos_status_pedidos_status_id
     * @return $this
     */
    public function setPedidosStatusPedidosStatusId($pedidos_status_pedidos_status_id)
    {
        $this->pedidos_status_pedidos_status_id = $pedidos_status_pedidos_status_id;

        return $this;
    }

    /**
     * Method to set the value of field pessoa_pessoa_id
     *
     * @param integer $pessoa_pessoa_id
     * @return $this
     */
    public function setPessoaPessoaId($pessoa_pessoa_id)
    {
        $this->pessoa_pessoa_id = $pessoa_pessoa_id;

        return $this;
    }

    /**
     * Returns the value of field pedidos_id
     *
     * @return integer
     */
    public function getPedidosId()
    {
        return $this->pedidos_id;
    }

    /**
     * Returns the value of field valor_total
     *
     * @return double
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    /**
     * Returns the value of field valor_total_acresc
     *
     * @return double
     */
    public function getValorTotalAcresc()
    {
        return $this->valor_total_acresc;
    }

    /**
     * Returns the value of field mesa_mesa_id
     *
     * @return integer
     */
    public function getMesaMesaId()
    {
        return $this->mesa_mesa_id;
    }

    /**
     * Returns the value of field pedidos_status_pedidos_status_id
     *
     * @return integer
     */
    public function getPedidosStatusPedidosStatusId()
    {
        return $this->pedidos_status_pedidos_status_id;
    }

    /**
     * Returns the value of field pessoa_pessoa_id
     *
     * @return integer
     */
    public function getPessoaPessoaId()
    {
        return $this->pessoa_pessoa_id;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'pedidos_id' => 'pedidos_id', 
            'valor_total' => 'valor_total', 
            'valor_total_acresc' => 'valor_total_acresc', 
            'mesa_mesa_id' => 'mesa_mesa_id', 
            'pedidos_status_pedidos_status_id' => 'pedidos_status_pedidos_status_id', 
            'pessoa_pessoa_id' => 'pessoa_pessoa_id'
        );
    }

}
