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
    	$tetete = 0;
        if($name == null) $name = "sysadmin_unique_session";
        return Session::getValueIf($name);
    }
}