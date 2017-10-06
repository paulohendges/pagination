<?php

/* Author: Paulo Cesar Hendges
 * Clients Management
 * 
 */

namespace Db;
use Phalcon\DI;
use Model\Pedidos;

class PedidosDb{
    
    public static function buscaPedidos($params = null, $count = false, $perPage = null, $offset = null) {
        $builder = \App\App::createBuilder()
            ->columns('p.pedidos_id, p.valor_total, p.valor_total_acresc, p.pedidos_status_pedidos_status_id,'
                    . ' p.pessoa_pessoa_id, p.mesa_mesa_id, m.observacao, pes.nome, pes.login, ps.status')
            ->from(array('p' => 'Model\Pedidos'))
            ->innerJoin('Model\Mesa', 'm.mesa_id = p.mesa_mesa_id', 'm')
            ->innerJoin('Model\Pessoa', 'pes.pessoa_id = p.pessoa_pessoa_id', 'pes')
            ->innerJoin('Model\PedidosStatus', 'ps.pedidos_status_id = p.pedidos_status_pedidos_status_id', 'ps');
        
        if($params != null){

            if ( isset($params['pedido']) && !empty($params['pedido']) ){
                $builder->andWhere('p.pedidos_id = :pedidos_id:', array('pedidos_id' => $params['pedido']));
            } 
            
            if ( isset($params['garcon']) && !empty($params['garcon']) ){
                $builder->andWhere('pes.login = :garcon_nome:', array('garcon_nome' => $params['garcon']));
            }
            
            if ( isset($params['garcon']) && !empty($params['garcon']) ){
                $builder->andWhere('pes.login = :garcon_nome:', array('garcon_nome' => $params['garcon']));
            }
            
            if (isset($params['mesa']) && !empty($params['mesa'])) {
                $builder->andWhere('p.mesa_mesa_id = :mesa:', array('mesa' => $params['mesa']));
            }
            
            if (isset($params['status'])){
//                var_dump($params['status']);
                $builder->andWhere('p.pedidos_status_pedidos_status_id in (:status:)', array('status' => implode(",", $params['status'])));
            }
            
        }
        
        if($count) return $builder->getQuery()->execute()->count();
        
        if(!is_null($perPage) && !is_null($offset)){
            $builder->limit($perPage, $offset);
        }
//        echo $builder->getPhql(); die;
        
        return $builder->getQuery()->execute();
    }
    
}