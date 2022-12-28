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
                            <div id="myprofile" class="col-md-6 col-md-offset-6"  >
                                <form action="{{route('myprofile-upload')}}" method="post" enctype="multipart/form-data">
                                    @if(Session::get('success'))
                                     <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    {{-- @if(Session::get('fail'))
                                     <div class="alert alert-fail">{{Session::get('fail')}}</div>
                                    @endif --}}
                                    @csrf
                                    <div class="container">
                                        <div class="row align-items-start">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Full name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->name }}" name="name">
                                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->email }}" name="email">
                                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                            </div>
                                            <div class="mb-3" style="width: 300px;">
                                                <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="type" class="form-control" value="{{ Auth::user()->date_birth }}" name="date_birth">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white">
                                                            <i class="mdi mdi-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFileSm" class="form-label">Change Avatar</label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file" style="background-color: white;" name="image">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label" value="{{ Auth::user()->bio }}" >Bio</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" style="height:200px;" name="bio"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" id="btn-sub" class="btn btn-primary btn-block" value="Update">
                                    </div>
                                </form>
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