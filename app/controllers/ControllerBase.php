<?php

use Phalcon\Mvc\Controller;
use App\AclConfig;

abstract class ControllerBase extends Controller
{
    public function initialize(){
        
        $acl = new AclConfig(); 
        $controllerName = $this->dispatcher->getControllerName();
        $actionName = $this->dispatcher->getActionName();
        $perfil = $this->session->get('perfil');
        if (!$acl->isAllowed($perfil, $controllerName, $actionName)) {
            
            $this->view->pick('permissao/index');
        }
        
        $this->view->setMainView('mainView/index');
        
        if(!$this->session->get('usuario')){
            $this->view->setMainView('login/index');
            $this->response->redirect('login/index');
        }
        
    }
}
