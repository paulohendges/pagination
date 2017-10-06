<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

class Menu{
    protected static $_menu = [
        
        "pendencias" => [
            "realName" => "Pendências",
            "link" => "pendencias",
            "icon" => "alarm"
        ],
        "pedidos" => [
            "realName" => "Pedidos",
            "link" => "pedidos",
            "icon" => "assignment"
        ],
        "pratoscardapio" => [
            "realName" => "Pratos/Cardápio",
            "link" => "pendencias",
            "icon" => "restaurant"
        ],
        "caixa" => [
            "realName" => "Caixa",
            "link" => "caixa",
            "icon" => "attach_money"
        ],
        "usuarios" => [
            "realName" => "Usuários",
            "link" => "usuarios",
            "icon" => "perm_identity"
        ],
        "mesas" => [
            "realName" => "Mesas",
            "link" => "mesas",
            "icon" => "view_carousel"
        ]
    ];
    
    // permitidos
    protected static $_permitidos = [
        "ADMIN" => [
            "pendencias", "pedidos", "pratoscardapio", "caixa", "usuarios", "mesas"
        ],
        "GARCON" => [
            "pedidos", "pendencias"
        ],
        "COZINHA" => [
            "pendencias", "pratoscardapio"
        ]
    ];
    
    public static function renderMenu($perfilID) {
        
        $namePerfil = \App\Perfis::$_perfis[$perfilID];
        // monta o menu somente quando existir a chave do $_menu nos $_permitidos
        foreach (self::$_menu as $menu => $valor){
            if(in_array($menu, self::$_permitidos[$namePerfil])){
                $mountMenu[$menu] = $valor;
            }
        }
        
        return $mountMenu;
    }
}