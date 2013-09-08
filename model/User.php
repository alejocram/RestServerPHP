<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Usuario
 */
class User {
    private $contacts;
    
    function __construct($contacts) {
        $this->contacts = $contacts;
    }
    
    public function toArray() {
        return array(
            'contacts' => $this->getContacts(),
        );
    }

    static public function getUserObject($object) {
        if (property_exists($object, "User")) {
            $object = $object->User;
        }
        return new User(
                $object->contacts
        );
    }
    
     static public function getUserArray($object){
        $users=array();
        foreach ($object as $value) {
            array_push($users, Contact::getUserObject($value));
        }
        return $users;
    }
    
    public function getContacts() {
        return $this->contacts;
    }

    public function setContacts($contacts) {
        $this->contacts = $contacts;
    }


}

?>
