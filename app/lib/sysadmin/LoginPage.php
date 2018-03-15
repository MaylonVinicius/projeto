<?php

namespace sysadmin;

use system\mvc\PageController;

class LoginPage extends PageController
{
    public function __construct()
    {
//        if(HelperAdmin::getSession())
//            echo "esta logado";
//        else
//            echo "nao esta logado";
        $smart = new \Smarty();
        $smart->setTemplateDir("../template/");
        $smart->assign("teste", "testeConcluido");
		$smart->assign("tt", "outroTeste");
		$smart->assign("pt", "Vai dar pt");
		$smart->assign("g", "Vamos Viver");
        $smart->display("LoginPage.tpl");
    }
}