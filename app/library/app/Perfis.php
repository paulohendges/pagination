<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App;

class Perfis{
    public static $_perfis = [
       1 => "ADMIN",
       2 => "GARCON",
       3 => "COZINHA"
    ];
    
    public static function getPerfis(){
        return self::$_perfis;
    }
}