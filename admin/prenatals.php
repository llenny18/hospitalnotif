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
  <title>Taal RHU System- Prenatal Checkups List</title>
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
            <h1 class="h3 mb-0 text-gray-800">Prenatal Checkups List</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
            
              <li class="breadcrumb-item" aria-current="page">Prenatal Checkups List</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="manage_pregnant.php" class="btn btn-primary m-2">+ Register New Prenatal Checkups</a>

                  </div>
                 
                <div class="table-responsive p-3">
                <a href="manage_prenatals.php?checkupid=<?= $_GET['pid']  ?>" class="btn btn-primary m-2">Edit This Record</a>
                <a href="pregnant_table_prenatal.php?pid=<?= $_GET['pid']  ?>" target="_blank" class="btn btn-primary m-2">Print</a>

                <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient ID</th>
                <th>Checkup Date</th>
                <th>Age</th>
                <th>Weight</th>
                <th>Height</th>
                <th>BMI Status</th>
                <th>Last Menstrual Period</th>
                <th>Expected Delivery Date</th>
                <th>First Checkup Date</th>
                <th>First Checkup Weight</th>
                <th>First Checkup Height</th>
                <th>First Checkup Age of Gestation</th>
                <th>First Checkup Blood Pressure</th>
                <th>First Checkup Nutritional Status</th>
                <th>First Checkup Birth Plan</th>
                <th>First Checkup Dental Check</th>
                <th>Second Checkup Date</th>
                <th>Second Checkup Weight</th>
                <th>Second Checkup Height</th>
                <th>Second Checkup Age of Gestation</th>
                <th>Second Checkup Blood Pressure</th>
                <th>Second Checkup Nutritional Status</th>
                <th>Second Checkup Birth Plan</th>
                <th>Second Checkup Dental Check</th>
                <th>Third Checkup Date</th>
                <th>Third Checkup Weight</th>
                <th>Third Checkup Height</th>
                <th>Third Checkup Age of Gestation</th>
                <th>Third Checkup Blood Pressure</th>
                <th>Third Checkup Nutritional Status</th>
                <th>Third Checkup Birth Plan</th>
                <th>Third Checkup Dental Check</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php
$sql = "SELECT * FROM prenatal_checkup where patient_id = {$_GET['pid']}";
$result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop through the data and display each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["patient_id"] . "</td>
                            <td>" . $row["checkup_date"] . "</td>
                            <td>" . $row["age"] . "</td>
                            <td>" . $row["weight"] . "</td>
                            <td>" . $row["height"] . "</td>
                            <td>" . $row["bmi_status"] . "</td>
                            <td>" . $row["last_menstrual_period"] . "</td>
                            <td>" . $row["expected_delivery_date"] . "</td>
                            <td>" . $row["first_checkup_date"] . "</td>
                            <td>" . $row["first_checkup_weight"] . "</td>
                            <td>" . $row["first_checkup_height"] . "</td>
                            <td>" . $row["first_checkup_age_of_gestation"] . "</td>
                            <td>" . $row["first_checkup_blood_pressure"] . "</td>
                            <td>" . $row["first_checkup_nutritional_status"] . "</td>
                            <td>" . $row["first_checkup_birth_plan"] . "</td>
                            <td>" . $row["first_checkup_dental_check"] . "</td>
                            <td>" . $row["second_checkup_date"] . "</td>
                            <td>" . $row["second_checkup_weight"] . "</td>
                            <td>" . $row["second_checkup_height"] . "</td>
                            <td>" . $row["second_checkup_age_of_gestation"] . "</td>
                            <td>" . $row["second_checkup_blood_pressure"] . "</td>
                            <td>" . $row["second_checkup_nutritional_status"] . "</td>
                            <td>" . $row["second_checkup_birth_plan"] . "</td>
                            <td>" . $row["second_checkup_dental_check"] . "</td>
                            <td>" . $row["third_checkup_date"] . "</td>
                            <td>" . $row["third_checkup_weight"] . "</td>
                            <td>" . $row["third_checkup_height"] . "</td>
                            <td>" . $row["third_checkup_age_of_gestation"] . "</td>
                            <td>" . $row["third_checkup_blood_pressure"] . "</td>
                            <td>" . $row["third_checkup_nutritional_status"] . "</td>
                            <td>" . $row["third_checkup_birth_plan"] . "</td>
                            <td>" . $row["third_checkup_dental_check"] . "</td>
                            <td>" . $row["created_at"] . "</td>
                            <td>" . $row["updated_at"] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='33'>No records found.</td></tr>";
            }
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