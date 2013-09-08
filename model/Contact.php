<?php

class Contact{
    public $id;
    public $name;
    public $email;
    public $address;
    public $gender;
    public $phone;
//    private $phone_mobile = "mobile";
//    private $phone_home = "home";
//    private $phone_office = "office";
    
            
    function __construct($id, $name, $email, $address, $gender) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->gender = $gender;
//        $this->Phone = $Phone;
    }

    public function toArray() {
        return array(
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'address' => $this->getAddress(),
            'gender' => $this->getGender(),
            'phone' => ArrayHelper::toArrayObject($this->getPhone()),
        );
    }

    static public function getContactObject($object) {
        if (property_exists($object, "Contact")) {
            $object = $object->Contact;
        }
        return new Contact(
                $object->id, $object->name, $object->email, $object->address , $object->gender//, $object->Phone
        );
    }
    
     static public function getContactArray($object){
        $contacts=array();
        foreach ($object as $value) {
            array_push($contacts, Contact::getContactObject($value));
        }
        return $contacts;
    }
   
// <editor-fold defaultstate="collapsed" desc="Get and Sets">    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($Phone) {
        $this->phone = $Phone;
    }
 //</editor-fold>

}

?>
