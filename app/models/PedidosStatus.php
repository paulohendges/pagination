<?php

namespace Model;

class PedidosStatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $pedidos_status_id;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     * Method to set the value of field pedidos_status_id
     *
     * @param integer $pedidos_status_id
     * @return $this
     */
    public function setPedidosStatusId($pedidos_status_id)
    {
        $this->pedidos_status_id = $pedidos_status_id;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field pedidos_status_id
     *
     * @return integer
     */
    public function getPedidosStatusId()
    {
        return $this->pedidos_status_id;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'pedidos_status_id' => 'pedidos_status_id', 
            'status' => 'status'
        );
    }

}
