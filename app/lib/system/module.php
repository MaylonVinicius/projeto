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