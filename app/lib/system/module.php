<?php

require_once "../../vendor/autoload.php";


function get($name)
{
    return \system\Get::getValue($name);
}

function messageErrorUsuario($msg)
{
    print "<div style='font-family: Cambria, Courier, monospace'>";
    print "<b>Olá, ocorreu o seguinte erro:</b><br /><br />";
    print "{$msg} ";
    print "<br /><br /><b>Por favor entre em contato com o suporte para solucionar este problema.</b>";
    print "</div>";
}

function getNameClass($class) {

    $class = get_class($class);
    $path = explode('\\', $class);
    return array_pop($path);
}

function getNameNamespace($class) {

    $namespace = get_class($class);
    $path = explode('\\', $namespace);
    return $path[0];
}

function dd($var){
    Kint::dump($var);
}
