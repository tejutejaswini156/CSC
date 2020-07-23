<?php
include 'db.php';
session_start();
if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['register']))
{
  $username=$_POST['uname'];
  $password=$_POST['upwd'];
  $type=$_POST['type'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $select = mysqli_query($conn, "SELECT `email` FROM `autenticate` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {   
   echo "<script type='text/javascript'>alert(\"Email-ID is already existed.\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="register.html";';
      echo '</script>';
    }
  $query=mysqli_query($conn,"INSERT INTO `autenticate`(`name`, `password`, `email`, `number`, `type`) VALUES ('$username','$password','$email','$number','$type')");
   echo "<script type='text/javascript'>alert(\"Registered Successfully@@!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="index.html";';
      echo '</script>';
}
elseif ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['login'])) {
  $email=$_POST['email'];
  $type=$_POST['type'];
  $password=$_POST['password'];  
  $query0=mysqli_query($conn,"SELECT `name`, `password` FROM `autenticate` where `email`='$email' AND `type`='$type' AND `status`='0' ");
   $row0=mysqli_fetch_array($query0);
   $check=mysqli_num_rows($query0);
   $query1=mysqli_query($conn,"SELECT `name`, `password` FROM `autenticate` where `email`='$email' AND `type`='$type' AND `status`='1' ");
  $row=mysqli_fetch_array($query1);
  $count=mysqli_num_rows($query1);
  if($check==1&&$password==$row0[1])
  {
    echo "<script type='text/javascript'>alert(\"your registration is under verification please be patience!!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="index.html";';
      echo '</script>'; 

  }
  else if($count==1&&$password==$row[1])
  {
   
       $_SESSION['email'] = $email;
   echo "<script type='text/javascript'>alert(\"Logged In Successfully!!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="dashboard.php";';
      echo '</script>'; 
  }
  else
  {
    echo "<script type='text/javascript'>alert(\"Invalid Credentials!!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="index.html";';
      echo '</script>'; 
  }

 
}
elseif ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['addmember']))
{
  $username=$_POST['uname'];
  $password=$_POST['upwd'];
  $type='grievancecellmember';
  $number=$_POST['number'];
  $email=$_POST['email'];
  $wplatform=$_POST['wplatform'];
  $status='1';
  $select = mysqli_query($conn, "SELECT `email` FROM `autenticate` WHERE `email` = '".$_POST['email']."' ") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {   
   echo "<script type='text/javascript'>alert(\"Email-ID is already existed.\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="addgrievancecellmember.php";';
      echo '</script>';
}
  $query=mysqli_query($conn,"INSERT INTO `autenticate`(`name`, `password`, `email`, `number`, `type`,`w_platform`,`status`) VALUES ('$username','$password','$email','$number','$type','$wplatform','$status')");
   echo "<script type='text/javascript'>alert(\"Registered  Successfully@@!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="grievancecellmembers.php";';
      echo '</script>';

}
else
{
	echo "Error Page Loading!!!";
}
?>