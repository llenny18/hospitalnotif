<!DOCTYPE html>
<?php include("../controller/display.php"); ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Taal RHU System- Children List</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php"); ?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Children List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
            
              <li class="breadcrumb-item" aria-current="page">Children List</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="manage_child.php" class="btn btn-primary m-2">+ Register New CHild</a>
                  </div>
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="manage_record_child.php" class="btn btn-primary m-2">+ Register New Child Immunization Record</a>
                  </div>
                <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
    <thead class="thead-light">
        <tr>
            <th>Children ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Place of Birth</th>
            <th>Address</th>
            <th>Mother Name</th>
            <th>Father Name</th>
            <th>Birth Height</th>
            <th>Birth Weight</th>
            <th>Sex</th>
            <th>Contact Number</th>
            <th>Action</th>
            </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Children ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Place of Birth</th>
            <th>Address</th>
            <th>Mother Name</th>
            <th>Father Name</th>
            <th>Birth Height</th>
            <th>Birth Weight</th>
            <th>Sex</th>
            <th>Contact Number</th>
            <th>Action</th>
            </tr>
    </tfoot>
    <tbody>
        <?php
            // Fetch data from MySQL and display it in the table
            displayTable($conn, 'child', 
                "SELECT * FROM child", 
                ['id', 'name', 'date_of_birth', 'place_of_birth', 'address', 'mother_name', 'father_name', 'birth_height', 'birth_weight', 'sex', 'contact_number']
            );
        ?>
    </tbody>
</table>

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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>