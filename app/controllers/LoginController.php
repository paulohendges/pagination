<?php
use Model\Pessoa as Pessoa;

class LoginController extends ControllerBase
{   
    public function initialize() {
    }

    public function indexAction()
    {

        // para logar testa se existe post
        if ($this->request->isPost()) {
            // pegando os dados de usuario e senha do POST
            $login = $this->request->getPost('user');
            $senha = $this->request->getPost('password');
            // pegando o usuário pelo usuário digitado
            $isLogin = false;
            $user = Pessoa::findFirstByLogin($login);
            // achou usuario
            if ($user) {
                $passou = $this->security->checkHash($senha, $user->getSenha());
                // passou no check da senha
                if($passou){
                    $ativo = $user->getStatus();
                    // usuário ta ativo
                    if($ativo){
                        $isLogin = true;
                        // REGISTRA SESSÃO //
                        $this->session->set('usuario', $user->getLogin());
                        $this->session->set('idUsuario', $user->getPessoaId());
                        $this->session->set('nome', $user->getNome());
                        $this->session->set('perfilId', $user->getPerfilPerfilId());
                        $this->session->set('perfil', \App\Perfis::$_perfis[$user->getPerfilPerfilId()]);
//                        $this->view->setMainView('layouts/index');
                        $this->response->redirect('index/index');
                    }
                }
            }
            
            $this->flash->error("Usuário ou senha inválidos");
                
        }
    }
    public function logoutAction(){
        $this->session->destroy();
        $this->response->redirect('login/index');
    }

}

