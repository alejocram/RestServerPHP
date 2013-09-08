<?php

include ('../dao/MysqlDBC.php');
include ('Session.php');

class DAO {

    private $dbEngine;

    function __construct() {
        $this->dbEngine = MysqlDBC::getInstance();
    }

    function getContacts() {
        $query = "SELECT id, name, email, address, gender FROM contacts";
        $result1 = $this->dbEngine->getResult($query);
        
        $ContactArray = array();
        while ($row = $result1->fetch_object()) {
            $Contact = Contact::getContactObject($row);
            $phone = new Phone('3', '3007778899', '5556644', '1112233');
            $Contact->setPhone($phone);
            array_push($ContactArray, $Contact);
        }
        return $ContactArray;
    }
}

?>
