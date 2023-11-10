<?php
require_once("includes/header.php");



$session->logout();

redirect("login.php");
/*
if($session->is_signed()){
    redirect("index.php");
}

//if (isset($_POST['submit']))
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']); // Change 'paswword' to 'password'
    $user_found = Users::verify_user($username, $password);

    if ($user_found) { // Change 'if($found_user)' to 'if ($user_found)'
        $session->login($user_found);
        /*$message = "Test OK";*/

        /*
        redirect("index.php");
    } else {
        $message = "Your password or username is incorrect"; // Fix 'ypur' to 'your'
        redirect("login.php");
    }
} else {
    $username = "";
    $password = "";
    $message = "Wrong Test";
    
    //redirect("login.php");
}
*/
?>