<?php

namespace system\mvc;

use PDO;
use PDOException;
use system\Config;

class Connection{

    /**
     * @var  Config
     */
    private $config;

    /**
     * @var PDO
     */
    public $connection;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->getConnection();
    }

    public function __destruct() {
        $this->connection = NULL;
    }

    private function getConnection() {
        // Check if the connection is already established
        if ($this->connection == NULL) {
            // Create the connection
            $dsn = "mysql:" .
                "host=" . $this->config->host .
                ";dbname=" . $this->config->dbname;
            try {
                $this->connection = new PDO( $dsn, $this->config->username, $this->config->password);
            } catch( PDOException $e ) {
                echo __LINE__ .$e->getMessage();
            }
        }
        return $this->connection;
    }
}