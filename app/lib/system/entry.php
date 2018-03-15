<?php

namespace system;

use sysadmin;

class entry{

    public function __construct()
    {
        $this->page();
    }
    private function page()
    {
        $page = get("page");
        switch ($page){
            case "loginPage": new sysadmin\LoginPage();
                break;
        }
    }
}