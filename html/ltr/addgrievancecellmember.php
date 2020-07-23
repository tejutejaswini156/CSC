  

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <meta name="author" content="PIXINVENT">
    <title>Admin dashboard</title>
    
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
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
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
            <li class="nav-item"><a href="dashboard.php" class="navbar-brand nav-link"><img alt="branding logo" src="../../app-assets/images/logo/logo-size.png" data-expand="../../app-assets/images/logo/logo-size.png" data-collapse="../../app-assets/images/logo/logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              
              
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
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="dashboard.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">DASHBOARD</span></a>
            
          </li>
          <li class="active nav-item"><a href="grievancecellmembers.php"><i class="icon-android-people"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Grievance cell members</span></a>
             </li>
                <li class=""><a href="registeredusers.php"><i class="icon-android-person-add"></i><span data-i18n="nav.changelog.main" class="menu-title">Registered Users</span></a>
               </li>
               
               <li class=" nav-item"><a href="#"><i class="icon-ios-briefcase-outline"></i><span data-i18n="nav.cards.main" class="menu-title">complaints</span></a>
            <ul class="menu-content">
            <li><a href="" data-i18n="nav.cards.card_bootstrap" class="menu-item">Assign complaints</a>
              </li>
              <li><a href="view_complaint.php" data-i18n="nav.cards.card_bootstrap" class=" menu-item">view complaints</a>
              </li>
              <li><a href="closecomplaints.php" data-i18n="nav.cards.card_bootstrap" class=" menu-item">closed complaints</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="reports.php"><i class="icon-clipboard"></i><span data-i18n="nav.advance_cards.main" class="menu-title">reports</span></a>
            
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-plus "></i><span data-i18n="nav.advance_cards.main" class="menu-title">ADD institution details</span></a>
            
          </li>
            
          </li>
         
          
				
          
          
          
          
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
        <div class="content-body"><!-- stats -->
         <!-- here form for adding the cell member-->
         <div class="row">
        <div class="col-md-12">
            <div class="card  card-inverse ">
               <div class="card-header bg-light-green">
             <h4 ><center> ADDING GRIEVANCE CELL MEMBER </center> </h4>
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
            <div class="card-block">
          <form class="form-horizontal form-simple" action="authenticate.php" method="POST"  name="register_form" onsubmit="return checkForm(this);">
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="text" class="form-control form-control-lg input-lg" id="username" placeholder="Grievance cellmember Name" name="uname" required>
                            <div class="form-control-position">
                                <i class="icon-head info"></i>
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" id="upassword" placeholder="Enter Password" name="upwd" required pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[.!@#\$%\^&\*]).{8,}" title="please enter correct format Eg:Test.123">
                            <div class="form-control-position">
                                <i class="icon-key3 warning"></i>
                            </div>
                            
                        </fieldset>
                   <!--     <fieldset class="form-group position-relative has-icon-left mb-1" >
                            

                            <select  name="type" class="form-control form-control-lg select-lg" required>
                                 <option value="" selected disabled hidden>Select The Type of Work Platform</option>
                                 <option value="student">hardware repairer</option>
                                 <option value="parent">software maintainer</option>
                                 <option value="staff">academic incharge</option>
                                <option value="non-teahcingstaff">head of the department cse</option>
                                <option value="grievancecellmember">head of the department ece</option>
                                <option value="admin">head of the department Mech</option>
                                <option value="admin">head of the department Civil</option>
                               <option value="admin">Principal</option>
                                <option value="admin">year incharge</option>
                                 <option value="admin">Placement officier</option>
                              </select>
                            <div class="form-control-position">
                                <i class="icon-pencil2 purple"></i>
                            </div>
                         
                             
                        </fieldset> -->
                     <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="text" class="form-control form-control-lg input-lg" id="workplatform" placeholder="Enter The Working Platform" name="wplatform" required
                            >
                            <div class="form-control-position">
                                <i class="icon-pencil2 purple"></i>
                            </div>
                        </fieldset>   
                        
                         <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="tel" name="number" class="form-control form-control-lg input-lg" id="userphoneno" placeholder="Phone Number" required pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number">
                            <div class="form-control-position">
                                <i class="icon-phone3 pink"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="email" name="email" class="form-control form-control-lg input-lg" id="useremail" placeholder="Enter Email Address" required>
                            <div class="form-control-position">
                                <i class="icon-mail6 teal"></i>
                            </div>
                        </fieldset>
                 <!--     <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input type="file" name="image" class="form-control form-control-lg input-lg"   required>
                            <div class="form-control-position">
                                <i class="icon-android-image orange"></i>
                            </div>
                        </fieldset> -->
                        
                        
                        <button type="submit" name="addmember" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Register</button>
                    </form>


                </div>

        </div>
      </div>
    </div>
  </div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      
    </footer>

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
    <script src="../../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
