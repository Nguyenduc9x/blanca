
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
                          <div id="postlist">                                
                              <div class="main-box clearfix">
                                <div class="table-responsive">
                                  <table class="table post-list">
                                            <thead>
                                                <tr>
                                                    <th><span>id</span></th>
                                                    <th><span>Name</span></th>
                                                    <th><span>Description</span></th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Addnew </button>
                                                    @include('Modal.addcategory')
                                            </thead>
                                            <tbody> 
                                                @if(!empty($data) && $data->count())
                                                @foreach ($data as $item)                                                         
                                                <tr>
                                                    <td>
                                                        <a>{{$item->id}}</a>
                                                    </td>
                                                    <td>
                                                        <a>{{$item->name}}</a>
                                                    </td>
                                                    <td>
                                                        <a>{{$item->description}}</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <span class="menu-icon">
                                                            <a href="#edit{{$item->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> 
                                                        </span>
                                                        <span class="menu-icon">
                                                            <a href="#delete{{$item->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                                                            </button>
                                                        </span>
                                                        {{-- @include('Modal.editcategory') --}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4">There are no data.</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                      </table>
                                </div>
                                  <div class="row">{{ $data->links()}}
                                  </div>
                              </div>
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