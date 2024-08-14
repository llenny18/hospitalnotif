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
  <title>Taal RHU System- Popovers</title>
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
            <h1 class="h3 mb-0 text-gray-800">Popovers</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Bootstrap UI</li>
              <li class="breadcrumb-item" aria-current="page">Popovers</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Popover Basic</h6>
                </div>
                <div class="card-body">
                  <p>This example basic popover</p>
                  <button type="button" class="btn btn-primary" data-toggle="popover" title="Popover title"
                    data-content="And here's some amazing content. It's very engaging. Right?">Click
                    to toggle popover</button>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Dismiss on next click</h6>
                </div>
                <div class="card-body">
                  <p>Use the focus trigger to dismiss popovers on the user’s next click of
                    <code>&lt;a&gt;</code> different element than the toggle element not
                    using<code>&lt;button&gt;.</code></p>
                  <a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-trigger="focus"
                    title="Dismissible popover"
                    data-content="And here's some amazing content. It's very engaging. Right?">Dismissiblepopover</a>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <!-- Four directions -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Four directions</h6>
                </div>
                <div class="card-body">
                  <p>Four options are available: top, right, bottom, and left aligned.</p>
                  <button type="button" class="btn btn-primary mb-1" data-container="body" data-toggle="popover"
                    data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on top
                  </button>
                  <button type="button" class="btn btn-primary mb-1" data-container="body" data-toggle="popover"
                    data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on right
                  </button>
                  <button type="button" class="btn btn-primary mb-1" data-container="body" data-toggle="popover"
                    data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on bottom
                  </button>
                  <button type="button" class="btn btn-primary mb-1" data-container="body" data-toggle="popover"
                    data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on left
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Row-->

          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/popovers/"
                  target="_blank">
                  bootstrap popovers documentations.</a></p>
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