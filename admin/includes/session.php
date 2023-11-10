<?php


class Session {

    private $singned_in = false;
    public $user_id;

    function __construct(){
        session_start();
        $this->check_login();
    }


    public function is_signed(){
        return $this->singned_in;
    }


    public function login($user){

        if($user){
            $_SESSION['user_id'] = $user->eid;
            $this->user_id = $_SESSION['user_id'];
            $this->singned_in = true;   
        }
    }


    public function logout(){
        unset( $_SESSION['user_id']);
        unset($this->user_id);
        $this->singned_in = false;  
      
    }

    private function check_login(){
       if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->singned_in = true;
     }else{
        unset($this->user_id);
        $this->singned_in = false;

        }
    }
}

$session = new Session();
?>