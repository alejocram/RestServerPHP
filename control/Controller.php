<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Usuario
 */
class Controller {
    private $dao;
    // <editor-fold defaultstate="collapsed" desc="Singleton Section">
    private static $instance;

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // </editor-fold>

    function __construct() {
        $this->dao = new DAO();
    }
    
    public function showContacts() {
        return $this->dao->getContacts();
        //return array('contacts'=>array('id'=>'c199','name'=>'Alejandro Carmona',));
    }
}

?>
