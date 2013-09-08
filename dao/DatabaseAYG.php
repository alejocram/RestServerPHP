<?php

/**
 * Current Database information
 */
class DatabaseAYG {

    private static $database;

    public static function getInstance(){
       if (DatabaseAYG::$database == null){
           DatabaseAYG::$database = new DatabaseAYG();
       }
       return DatabaseAYG::$database;
    }

    private $server;
    private $databaseName;
    private $user;
    private $password;

    //Local
    private function __construct() {
        $this->server = 'localhost';
        $this->databaseName = 'restexample';
        $this->user = 'root';
        $this->password = '';
    }
    
    public function getServer() {
        return $this->server;
    }

    public function getDatabaseName() {
        return $this->databaseName;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

}

?>
