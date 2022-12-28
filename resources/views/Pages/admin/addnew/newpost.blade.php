
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
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="FrontEnd/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
    <link rel="stylesheet" href="FrontEnd/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="FrontEnd/Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="FrontEnd/Admin/images/favicon.png">
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
                            <div id="myprofile" class="col-md-12 col-md-offset-6">
                                <form action="{{route('new-post')}}" method="post" enctype="multipart/form-data">
                                    @if(Session::get('success'))
                                     <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::get('fail'))
                                     <div class="alert alert-fail">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    <div class="container">
                                      <div class="row align-items-start">
                                          <div class="mb-3">
                                              <label for="exampleFormControlInput1" class="form-label" >Title</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1"  name="name" style="width:50%">
                                              <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Categories</label>
                                              <select name="category_id" class="form-control" style="background-color:white;width:50%">
                                                @foreach ($category as $cateitem)
                                                <option value="{{ $cateitem->id }}" >{{$cateitem->name}}</option>
                                                @endforeach
                                              </select>
                                          </div>
                                          <div class="mb-3">
                                              <label for="exampleFormControlInput1" class="form-label">Tags</label>
                                              <input type="text" class="form-control" id="exampleFormControlInput1" name="content" style="width:50%">
                                              <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                          </div>
                                          
                                          <div class="mb-3">
                                              <label for="formFileSm" class="form-label">Post image thumbs</label>
                                              <input class="form-control form-control-sm" id="formFileSm" type="file" style="background-color: white;width:50%;" name="image" >
                                          </div>
                                          <div class="mb-3">
                                              <label for="exampleFormControlTextarea1" class="form-label" >Content</label>
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
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="FrontEnd/Admin/js/dashboard.js"></script>
    <script src="FrontEnd/Admin/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    </body>
  </html>