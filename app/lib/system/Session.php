<?php

namespace system;

class Session{

    public static function getValueIf($name)
    {
        if (Session::getExists($name)) return Session::getObject($name);
        return null;
    }

    public static function getExists($name = null)
    {
        if ($name && isset($_SESSION[$name]))
            $ok = true;
        elseif (!$name && !empty($_SESSION))
            $ok = true;
        else
            $ok = false;
        return $ok;
    }

    public static function getObject($name)
    {
        $valor = $_SESSION[$name];
        return $valor;
    }
}