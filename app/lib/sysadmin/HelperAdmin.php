<?php

namespace sysadmin;

use system\Session;

class HelperAdmin{

    /**
     * @param null $name
     * @return bool
     */
    public static function getSession($name = null)
    {
    	$teste = "teste";
        if($name == null) $name = "sysadmin_unique_session";
        return Session::getValueIf($name);
    }
}