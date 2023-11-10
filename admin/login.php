


<?php
require_once("includes/header.php");

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
        redirect("index.php");
    } 
    
    if($session->check_message()) {
        
      $message = "Your password or username is incorrect"; // Fix 'ypur' to 'your'
    
        redirect("login.php");
    }
}



else {
    $username = "";
    $password = "";
 
   
    
    //redirect("login.php");
}



?>


<div class="col-md-4 col-md-offset-3" style="background-color:white;">
    <h4 class="bg-danger"><?php echo $message; ?></h4> <!-- Fix $the_message to $message -->

    
    <form id="login-id" action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
        </div>

        <div class="form-group">
            <input type="submit"/>
          <!---  name="submit" value="submit" class="btn btn-primary"--->
        </div>
    </form>
</div>
