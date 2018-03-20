<?php

namespace sysadmin;

use system\mvc\PageController;

class LoginPage extends PageController
{
    public function __construct()
    {
        parent::__construct($this);

        $this->values();
        $this->display($this);
    }
    public function values(){
        $this->view->getSmarty()->assign("saudacao", "Boa Noite");
    }
}