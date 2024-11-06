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
  <title>Taal RHU System- Child Immunization Record List</title>
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
            <h1 class="h3 mb-0 text-gray-800">Child Immunization Record List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
            
              <li class="breadcrumb-item" aria-current="page">Child Immunization Record List</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="manage_record_pregnant.php" class="btn btn-primary m-2">+ Register New Pregnant Immunization Record</a>
                  </div>
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="pregnant_table.php?pid=<?= $_GET['id'] ?>" target="_blank" class="btn btn-primary m-2">Print</a>
                  </div>
                  
                <div class="table-responsive p-3">
                <?php

// Get the pregnant ID from the URL
$pregnant_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query to fetch the pregnant record and immunization details based on the pregnant ID
$sql = "SELECT * FROM pregnant_records_view WHERE pregnant_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $pregnant_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if data is found
if ($result->num_rows > 0) {
    // Display the data in a table
    echo '<table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid">
            <thead class="thead-light">
                <tr>
                    <th>Pregnant ID</th>
                    <th>Mother Name</th>
                    <th>Mother Birthday</th>
                    <th>Mother Cell Phone</th>
                    <th>Mother Blood Type</th>
                    <th>Father Name</th>
                    <th>Father Birthday</th>
                    <th>Father Cell Phone</th>
                    <th>Father Blood Type</th>
                    <th>Child1 Name</th>
                    <th>Child1 Birthday</th>
                    <th>Child2 Name</th>
                    <th>Child2 Birthday</th>
                    <th>Child3 Name</th>
                    <th>Child3 Birthday</th>
                    <th>Address</th>
                    <th>Emergency Contact Name</th>
                    <th>Emergency Contact Relationship</th>
                    <th>Emergency Contact Phone</th>
                    <th>Immunization Dose</th>
                    <th>Immunization Date Given</th>
                    <th>Immunization Return Date</th>
                </tr>
            </thead>
            <tbody>';
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['pregnant_id'] . "</td>
                <td>" . $row['mother_name'] . "</td>
                <td>" . $row['mother_birthday'] . "</td>
                <td>" . $row['mother_cell_phone'] . "</td>
                <td>" . $row['mother_blood_type'] . "</td>
                <td>" . $row['father_name'] . "</td>
                <td>" . $row['father_birthday'] . "</td>
                <td>" . $row['father_cell_phone'] . "</td>
                <td>" . $row['father_blood_type'] . "</td>
                <td>" . $row['child1_name'] . "</td>
                <td>" . $row['child1_birthday'] . "</td>
                <td>" . $row['child2_name'] . "</td>
                <td>" . $row['child2_birthday'] . "</td>
                <td>" . $row['child3_name'] . "</td>
                <td>" . $row['child3_birthday'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['emergency_contact_name'] . "</td>
                <td>" . $row['emergency_contact_relationship'] . "</td>
                <td>" . $row['emergency_contact_cell_phone'] . "</td>
                <td>" . $row['dose'] . "</td>
                <td>" . $row['date_given'] . "</td>
                <td>" . $row['return_date'] . "</td>
              </tr>";
    }

    echo '</tbody></table>';
} else {
    echo "No records found for this pregnant ID.";
}
?>


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