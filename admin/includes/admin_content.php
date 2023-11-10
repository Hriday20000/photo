<?php

include("header.php");

?>


<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Admin 
            <small>Subheading</small>
        </h1>


        <?php

          
$result=  Users::find_all_user(1);
while($row = mysqli_fetch_array($result)){

    echo $row['username'];
}

        
/*
         $find_result =  Users::find_all_user();

         while($row = mysqli_fetch_array($find_result)){

            echo $row['username'] ."<br>";
    
        }*/

         /*
        $find_result = Users::find_all_user();


        foreach(  $find_result  as $user){

            echo $user->fname. "<br>";
        }*/



      




        

        $result = Users::find_all_user(1);
        echo   $result->username;








        /*$find_by_id = Users::find_user_id(2);
        $user = Users::initate($find_by_id);


echo $user->eid;
echo $user->username;


   $sql = "SELECT * FROM user WHERE eid=1";
   $result = $database->query($sql);
   $user_found = mysqli_fetch_array($result);

   echo $user_found['password'];*/
     

?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->


