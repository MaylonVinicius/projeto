<?php

namespace syspessoa;

use system\mvc\PageController;

class InserirPessoa extends PageController
{
    public function __construct()
    {
        parent::__construct($this, 'Inserir Pessoa');


        $this->initializeMenu();
        $this->display($this);
    }
}