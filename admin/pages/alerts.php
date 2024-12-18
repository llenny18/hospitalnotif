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
  <title>Taal RHU System- Alerts</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php"); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alerts</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="./">Home</a>
              </li>
              <li class="breadcrumb-item">Bootstrap UI</li>
              <li class="breadcrumb-item" aria-current="page">Alerts</li>
            </ol>
          </div>
          <div class="row">
            <!-- Alerts Basic -->
            <div class="col-lg-6">
              <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Alerts Basic</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!</div>
                  <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                  </div>
                  <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                  </div>
                  <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                  </div>
                  <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                  </div>
                  <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                  </div>
                </div>
              </div>
            </div>
            <!-- Alerts with Dismissing -->
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Alerts with Dismissing</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple primary alert—check it out!
                  </div>
                  <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple secondary alert—check it out!
                  </div>
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple success alert—check it out!
                  </div>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple danger alert—check it out!
                  </div>
                  <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple warning alert—check it out!
                  </div>
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple info alert—check it out!
                  </div>
                  <div class="alert alert-light alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple light alert—check it out!
                  </div>
                  <div class="alert alert-dark alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    A simple dark alert—check it out!
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Alerts with Icon -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Alert with icon</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-check"></i><b> Success!</b></h6>
                    A simple success alert—check it out!
                  </div>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-ban"></i><b> Stop!</b></h6>
                    A simple danger alert—check it out!
                  </div>
                  <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-exclamation-triangle"></i><b> Warning!</b></h6>
                    A simple warning alert—check it out!
                  </div>
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h6><i class="fas fa-info"></i><b> Information</b></h6>
                    A simple info alert—check it out!
                  </div>
                </div>
              </div>
              <!-- Additional Content -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Additional Content</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert message. This example
                      text is going to run a bit longer so that you can see how spacing within an
                      alert works with this kind of content.
                    </p>
                    <hr>
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to keep things nice
                      and tidy.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Alert with link</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                    you like.
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                    you like.
                  </div>
                  <div class="alert alert-success" role="alert">
                    A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                    you like.
                  </div>
                  <div class="alert alert-danger" role="alert">
                    A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                    you like.
                  </div>
                  <div class="alert alert-warning" role="alert">
                    A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                    you like.
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                    like.
                  </div>
                  <div class="alert alert-light" role="alert">
                    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                    like.
                  </div>
                  <div class="alert alert-dark" role="alert">
                    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                    like.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Row -->
          <!-- More Documentations Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>
                For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/alerts/"
                  target="_blank"> bootstrap alert documentations.</a>
              </p>
            </div>
          </div>
          <!-- More Documentations Link -->

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
       <?php include("./footer.php"); ?>

    </div>
  </div>
  <!-- Scrollto to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
