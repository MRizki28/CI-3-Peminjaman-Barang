
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/owl-carousel-2/owl.carousel.min.css') ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo base_url('assets/images/faces/rizki.jpg') ?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Muhammad Rizki</h5>
                  <span>Gold Member</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('admin/index')?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('barang_controller/ke_barang')?>"">
              <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Data Barang</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo site_url('peminjaman_controller/index')?>">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Data Peminjaman</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/rizki.jpg') ?>" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Muhammad Rizki</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="<?php echo site_url('login_controller/logout')?>">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Data Barang</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <a href =<?php echo site_url('barang_controller/ke_barang')?> class="mdi mdi-arrow-top-right icon-item"></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Data Peminjaman</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <a href="<?php echo site_url('peminjaman_controller/index')?>" class="mdi mdi-arrow-top-right icon-item"></a>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">1</h3>
                          <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Data Admin</h6>
                  </div>
                </div>
              </div>
            <div class="row ">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-us"></i>
                                </td>
                                <td>USA</td>
                                <td class="text-right"> 1500 </td>
                                <td class="text-right font-weight-medium"> 56.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-de"></i>
                                </td>
                                <td>Germany</td>
                                <td class="text-right"> 800 </td>
                                <td class="text-right font-weight-medium"> 33.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>Australia</td>
                                <td class="text-right"> 760 </td>
                                <td class="text-right font-weight-medium"> 15.45% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-gb"></i>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right"> 450 </td>
                                <td class="text-right font-weight-medium"> 25.00% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ro"></i>
                                </td>
                                <td>Romania</td>
                                <td class="text-right"> 620 </td>
                                <td class="text-right font-weight-medium"> 10.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-br"></i>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right"> 230 </td>
                                <td class="text-right font-weight-medium"> 75.00% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
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
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Muhammad Rizki 2023</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://github.com/MRizki28" target="_blank">github/MRizki28</a>  </span>
          </div>
        </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/owl-carousel-2/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>