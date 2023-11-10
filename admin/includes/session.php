<?php


class Session {

    private $singned_in = false;
    public $user_id;
    public $message;

    function __construct(){
        session_start();
        $this->check_login();
        $this->check_message();
    }



    public function message($msg=""){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;}
    else{return $this->message;}
    }



    private function check_message(){

         if(isset($_SESSION['message'])){
          
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);}

            else{

                $this->message = "";


            }




    }


    public function is_signed(){
        return $this->singned_in;
    }


    public function login($user){
        if($user){
            $_SESSION['user_id'] = $user;
            $this->user_id = $_SESSION['user_id'] ;
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