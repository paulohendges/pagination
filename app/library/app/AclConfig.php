<?php

namespace App;
use App\Perfis;

use Phalcon\Acl;
use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Acl\RoleAware;
use Phalcon\Acl\ResourceAware;
use UserRole;
use ModelResource;
use Phalcon\Events\Event;
use Phalcon\Events\Manager as EventsManager;

class AclConfig{
    
    public $acl;

    private $_roles = [];
    
    // recursos do sistema
    private $_resources = [
        "login" => [
                "index",
                "logout"
            ],
        "index" => [
            "index"
        ],
        "pendencias" => [
            "index"
        ],
        "pedidos" => [
            "index"
        ],
        "permissao" => [
            "index"
        ],
        "pratos" => [
            "index"
        ],
        "caixa" => [
            "index"
        ],
        "usuarios" => [
            "index"
        ]
    ];
    
    // acessos permitidos
    private $_allows = [
        "ADMIN" => [
                "index" => "index",
                "login" => "index",
                "login" => "logout",
                "pendencias" => "index",
                "pedidos" => "index",
                "pratos" => "index",
                "caixa" => "index",
                "usuarios" => "index",
                "permissao" => "index"
            ],
            "GARCON" => [
                "index" => "index",
                "login" => "index",
                "login" => "logout",
                "pendencias" => "index",
                "pedidos" => "index",
                "permissao" => "index"
            ],
            "COZINHA" => [
                "index" => "index",
                "login" => "index",
                "login" => "logout",
                "pendencias" => "index",
                "pratos" => "index",
                "permissao" => "index"
            ]
    ];
    
    public function __construct() {
        $this->acl = new AclList();
        
        // por padrão nega todos os acessos
        $this->acl->setDefaultAction(
            \Phalcon\Acl::DENY
        );
        
        // seta os grupos de perfis de acesso
        $this->setRoles();
        
        // define os perfis de acesso
        $this->addRoles();
        
        // define os recursos que o sistema tem
        $this->adicionarRecursos();
        
        // adiciona permissoes de acesso
        $this->addAllows();
    }
    
    // adiciona os perfis que terão acesso
    public function addRoles(){
        foreach ($this->getRoles() as $role) {
            $this->acl->addRole(new Role($role));
        }
    }
    
    // define os recursos/telas existentes no sistema que serão acessadas
    public function adicionarRecursos(){
        foreach ($this->getResources() as $controller => $actions) {
            $this->acl->addResource(
                $controller,
                $actions
            );
        }
    }
    
    public function addAllows(){
        foreach ($this->getAllows() as $role => $allow) {
            foreach ($allow as $keyController => $actionValue) {
                $this->acl->allow($role, $keyController, $actionValue); 
            }
        }
    }
    
    public function isAllowed($profile, $controller, $action)
    {
        return $this->acl->isAllowed($profile, $controller, $action);
    }
    
    public function getRoles(){
        return $this->_roles;
    }
    
    public function setRoles(){
        $this->_roles = Perfis::$_perfis;
    }
    
    public function getResources() {
        return $this->_resources;
    }
    
    public function getAllows(){
        return $this->_allows;
    }
}