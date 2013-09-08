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
//TODO dato quemado, recuperar de bd
            $phone = new Phone('3', '3007778899', '5556644', '1112233');
            $Contact->setPhone($phone);
            array_push($ContactArray, $Contact);
        }
        return $ContactArray;
    }
    
    function addContact($Contact){
        //Recupera los datos desde el objecto que recibe
        $name = $this->dbEngine->cleanVar($Contact->getName());
        $email = $this->dbEngine->cleanVar($Contact->getEmail());
        $address = $this->dbEngine->cleanVar($Contact->getAddress());
        $gender = $this->dbEngine->cleanVar($Contact->getGender());
        
        $query = "INSERT INTO `contacts` (`name`,`email`,`address`,`gender`)
                VALUES ('$name','$email','$address','$gender')";

        $Contact = new Contact(0, $name, $email, $address, $gender);
        //Realiza el insert en base de datos y pasa el id al objeto de retorno
        $Contact->setId($this->dbEngine->insert($query));
        return $Contact;
    }
}

?>
