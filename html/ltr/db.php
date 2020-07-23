<?php
  
   $conn=mysqli_connect("localhost","root","","cms");//Connecting to database
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 
  
?>