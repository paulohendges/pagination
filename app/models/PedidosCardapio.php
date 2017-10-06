<?php

class PedidosCardapio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $pedidos_cardapio_id;

    /**
     *
     * @var integer
     */
    protected $pedidos_pedidos_id;

    /**
     *
     * @var integer
     */
    protected $cardapio_cardapio_id;

    /**
     * Method to set the value of field pedidos_cardapio_id
     *
     * @param integer $pedidos_cardapio_id
     * @return $this
     */
    public function setPedidosCardapioId($pedidos_cardapio_id)
    {
        $this->pedidos_cardapio_id = $pedidos_cardapio_id;

        return $this;
    }

    /**
     * Method to set the value of field pedidos_pedidos_id
     *
     * @param integer $pedidos_pedidos_id
     * @return $this
     */
    public function setPedidosPedidosId($pedidos_pedidos_id)
    {
        $this->pedidos_pedidos_id = $pedidos_pedidos_id;

        return $this;
    }

    /**
     * Method to set the value of field cardapio_cardapio_id
     *
     * @param integer $cardapio_cardapio_id
     * @return $this
     */
    public function setCardapioCardapioId($cardapio_cardapio_id)
    {
        $this->cardapio_cardapio_id = $cardapio_cardapio_id;

        return $this;
    }

    /**
     * Returns the value of field pedidos_cardapio_id
     *
     * @return integer
     */
    public function getPedidosCardapioId()
    {
        return $this->pedidos_cardapio_id;
    }

    /**
     * Returns the value of field pedidos_pedidos_id
     *
     * @return integer
     */
    public function getPedidosPedidosId()
    {
        return $this->pedidos_pedidos_id;
    }

    /**
     * Returns the value of field cardapio_cardapio_id
     *
     * @return integer
     */
    public function getCardapioCardapioId()
    {
        return $this->cardapio_cardapio_id;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'pedidos_cardapio_id' => 'pedidos_cardapio_id', 
            'pedidos_pedidos_id' => 'pedidos_pedidos_id', 
            'cardapio_cardapio_id' => 'cardapio_cardapio_id'
        );
    }

}
