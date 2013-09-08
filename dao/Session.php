<?php

session_start();

class Session {
    public function createSession($id_Person,$name){
        $_SESSION['id_Person']=$id_Person;
        $_SESSION['name']=$name;
        
        if(isset( $_SESSION['id_Person']) && isset($_SESSION['name'])){
            return true;
            
        }
        return false;
    }
    
    public function getSession()
    {
        if(isset( $_SESSION['id_Person']) && isset($_SESSION['name'])){
            return new User($_SESSION['id_Person'],$_SESSION['name']," ");
        }else{
            return false;
        }
    }    
}
?>
