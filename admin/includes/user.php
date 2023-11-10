<?php
class Users{
    /*
    public $eid;
    public $username;
    public $password;
    public $fname;
    public $lname;
*/

    public  static function find_all_user(){
        
        return self::find_query("SELECT * FROM user");
        


    }


    
    /*public  static  function  find_user_id($user_id){
        global $database;
        $the_result_array = self::find_query("select eid from user where username = 'hrd';");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
        return $found_user;
    }*/


    public static function verify_user($username,$password){
        global $database;
        //$username1;
        //$password1;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);
        //echo $username;

        $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
        //echo "$sql";
        //$sql .= "username = '{$username}' ";
        //$sql .= "password = '{$password}' ";
        //$sql .= "LIMIT 1";

        $the_result_array = self::find_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }


    public static function find_query($sql){
        
        global $database;
        $result = $database->query($sql);
        $the_object_array = array();
            while($row= mysqli_fetch_array($result) ){
                $the_object_array[] =  self::initate($row);
            }   
        return $the_object_array;
    }

    private static function initate($the_record){
        $obj = new self;
        /*
        $user->eid            = $find_by_id['eid'] . "<br>";
        $user->username       = $find_by_id['username'] . "<br>";
        $user->password        = $find_by_id['password'] . "<br>";
        $user->fname             = $find_by_id['fname'] . "<br>";
        $user->lname              = $find_by_id['lname'];*/
        foreach($the_record as $the_attribute=> $values){
        if($obj->has_the_attribute($the_attribute)){
            $obj->$the_attribute = $values;
            }
        }
        return $obj;
    }



    public function has_the_attribute($the_attribute){
        $obj_prop = get_object_vars($this);
        return array_key_exists($the_attribute,$obj_prop);
    }



}



?>