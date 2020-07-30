<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Add Staff</title>
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
          <div class="topbar ">
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

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content dasboard-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        
 
                                        <h4 class="mt-0 header-title">My profile</h4>
                                        <p class="text-muted mb-4">Create a staff profile</p>
        
                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                                            <h3>Staff Information</h3>
                                            <fieldset>
                                            
                                                <label for="title">Choose Title: </label>
                                                        <select>
                                                            <option>Mr</option>
                                                            <option>Mrs</option>
                                                            <option>Prof</option>
                                                            <option>Dr</option>
                                                        </select>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Other Names</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">D.O.B</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="date" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtAddress1Billing" name="txtAddress1Billing" type="text" class="form-control" required="required">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">State of Origin</label>
                                                            <div class="col-lg-3">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Phone</label>
                                                       
                                                        <div class="col-lg-3">
                                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" required="required" maxlength="10">
                                                        </div>
                                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Gender</label>
                                                            <select>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                             </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Email</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="email" class="form-control" required="required">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div align="center">
                                                        <button class="alert alert-danger" action="#">Submit</button>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                                    
                                                    
                            </div>
        
                                               
                                        
                        </div>
                    </div>
            
                            
                </div>
            </div>                                
            <!-- ====================s========================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        
        <div class="right-sidebar d-none d-xl-block">
            <div class="slimscroll-menu">
                <div class="px-4 pt-4">
                    <div class="card user-wid text-center overflow-hidden">
                        <div class="p-4 bg-lighten-danger"></div>
                        <div class="mx-3">
                            <div class="bg-white user-wid-content p-1 rounded">
                                <div class="user-img">
                                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="" class="rounded-circle thumb-md img-fluid">
                                </div>
                                <h5 class="font-14 mb-1"><a href="javascript: void(0);">Esther Babs</a> </h5>
                                <p class="text-muted mb-2"><small>Admin Head</small></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="font-14">Calendar</h5>

                        <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
                    </div>

                    <div>
                        <h5 class="font-14">Clients</h5>

                        <div id="world-map-markers" class="dashboard-map-wid"></div>
                    </div>

                </div>
            </div>
        </div>

        

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- datepicker -->
        <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- vector map  -->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- apexcharts -->
        <script src="../plugins/apexcharts/apexcharts.min.js"></script>

        <!-- Peity JS -->
        <script src="../plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>