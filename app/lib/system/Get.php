<?php

namespace system;

class Get extends Object
{
    public static function getValue($name)
    {
        if(Get::getExist($name)){
           return $_GET["$name"];
        }else
            return messageErrorUsuario("Não foi encontrado '$name' no get");
    }

    public static function getExist($name)
    {
        if(isset($_GET["$name"])) return true;
        else return false;
    }
}