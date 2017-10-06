<?php

class Cardapio extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cardapio_id;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var integer
     */
    protected $tempo_extimado;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     * Method to set the value of field cardapio_id
     *
     * @param integer $cardapio_id
     * @return $this
     */
    public function setCardapioId($cardapio_id)
    {
        $this->cardapio_id = $cardapio_id;

        return $this;
    }

    /**
     * Method to set the value of field nome
     *
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Method to set the value of field tempo_extimado
     *
     * @param integer $tempo_extimado
     * @return $this
     */
    public function setTempoExtimado($tempo_extimado)
    {
        $this->tempo_extimado = $tempo_extimado;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Returns the value of field cardapio_id
     *
     * @return integer
     */
    public function getCardapioId()
    {
        return $this->cardapio_id;
    }

    /**
     * Returns the value of field nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Returns the value of field tempo_extimado
     *
     * @return integer
     */
    public function getTempoExtimado()
    {
        return $this->tempo_extimado;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'cardapio_id' => 'cardapio_id', 
            'nome' => 'nome', 
            'tempo_extimado' => 'tempo_extimado', 
            'valor' => 'valor'
        );
    }

}
