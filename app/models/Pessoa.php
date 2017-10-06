<?php

namespace Model;

class Pessoa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $pessoa_id;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $login;

    /**
     *
     * @var string
     */
    protected $senha;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $perfil_perfil_id;

    /**
     * Method to set the value of field pessoa_id
     *
     * @param integer $pessoa_id
     * @return $this
     */
    public function setPessoaId($pessoa_id)
    {
        $this->pessoa_id = $pessoa_id;

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
     * Method to set the value of field login
     *
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Method to set the value of field senha
     *
     * @param string $senha
     * @return $this
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field perfil_perfil_id
     *
     * @param integer $perfil_perfil_id
     * @return $this
     */
    public function setPerfilPerfilId($perfil_perfil_id)
    {
        $this->perfil_perfil_id = $perfil_perfil_id;

        return $this;
    }

    /**
     * Returns the value of field pessoa_id
     *
     * @return integer
     */
    public function getPessoaId()
    {
        return $this->pessoa_id;
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
     * Returns the value of field login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Returns the value of field senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field perfil_perfil_id
     *
     * @return integer
     */
    public function getPerfilPerfilId()
    {
        return $this->perfil_perfil_id;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'pessoa_id' => 'pessoa_id', 
            'nome' => 'nome', 
            'login' => 'login', 
            'senha' => 'senha', 
            'status' => 'status', 
            'perfil_perfil_id' => 'perfil_perfil_id'
        );
    }

}
