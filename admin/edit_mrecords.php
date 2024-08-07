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
    <?php include("./nav.php");
    
    $record_id = isset($_GET['record_id']) ? $_GET['record_id'] : '';

    // If editing an existing record, fetch its data
    if ($record_id) {
        $stmt = $conn->prepare("SELECT * FROM medical_records WHERE record_id = ?");
        $stmt->bind_param("i", $record_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            extract($row);
        }
        $stmt->close();
    }
    
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patient_id = $_POST['patient_id'];
        $checkup_date = $_POST['checkup_date'];
        $diagnosis = $_POST['diagnosis'];
        $treatment = $_POST['treatment'];
        $bp = $_POST['bp'];
        $temperature = $_POST['temperature'];
        $rr = $_POST['rr'];
        $hr = $_POST['hr'];
        $pr = $_POST['pr'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $doctor_notes = $_POST['doctor_notes'];
        $nurse_notes = $_POST['nurse_notes'];
    
        if ($record_id) {
            // Update the record
            $stmt = $conn->prepare("UPDATE medical_records SET patient_id=?, checkup_date=?, diagnosis=?, treatment=?, bp=?, temperature=?, rr=?, hr=?, pr=?, weight=?, height=?, doctor_notes=?, nurse_notes=? WHERE record_id=?");
            $stmt->bind_param("issssssdiidssi", $patient_id, $checkup_date, $diagnosis, $treatment, $bp, $temperature, $rr, $hr, $pr, $weight, $height, $doctor_notes, $nurse_notes, $record_id);
        } else {
            // Insert a new record
            $stmt = $conn->prepare("INSERT INTO medical_records (patient_id, checkup_date, diagnosis, treatment, bp, temperature, rr, hr, pr, weight, height, doctor_notes, nurse_notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $patient_id, $checkup_date, $diagnosis, $treatment, $bp, $temperature, $rr, $hr, $pr, $weight, $height, $doctor_notes, $nurse_notes);
        }
    
        if ($stmt->execute()) {
          echo "<script>alert('Record saved successfully!'); window.location.href='m_records.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }

    ?>
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
            <label for="patient_id">Patient ID</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id" value="<?php echo isset($patient_id) ? htmlspecialchars($patient_id) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="checkup_date">Checkup Date</label>
            <input type="date" class="form-control" id="checkup_date" name="checkup_date" value="<?php echo isset($checkup_date) ? htmlspecialchars($checkup_date) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <textarea class="form-control" id="diagnosis" name="diagnosis" rows="3" required><?php echo isset($diagnosis) ? htmlspecialchars($diagnosis) : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="treatment">Treatment</label>
            <textarea class="form-control" id="treatment" name="treatment" rows="3" required><?php echo isset($treatment) ? htmlspecialchars($treatment) : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="bp">Blood Pressure</label>
            <input type="text" class="form-control" id="bp" name="bp" value="<?php echo isset($bp) ? htmlspecialchars($bp) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="temperature">Temperature</label>
            <input type="number" step="0.01" class="form-control" id="temperature" name="temperature" value="<?php echo isset($temperature) ? htmlspecialchars($temperature) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="rr">Respiratory Rate</label>
            <input type="number" class="form-control" id="rr" name="rr" value="<?php echo isset($rr) ? htmlspecialchars($rr) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="hr">Heart Rate</label>
            <input type="number" class="form-control" id="hr" name="hr" value="<?php echo isset($hr) ? htmlspecialchars($hr) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="pr">Pulse Rate</label>
            <input type="number" class="form-control" id="pr" name="pr" value="<?php echo isset($pr) ? htmlspecialchars($pr) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="<?php echo isset($weight) ? htmlspecialchars($weight) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="height">Height</label>
            <input type="number" step="0.01" class="form-control" id="height" name="height" value="<?php echo isset($height) ? htmlspecialchars($height) : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="doctor_notes">Doctor Notes</label>
            <textarea class="form-control" id="doctor_notes" name="doctor_notes" rows="3"><?php echo isset($doctor_notes) ? htmlspecialchars($doctor_notes) : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="nurse_notes">Nurse Notes</label>
            <textarea class="form-control" id="nurse_notes" name="nurse_notes" rows="3"><?php echo isset($nurse_notes) ? htmlspecialchars($nurse_notes) : ''; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
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