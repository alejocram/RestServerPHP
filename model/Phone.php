<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Phone
 *
 * @author Usuario
 */
class Phone {
    public $id;
    public $mobile;
    public $home;
    public $office;
    
    function __construct($id, $mobile, $home, $office) {
        $this->id = $id;
        $this->mobile = $mobile;
        $this->home = $home;
        $this->office = $office;
    }
    
    public function toArray() {
        return array(
            'mobile' => $this->getMobile(),
            'home' => $this->getHome(),
            'office' => $this->getOffice(),
        );
    }
    
    static public function getPhoneObject($object) {
        if (property_exists($object, "Phone")) {
            $object = $object->Phone;
        }
        return new Contact(
                $object->id, $object->mobile, $object->home, $object->office
        );
    }
    
     static public function getPhoneArray($object){
        $phones=array();
        foreach ($object as $value) {
            array_push($phones, Phone::getPhoneObject($value));
        }
        return $phones;
    }
    
// <editor-fold defaultstate="collapsed" desc="Get and Sets">    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getHome() {
        return $this->home;
    }

    public function setHome($home) {
        $this->home = $home;
    }

    public function getOffice() {
        return $this->office;
    }

    public function setOffice($office) {
        $this->office = $office;
    }
// </editor-fold>    

}

?>
