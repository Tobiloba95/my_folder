<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/john.css" rel="stylesheet" type="text/css">
    </head>

    <body class="left-side-menu-light">
     <!-- Begin page -->
     <div id="wrapper">
        <!-- Top Bar Start -->
      <div class="topbar">
          <!-- LOGO -->
          <div class="topbar-left">
              <a class="logo">
                  <span class="logo-light">
                      <img src="assets/images/logo-light.png" alt="" height="70">
                  </span>
                  <span class="logo-sm">
                      <img src="assets/images/logo-sm.png" alt height="22">
                  </span>
               </a>
       
           </div>
           <ul class="list-inline menu-left mb-5">
                  <li class="float-left">
                      <button class="button-menu-mobile open-left waves-effect">
                          <i class="mdi mdi-menu">
                     
                          </i>
                   </button>
          </li>
            </ul>
       </div>
       
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Administrator</li>
                            <li>
                                <a href="dashboard.php" class="waves-effect">
                                    <i class="ion ion-md-speedometer"></i><span> Dashboard </span>
                                </a>
                            </li>

                            
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-alt"></i><span>Staffs <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="astaff.php">Add new staff</a></li>
                                    <li><a href="vstaff.php">View all staff</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-file-archive"></i><span>Publications <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="publications.php"><i class="fas fa-file"></i> view all publications </a></li>
                                   
                                </ul>
                            </li>
                            



                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <div class="content-page">

                <div class="content dashboard-content  col-lg-7">
                    <div class="alert alert-success mb-lg-0" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="text-center">
                            <div class="mb-4">
                                <i class="mdi mdi-checkbox-marked-circle-outline display-4"></i>
                            </div>
                            <h4 class="alert-heading font-18">Successfully Logged In</h4>
                            <p>Logged In</p>
                            <div class="py-2">
                                <a href="#" class="btn btn-success btn-rounded w-lg">Go to Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
               
               <footer class="footer">
                © 2020 Anchor Hub
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

    </div>
     <!-- END wrapper -->

        
        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- Jquery-Ui -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../plugins/moment/moment.js"></script>
        <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/calendar-init.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>