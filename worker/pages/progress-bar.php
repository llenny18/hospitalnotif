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
  <title>Taal RHU System- Progress Bars</title>
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
            <h1 class="h3 mb-0 text-gray-800">Progress Bars</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Bootstrap UI</li>
              <li class="breadcrumb-item" aria-current="page">Progress Bars</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <div class="col-lg-12">
              <!-- Progress bars basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars Basic</h6>
                </div>
                <div class="card-body">
                  <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress bars with label -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars with Label</h6>
                </div>
                <div class="card-body">
                  <p>Add labels to your progress bars by placing text within the
                    <code>.progress-bar</code>.</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Height of Progress bars -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Height of Progress Bars</h6>
                </div>
                <div class="card-body">
                  <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you
                    change that value the inner <code>.progress-bar</code> will automatically resize
                    accordingly.</p>
                  <p><b>with</b> <code>height: 2px;</code></p>
                  <div class="progress mb-3" style="height: 2px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p><b>with</b> <code>height: 20px;</code></p>
                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress Bars with Background -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars with Background</h6>
                </div>
                <div class="card-body">
                  <p>Use background utility classes to change the appearance of individual progress
                    bars.</p>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress bars with multiple bars -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars with Multiple Bars</h6>
                </div>
                <div class="card-body">
                  <p>Include multiple progress bars in a progress component if you need.</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                      aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress bars with striped -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars with Striped</h6>
                </div>
                <div class="card-body">
                  <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply
                    a stripe via CSS gradient over the progress bar’s background color.</p>
                  <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                      aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                      aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress bars with multiple bars -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Bars with Multiple Bars</h6>
                </div>
                <div class="card-body">
                  <p>The striped gradient can also be animated. Add
                    <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the
                    stripes right to left via CSS3 animations.</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Row -->

          <!-- Documentations Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/progress/"
                  target="_blank">
                  bootstrap progress bars documentations.</a></p>
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

        </div>
        <!---Container Fluid-->

      </div>

      <!-- Footer -->
      < <?php include("./footer.php"); ?>

    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>