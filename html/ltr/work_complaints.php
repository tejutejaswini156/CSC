<?php
 include 'session.php';
 include 'header.php';
//admin
if (isset($_POST['action1'])=='assign Complaint' &&  isset($_POST['comp_id'])) 
{
  include "db.php";
  $gcm_name=$_POST['gcm_name'];
  $cid=$_POST['comp_id'];
  $status='Assigned';
  $queryz=mysqli_query($conn,"UPDATE `complaints` SET gcm_name='$gcm_name' , status='$status' , assigned_date='$date1' WHERE cid='$cid'");
  if(!$queryz)
  {
    echo "<script type='text/javascript'>alert(\"complaints NOT assigned \")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
  }
  else
  {
   echo "<script type='text/javascript'>alert(\"complaint Assigned successfully \")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
  }

}
//Update
 if(isset($_POST['action2']) &&  isset($_POST['comment'])) 
{
  include "db.php";
  $comment=$_POST['comment'];
  $cid=$_POST['comp_id'];
  $status='working';
  $queryy=mysqli_query($conn,"UPDATE `complaints` SET gcm_comment='$comment' , status='$status' WHERE cid='$cid'");
  if(!$queryy)
  {
    echo "<script type='text/javascript'>alert(\"Status NOT Updated  \")</script>";
    echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
  }
  else
  {
   echo "<script type='text/javascript'>alert(\"Status Updated successfully \")</script>";
   echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
          
  }
}
//Close
if(isset($_POST['action3']) &&  isset($_POST['comment'])) 
{
  
  $comment=$_POST['comment'];
  $cid=$_POST['comp_id'];
  $status='closed';
  $queryx=mysqli_query($conn,"UPDATE `complaints` SET gcm_comment='$comment' , status='$status', close_date='$date1' WHERE cid='$cid'");
  if(!$queryx)
  {
    echo "<script type='text/javascript'>alert(\"complaint NOT closed  \")</script>";
    echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
  }
  else
  {
   echo "<script type='text/javascript'>alert(\"complaint closed  successfully \")</script>";
   echo '<script type="text/javascript">';
      echo 'window.location="assigncomplaints.php";';
      echo '</script>';
     
  }

}

?> 
  <!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>work_complaint</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" 

    href="../../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/timeline.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="dashboard.php" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/robust-logo-light.png" data-expand="../../app-assets/images/logo/robust-logo-light.png" data-collapse="../../app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
           </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
                <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round">
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
         
           <li class=" nav-item"><a href="dashboard.php"><i class="icon-home3"></i><span data-i18n="nav.changelog.main" class="menu-title">Dashboard</span> </a>
          </li>
          <?php 
          if($type=='admin')
          {
            ?>
                <li class=" nav-item"><a href="grievancecellmembers.php"><i class="icon-android-people"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Grievance cell members</span></a>
            
                </li>
                <li class="nav-item"><a href="registeredusers.php"><i class="icon-android-person-add"></i><span data-i18n="nav.changelog.main" class="menu-title">Registered Users</span></a>
               </li>
               
               <li class="active nav-item"><a href="#"><i class="icon-ios-briefcase-outline"></i><span data-i18n="nav.cards.main" class="menu-title">complaints</span></a>
            <ul class="menu-content">
        <li><a href="assigncomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">Assign complaints</a>
              </li>
              <li><a href="view_complaint.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">view complaints</a>
              </li>
              <li class="active"><a href="closecomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">close complaints</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-clipboard"></i><span data-i18n="nav.advance_cards.main" class="menu-title">reports</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-plus "></i><span data-i18n="nav.advance_cards.main" class="menu-title">ADD institution details</span></a>
            
          </li>
        

            <?php
          }
           ?>
           
           <?php 
          if($type=='grievancecellmember')
          {
            ?>
            <li class=" nav-item"><a href="#"><i class="icon-ios-briefcase-outline"></i><span data-i18n="nav.cards.main" class="menu-title">complaints</span></a>
            <ul class="menu-content">
            <li><a href="view_complaint.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">view complaints</a>
              </li>
              <li><a href="assigncomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">un-attended complaints</a>
              </li>
              <li><a href="closecomplaints.php" data-i18n="nav.cards.card_bootstrap" class="menu-item">working complaints</a>
              </li>
            </ul>
          </li>
           <li class=" nav-item"><a href="#"><i class="icon-clipboard"></i><span data-i18n="nav.advance_cards.main" class="menu-title">reports</span></a>
            
          </li>
                  

            <?php
          }
           ?>    

         

        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Complaint Management System</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Carousel start -->

          <!-- Contextual classes start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card card-inverse">
            <div class="card-header bg-purple">
                <h4 class="card-title"><center>Work on Complaint</center></h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                   
                    <div class="table-responsive">
                      <?php
                       if($type=='admin')
                       {
                       ?>
                        <table class="table table-bordered table-striped">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-6">
                            </colgroup>
                            
                            <tbody>
                              <?php 
                              if (isset($_POST['action']) == 'Action') {
                                     include "db.php";
                                  $comp_id = $_REQUEST['comp_id'];
                     $query1=mysqli_query($conn,"SELECT * FROM `complaints` WHERE `status`='open' AND `cid`='$comp_id'");
                          while ($row=mysqli_fetch_array($query1)) {
                                                        
                          ?>
                                <tr>
                                   <td class="blue">COMPLAINER NAME:</td>                                    
                                    <td><?php echo $row['cust_name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT ID:</td>
                                    <td><?php echo $row['cid']; ?></td>
                                </tr>
                                 <tr>
                                    <td class="blue">CREATE DATE:</td>
                                    <td><?php echo $row['create_date']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT TITLE:</td>
                                    <td><?php echo $row['comp_title']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">COMPLAINT TYPE:</td>
                                    <td><?php echo $row['comp_type']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT DESCRIPTION:</td>
                                    <td><?php echo $row['comp_desc']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">STATUS:</td>
                                    <td class="teal"> open</td>
                                </tr>
                                <tr>
                                    <td class="orange">ASSIGN COMPLAINT TO :</td>
                                    <td>
                              <form method="POST" action="">
                                             
                             <select name="gcm_name" class="form-control  select-lg" required>
                             <option value="" selected disabled hidden>Select Member</option>
                          <?php
                           $query2=mysqli_query($conn,"SELECT * FROM `autenticate` WHERE `type`='grievancecellmember' ");
                          while ($row=mysqli_fetch_array($query2)) {
                            ?>

                             <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                             }
                           ?>  
                           
                                
                           </select>                          

                            </td>
                                </tr>
                         <tr>                                      
                                  <td colspan="2" >  
                                  <?php
                                 include "db.php";
                        $query1=mysqli_query($conn,"SELECT * FROM `complaints` WHERE `status`='open' AND `cid`='$comp_id'");
                          while ($row=mysqli_fetch_array($query1)) {
                          ?>                                  
                            <input type="hidden" name="comp_id" value="<?php echo $row['cid']; ?>"/>        
                            <center> <input type="submit" name="action1" value="assign Complaint" class="btn btn-xs btn-info" /> </center>
                            <?php
                          }
                          ?>
          
                              </form> 
                           
                                    </td>
                                </tr>
                                <?php
                                      } 
                                   }
                          
                              ?>
                              </tbody>

                               
                        </table>
                        <?php
                        }

                        ?>  


                      <?php
                       if($type=='grievancecellmember')
                       {
                       ?>
                        <table class="table table-bordered table-striped">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-6">
                            </colgroup>
                            
                            <tbody>
                              <?php 
                              if (isset($_POST['action']) == 'Action') {
                                     include "db.php";
                                  $comp_id = $_REQUEST['comp_id'];
                        $query1=mysqli_query($conn,"SELECT * FROM `complaints` WHERE `status`='Assigned' OR `status`='working'AND `cid`='$comp_id' AND `gcm_name`='$name'");
                          while ($row=mysqli_fetch_array($query1)) 
                          {
                            $status=$row['status'];
                            if($status=='Assigned')
                            {

                                                        
                            ?>
                                <tr>
                                   <td class="blue">COMPLAINER NAME:</td>                                    
                                    <td><?php echo $row['cust_name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT ID:</td>
                                    <td><?php echo $row['cid']; ?></td>
                                </tr>
                                 <tr>
                                    <td class="blue">CREATE DATE:</td>
                                    <td><?php echo $row['create_date']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT TITLE:</td>
                                    <td><?php echo $row['comp_title']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">COMPLAINT TYPE:</td>
                                    <td><?php echo $row['comp_type']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT DESCRIPTION:</td>
                                    <td><?php echo $row['comp_desc']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">STATUS:</td>
                                    <td class="teal">Assigned</td>
                                </tr>
                                 <tr>
                                    <td class="orange">COMMENT</td>
                                    <td>
                                        <form method="POST" action="">
                                           <textarea class="form-control textarea-lg" rows="3" name="comment"></textarea>
                                        

                                    </td>
                                </tr>
                                  <tr>                                      
                                  <td colspan="2" >  
                                  <?php
                                 
                        $query11=mysqli_query($conn,"SELECT * FROM `complaints` WHERE `status`='Assigned'AND `cid`='$comp_id'AND `gcm_name`='$name'");
                          while ($row=mysqli_fetch_array($query11)) {
                          ?>                                  
                            <input type="hidden" name="comp_id" value="<?php echo $row['cid']; ?>"/>        
                            <center>                            
                              <input type="submit" name="action2" value="Update Complaint Status" class="btn btn-xs btn-info" />
                                 
                              <input type="submit" name="action3" value="close complaint" class="btn btn-xs btn-danger" /> </center>
                            <?php
                          }
                          ?>
          
                              </form> 
                           
                                    </td>
                                </tr>
                                <?php
                              }
                              elseif ($status=='working') {
                                ?>
                                <tr>
                                   <td class="blue">COMPLAINER NAME:</td>                                    
                                    <td><?php echo $row['cust_name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT ID:</td>
                                    <td><?php echo $row['cid']; ?></td>
                                </tr>
                                 <tr>
                                    <td class="blue">CREATE DATE:</td>
                                    <td><?php echo $row['create_date']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT TITLE:</td>
                                    <td><?php echo $row['comp_title']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">COMPLAINT TYPE:</td>
                                    <td><?php echo $row['comp_type']; ?></td>
                                </tr>
                                <tr>
                                    <td class="orange">COMPLAINT DESCRIPTION:</td>
                                    <td><?php echo $row['comp_desc']; ?></td>
                                </tr>
                                <tr>
                                    <td class="blue">STATUS:</td>
                                    <td class="teal">working</td>
                                </tr>
                                 <tr>
                                    <td class="orange">COMMENT</td>
                                    <td>
                                        <form method="POST" action="">
                                          <textarea class="form-control textarea-lg" rows="3" name="comment" ></textarea>
                                        

                                    </td>
                                </tr>
                                  <tr>                                      
                                  <td colspan="2" >  
                                  <?php
                                 include "db.php";
                        $query1=mysqli_query($conn,"SELECT * FROM `complaints` WHERE  `status`='working'AND `cid`='$comp_id'AND `gcm_name`='$name'");
                          while ($row=mysqli_fetch_array($query1)) {
                          ?>                                  
                            <input type="hidden" name="comp_id" value="<?php echo $row['cid']; ?>"/>        
                            <center>                            
                                                              
                              <input type="submit" name="action3" value="close complaint" class="btn btn-xs btn-danger" /> </center>
                            <?php
                          }
                          ?>
          
                              </form> 
                           
                                    </td>
                                </tr>
                                <?php
                                # code...
                              }
                                      } 
                                   }
                          
                              ?>                            

                                
                            </tbody>

                               
                        </table>
                        <?php
                        }

                        ?>                    
                         
           
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<!-- Contextual classes end -->


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!--  <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>  -->

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
