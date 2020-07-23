<?php
   include('db.php');
   session_start();
   $email = $_SESSION['email'];

   //query for getting the email from the authenticate table.
   $ses_sql = mysqli_query($conn,"select `type` from `autenticate` where `email` = '$email' ");   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $type=$row['type'];
   //query for getting the username from the authenticate table
    $query1= mysqli_query($conn,"SELECT `name` FROM `autenticate` WHERE `email` = '$email' ")or die(mysqli_error());
   while($row=mysqli_fetch_array($query1))
     {
      $name=$row['name'];
    }

    


   if(!isset($_SESSION['email'])){
      
       echo "<script>
      window.location='index.html';
    </script>";
   } 
?>