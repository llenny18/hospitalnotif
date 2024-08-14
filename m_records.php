<!DOCTYPE html>
<?php include("./controller/display_patient.php"); ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="./admin/img/logo/logo.png" rel="icon">
  <title>Taal RHU System- Medical Record List</title>
  <link href="./admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="./admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="./admin/css/ruang-admin.min.css" rel="stylesheet">
  <link href="./admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   
    <!-- Topbar -->
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><div class="container mt-5">
        <button class="btn btn-primary" onclick="goBack()">Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script> <hr>Medical Record List</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>

          <li class="breadcrumb-item" aria-current="page">Medical Record List</li>
        </ol>
      </div>

      <!-- Row -->
      <div class="row">

        <!-- DataTable with Hover -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            </div>
            <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                  <tr>
                    <th>Record ID</th>
                    <th>Patient ID</th>
                    <th>Checkup Date</th>
                    <th>Diagnosis</th>
                    <th>Treatment</th>
                    <th>Blood Pressure (BP)</th>
                    <th>Temperature</th>
                    <th>Respiratory Rate (RR)</th>
                    <th>Heart Rate (HR)</th>
                    <th>Pulse Rate (PR)</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Doctor's Notes</th>
                    <th>Nurse's Notes</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Record ID</th>
                    <th>Patient ID</th>
                    <th>Checkup Date</th>
                    <th>Diagnosis</th>
                    <th>Treatment</th>
                    <th>Blood Pressure (BP)</th>
                    <th>Temperature</th>
                    <th>Respiratory Rate (RR)</th>
                    <th>Heart Rate (HR)</th>
                    <th>Pulse Rate (PR)</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Doctor's Notes</th>
                    <th>Nurse's Notes</th>
                    <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php 
                  if(isset($_GET['p_id'])){
                    displayTable(
                      $conn,
                      'medical_records',
                      "SELECT * FROM medical_records where patient_id = {$_GET['p_id']}",
                      ['record_id', 'patient_id', 'checkup_date', 'diagnosis', 'treatment', 'bp', 'temperature', 'rr', 'hr', 'pr', 'weight', 'height', 'doctor_notes', 'nurse_notes']
                    );
                  }
                  else{
                    echo "Error: No ID found";
                  }
                  
                  
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal Logout -->
      

    </div>
    <!---Container Fluid-->
  </div>

  <!-- Footer -->
  <!-- Footer -->
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="./admin/vendor/jquery/jquery.min.js"></script>
  <script src="./admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="./admin/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="./admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="./admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>