<?php

include ('Service.php');

class ContactService extends Service{
    
    public function callService() {
        if (Service::checkParamRequest('action')) {
            switch ($_REQUEST['action']) {
                
                case 'showContacts' :
                    return $this->showContacts();
                    break;
            }
        }
    }

    public function includeSpecificFiles() {
        include('../model/Contact.php');
        include('../model/Phone.php');
//TODO: Temporal para prueba 
        include('../model/User.php');
    }    
    
    private function showContacts(){
//        $cont = Controller::getInstance()->showContacts();
//        var_dump($cont);
//        echo '</br>'.  json_encode($cont).'</br>';
//        $user = new User($cont);
//        echo '</br>'.  json_encode($user).'</br>';
        return ArrayHelper::toArray(Controller::getInstance()->showContacts());
//        return json_encode(Controller::getInstance()->showContacts());
    }
}
/**
 * Important! This line is needed to instantiate the service
 */
new ContactService();
?>
