<?php

require_once("new_config.php");?>

<?php


class Database{ 
    public $connection;
    
    function __construct(){
        $this->open_db_connection();
       
      }


    public function open_db_connection(){
      /*$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);*/
      $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      if($this->connection->connect_errno){
        die("could not connect to the database" . $this->connect_error);
      }
    }

    public function query($sql){
      $result = $this->connection->query($sql);
      $this->confirm_query($result);
      return $result;
    }
    private function confirm_query($result){
        if(!$result){
            die("query failed". $this->connection->error);
        }
    }
    public function escape_string($string){
        //$escaped_string = $this->connection->real_escape_string($string);
        //echo "dhukchhe";
        $escaped_string = mysqli_real_escape_string($this->connection,$string);
        echo mysqli_real_escape_string($this->connection,$string);
        return $escaped_string;
    }

   /* public function insert_id(){
        return $this->connection->insert_id;
    }*/
}




$database  = new Database();

?>