<?php

namespace system;

use sysadmin;

class entry{

    /**
     * @var Config
     */
    static public $config;

    public function __construct()
    {
        entry::$config = new Config();

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