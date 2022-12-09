<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Ẩm Thực</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/FrontEnd/adminuser.css">
    <link rel="stylesheet" href="/FrontEnd/admin.userlist.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="FrontEnd/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="FrontEnd/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="FrontEnd/Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="FrontEnd/Admin/images/favicon.png">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.navbaradmin')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('layouts.settings')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="userlist">                                
                                <div class="main-box clearfix">
                                    <div class="table-responsive">
                                        <table class="table user-list">
                                            <thead>
                                                <tr>
                                                    <th><span>User</span></th>
                                                    <th><span>Created</span></th>
                                                    <th><span>Email</span></th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                        <a href="#" class="user-link">Mila Kunis</a>
                                                        <span class="user-subhead">Admin</span>
                                                    </td>
                                                    <td>
                                                        2013/08/08
                                                    </td>
                                                    <td>
                                                        <a href="#">mila@kunis.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                                        <a href="#" class="user-link">George Clooney</a>
                                                        <span class="user-subhead">Member</span>
                                                    </td>
                                                    <td>
                                                        2013/08/12
                                                    </td>
                                                    <td>
                                                        <a href="#">marlon@brando.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                        <a href="#" class="user-link">Ryan Gossling</a>
                                                        <span class="user-subhead">Registered</span>
                                                    </td>
                                                    <td>
                                                        2013/03/03
                                                    </td>
                                                    <td>
                                                        <a href="#">jack@nicholson</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                        <a href="#" class="user-link">Emma Watson</a>
                                                        <span class="user-subhead">Registered</span>
                                                    </td>
                                                    <td>
                                                        2004/01/24
                                                    </td>
                                                    <td>
                                                        <a href="#">humphrey@bogart.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                        <a href="#" class="user-link">Robert Downey Jr.</a>
                                                        <span class="user-subhead">Admin</span>
                                                    </td>
                                                    <td>
                                                        2013/12/31
                                                    </td>
                                                    <td>
                                                        <a href="#">spencer@tracy</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                        <a href="#" class="user-link">Mila Kunis</a>
                                                        <span class="user-subhead">Admin</span>
                                                    </td>
                                                    <td>
                                                        2013/08/08
                                                    </td>
                                                    <td>
                                                        <a href="#">mila@kunis.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                                        <a href="#" class="user-link">George Clooney</a>
                                                        <span class="user-subhead">Member</span>
                                                    </td>
                                                    <td>
                                                        2013/08/12
                                                    </td>
                                                    <td>
                                                        <a href="#">marlon@brando.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                        <a href="#" class="user-link">Ryan Gossling</a>
                                                        <span class="user-subhead">Registered</span>
                                                    </td>
                                                    <td>
                                                        2013/03/03
                                                    </td>
                                                    <td>
                                                        <a href="#">jack@nicholson</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                        <a href="#" class="user-link">Emma Watson</a>
                                                        <span class="user-subhead">Registered</span>
                                                    </td>
                                                    <td>
                                                        2004/01/24
                                                    </td>
                                                    <td>
                                                        <a href="#">humphrey@bogart.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                        <a href="#" class="user-link">Robert Downey Jr.</a>
                                                        <span class="user-subhead">Admin</span>
                                                    </td>
                                                    <td>
                                                        2013/12/31
                                                    </td>
                                                    <td>
                                                        <a href="#">spencer@tracy</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        
                                                        <a href="#" class="table-link">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-grease-pencil"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
                                                            <span class="menu-icon">
                                                                
                                                                <i class="mdi mdi-delete-variant"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination-footer" style="align-item: center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination" style="padding: 10px">
                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                      </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    @include('layouts.footeradmin')
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="FrontEnd/Admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="FrontEnd/Admin/vendors/chart.js/Chart.min.js"></script>
    <script src="FrontEnd/Admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="FrontEnd/Admin/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="FrontEnd/Admin/js/off-canvas.js"></script>
    <script src="FrontEnd/Admin/js/hoverable-collapse.js"></script>
    <script src="FrontEnd/Admin/js/template.js"></script>
    <script src="FrontEnd/Admin/js/settings.js"></script>
    <script src="FrontEnd/Admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="FrontEnd/Admin/js/dashboard.js"></script>
    <script src="FrontEnd/Admin/js/Chart.roundedBarCharts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#datepicker').datepicker();
        });
    </script>
 
    <!-- End custom js for this page-->




</body>

</html>