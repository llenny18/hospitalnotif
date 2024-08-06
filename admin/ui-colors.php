<!DOCTYPE html>
<?php include("../model/conn.php"); ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Taal RHU System- UI Colors</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php"); ?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">UI Colors</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">UI Colors</li>
            </ol>
          </div>

          <div class="row">
            <!-- General Colors-->
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">General Colors</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-primary text-white">
                        <div class="card-body">
                          Primary
                          <div class="text-white-50 small">#6777EF</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-success text-white">
                        <div class="card-body">
                          Success
                          <div class="text-white-50 small">#66bb6a</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-info text-white">
                        <div class="card-body">
                          Info
                          <div class="text-white-50 small">#3abaf4</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-warning text-white">
                        <div class="card-body">
                          Warning
                          <div class="text-white-50 small">#ffa426</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-danger text-white">
                        <div class="card-body">
                          Danger
                          <div class="text-white-50 small">#fc544b</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-secondary text-white">
                        <div class="card-body">
                          Secondary
                          <div class="text-white-50 small">#757575</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Background Gradient Utilities -->
            <div class="col-lg-6">
              <div class="card sm mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Background Gradient Utilities</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-primary text-white">
                        <div class="card-body">
                          Gradient Primary
                          <div class="text-white-50 small">.bg-gradient-primary</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-success text-white">
                        <div class="card-body">
                          Gradient Success
                          <div class="text-white-50 small">.bg-gradient-success</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-info text-white">
                        <div class="card-body">
                          Gradient Info
                          <div class="text-white-50 small">.bg-gradient-info</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-warning text-white">
                        <div class="card-body">
                          Gradient Warning
                          <div class="text-white-50 small">.bg-gradient-warning</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-danger text-white">
                        <div class="card-body">
                          Gradient Danger
                          <div class="text-white-50 small">.bg-gradient-danger</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                      <div class="card bg-gradient-secondary text-white">
                        <div class="card-body">
                          Gradient Secondary
                          <div class="text-white-50 small">.bg-gradient-secondary</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>