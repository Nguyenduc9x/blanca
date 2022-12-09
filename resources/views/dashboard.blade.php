
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="FrontEnd/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="FrontEnd/Admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="FrontEnd/Admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="FrontEnd/Admin/images/favicon.png">
  <style type="text/css">/* Chart.js */
  @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>
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
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                      </div>
                    </div> 
                  </div>
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
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



  </body>
</html>