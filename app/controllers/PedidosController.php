<?php

use Model\Pedidos;
use Db\PedidosDb;
use App\Pagination;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

/**
 * Controller da tela inicial do admin.
 */
class PedidosController extends ControllerBase
{
    public function indexAction() {
        
        $page = (isset($_POST['page-submit'])) ? $_POST['page-submit'] : 1;
        
        $request = $this->request;
        $Pagination = new Pagination($page, 10);
        
        if($request->isPost()){
            
            $params = $request->getPost();
            $Pagination->setTotal(Db\PedidosDb::buscaPedidos($params, true));
            $Pagination->setNumberOfPages();
            $Pagination->getNumberOfPages();
            $Pedidos = Db\PedidosDb::buscaPedidos($params, false, $Pagination->getPerPage(), $Pagination->getOffset());

        }else{
            
            $Pagination->setTotal(Db\PedidosDb::buscaPedidos(null, true));
            $Pagination->setNumberOfPages();
            $Pagination->getNumberOfPages();
            $Pedidos = Db\PedidosDb::buscaPedidos(null, false, $Pagination->getPerPage(), $Pagination->getOffset());
            
        }
        
        if (isset($params['status'])) {
//            var_dump($status); die;
            $status = $params['status'];
        }else{
            $status = [];
        }
        
        $this->tag->setDefaults(['status[]' => $status], true);
        $this->view->pedidos = $Pedidos;
        $this->view->status = $status;
        $this->view->pagination = $Pagination;
    }
    
    
}
