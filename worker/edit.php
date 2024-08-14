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
  <title>Taal RHU System- Manage </title>
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
            <h1 class="h3 mb-0 text-gray-800">Manage </h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
             
              <li class="breadcrumb-item" aria-current="page">Manage </li>
            </ol>
          </div>

          <div class="row">
            

            <div class="col-lg-12">
              <!-- General Element -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">General Element</h6>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Example multiple select</label>
                      <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Example textarea</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlReadonly">Readonly</label>
                      <input class="form-control" type="text" placeholder="Readonly input here..."
                        id="exampleFormControlReadonly" readonly>
                    </div>
                    <div class="form-group">
                      <label for="validationServer01">Input with Success</label>
                      <input type="text" class="form-control is-valid" id="validationServer01"
                        placeholder="Input with Success" value="Mark" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="validationServer03">Input with Error</label>
                      <input type="text" class="form-control is-invalid" id="validationServer03"
                        placeholder="Input with Error" required>
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Checkbox</label>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Check this custom checkbox 1</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Check this custom checkbox 2</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                        <label class="custom-control-label" for="customCheckDisabled1">Check this custom
                          checkbox</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Radio Button</label>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input"
                          disabled>
                        <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom radio</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Switches</label>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                      </div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
          <!--Row-->


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