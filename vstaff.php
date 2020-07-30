<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Panel- Staff List</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />        

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
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Staff Lists</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Staffs</a></li>
                                <li class="breadcrumb-item active">View all staff</li>
                            </ol>
                        </div>
                       
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Staff ID</th>
                                            <th>Staff Names</th>
                                            <th>Position</th>
                                            <th>Date Joined</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                            <th>Action</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                          <td>025</td>
                                            <td>
                                                <h6 class="mt-0 mb-1">Jerry Oyewumi</h6>
                                                <p class="m-0 font-14"><i>DSA</i></p>
                                            </td>
                                            <td>DSA</td>
                                            <td>20/05/2017</td>
                                            <td>70</td>
                                            <td>
                                                60k
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>023</td>
                                              <td>
                                                  <h6 class="mt-0 mb-1">Prof Fatokun</h6>
                                                  <p class="m-0 font-14"><i>Deputy Vice Chancellor</i></p>
                                              </td>
                                              <td>DVC</td>
                                              <td>20/05/2017</td>
                                              <td>70</td>
                                              <td>
                                                  700k
                                              </td>
                                              <td>
                                                  <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                  <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                  <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                              </td>
                                          </tr>  
                                          
                                          <tr>
                                            <td>023</td>
                                              <td>
                                                  <h6 class="mt-0 mb-1">Salami M.O</h6>
                                                  <p class="m-0 font-14"><i>Registrar</i></p>
                                              </td>
                                              <td>Registrar</td>
                                              <td>20/05/2017</td>
                                              <td>56</td>
                                              <td>
                                                  170k
                                              </td>
                                              <td>
                                                  <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                  <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                  <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                              </td>
                                          </tr>
    
                                          <tr>
                                            <td>023</td>
                                              <td>
                                                  <h6 class="mt-0 mb-1">Sanusi</h6>
                                                  <p class="m-0 font-14"><i>Assistant Registrar</i></p>
                                              </td>
                                              <td>Assistant Registrar</td>
                                              <td>20/11/2017</td>
                                              <td>56</td>
                                              <td>
                                                  90k
                                              </td>
                                              <td>
                                                  <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                  <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                  <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td>023</td>
                                              <td>
                                                  <h6 class="mt-0 mb-1">Prof Afolayan</h6>
                                                  <p class="m-0 font-14"><i>Vice Chancellor</i></p>
                                              </td>
                                              <td>Vice Chancellor</td>
                                              <td>20/05/2016</td>
                                              <td>56</td>
                                              <td>
                                                  400k
                                              </td>
                                              <td>
                                                  <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                  <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                  <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                              </td>
                                          </tr>

                                          <tr>
                                            <td>023</td>
                                              <td>
                                                  <h6 class="mt-0 mb-1">Asegunoluwa Babalola</h6>
                                                  <p class="m-0 font-14"><i>Lecturer</i></p>
                                              </td>
                                              <td>Lecturer</td>
                                              <td>20/12/2017</td>
                                              <td>24</td>
                                              <td>
                                                  40k
                                              </td>
                                              <td>
                                                  <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                  <a href="javascript:void(0);" class="mr-3 text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                                  <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password"><i class="mdi mdi-key font-18"></i></a>
                                              </td>
                                          </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- content -->

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

<!-- Datatable js -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="../plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables/responsive.bootstrap4.min.js"></script> 

<!-- Ecommerce Init -->
<script src="assets/pages/ecommerce.js"></script> 

<!-- App js -->
<script src="assets/js/app.js"></script>


</body>
</html>