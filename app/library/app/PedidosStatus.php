<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App;

class PedidosStatus{
    
    public static $_status = [
       1 => "Aberto",
       2 => "Na Cozinha",
       3 => "Aberto no Caixa",
       4 => "Finalizado"
    ];
    
//    public static function getStatus(){
//        return self::$_status;
//    }
}