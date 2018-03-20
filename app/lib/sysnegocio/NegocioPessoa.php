<?php

namespace sysnegocio;

use system\entry;
use system\mvc\Connection;

class NegocioPessoa
{
    public function pessoa()
    {
        $connection = new Connection(entry::$config);
    }
}