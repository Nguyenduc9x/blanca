<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star 2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/FrontEnd/Admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/FrontEnd/adminuser.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/FrontEnd/Admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/FrontEnd/Admin/images/favicon.png" />
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
                <div id="change-password" class="col-md-6 col-md-offset-6">
                  <div class="panel-heading">Change Password</div>
                  <form action="{{route('user-changepassword')}}" method="post">
                    @if(Session::get('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::get('fail'))
                      <div class="alert alert-fail">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control" id="newpw" placeholder="Password" name="password" required style="width: 400px;">
                      <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Repeat New Password</label>
                      <input type="password" class="form-control" id="repeatnewpw" placeholder="Password" name="repeatpassword" required style="width: 400px;">
                      <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <input type="submit" id="btn-sub" class="btn btn-primary btn-block" value="Update">
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:/FrontEnd/Admin/partials/_footer.html -->
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
  <script src="/FrontEnd/Admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/FrontEnd/Admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/FrontEnd/Admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/FrontEnd/Admin/js/off-canvas.js"></script>
  <script src="/FrontEnd/Admin/js/hoverable-collapse.js"></script>
  <script src="/FrontEnd/Admin/js/template.js"></script>
  <script src="/FrontEnd/Admin/js/settings.js"></script>
  <script src="/FrontEnd/Admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/FrontEnd/Admin/js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>