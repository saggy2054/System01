<?php
     
    
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db_name = "jewelry_management_system";
     $port=3307;


     $cann = new mysqli($servername ,$username ,$password ,$db_name,$port);

     if ($cann->connect_error) {
    die("connection failed:".$cann->connect_error);
  }
  //  else
        //{
      // echo "connected with database";


       // }
     
  ?>
