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
  <title>Taal RHU System- Manage Patient Details</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php");


$patient_id = isset($_GET['pid']) ? $_GET['pid'] : '';
$full_name = $sex = $age = $address = $phone_number = '';
$civil_status = $birthday = $philhealth_id = $bp = $temperature = '';
$rr = $hr = $pr = $weight = $height = $diagnosis = $treatment = '';
$last_checkup_date = $next_followup_date = '';

// If editing an existing record, fetch its data
if ($patient_id) {
    $stmt = $conn->prepare("SELECT * FROM patients WHERE patient_id = ?");
    $stmt->bind_param("i", $patient_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        extract($row);
    }
    $stmt->close();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $civil_status = $_POST['civil_status'];
    $birthday = $_POST['birthday'];
    $philhealth_id = $_POST['philhealth_id'];
    $bp = $_POST['bp'];
    $temperature = $_POST['temperature'];
    $rr = $_POST['rr'];
    $hr = $_POST['hr'];
    $pr = $_POST['pr'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $diagnosis = $_POST['diagnosis'];
    $treatment = $_POST['treatment'];
    $last_checkup_date = $_POST['last_checkup_date'];
    $next_followup_date = $_POST['next_followup_date'];

    if ($patient_id) {
        // Update the record
        $stmt = $conn->prepare("UPDATE patients SET  full_name=?, sex=?, age=?, address=?, phone_number=?, civil_status=?, birthday=?, philhealth_id=?, bp=?, temperature=?, rr=?, hr=?, pr=?, weight=?, height=?, diagnosis=?, treatment=?, last_checkup_date=?, next_followup_date=? WHERE patient_id=?");
$stmt->bind_param("ssssssssssssssssssss", $full_name, $sex, $age, $address, $phone_number, $civil_status, $birthday, $philhealth_id, $bp, $temperature, $rr, $hr, $pr, $weight, $height, $diagnosis, $treatment, $last_checkup_date, $next_followup_date, $patient_id);

        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Record saved successfully!'); window.location.href='patients.php';</script>";

    } else {
        // Insert a new record
        $stmt = $conn->prepare("INSERT INTO patients ( full_name, sex, age, address, phone_number, civil_status, birthday, philhealth_id, bp, temperature, rr, hr, pr, weight, height, diagnosis, treatment, last_checkup_date, next_followup_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssssssssssssssss",  $full_name, $sex, $age, $address, $phone_number, $civil_status, $birthday, $philhealth_id, $bp, $temperature, $rr, $hr, $pr, $weight, $height, $diagnosis, $treatment, $last_checkup_date, $next_followup_date);
        

        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Record saved successfully!'); window.location.href='patients.php';</script>";

    }
}

    ?>
    <!-- Topbar -->

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Patient Details</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>

          <li class="breadcrumb-item" aria-current="page">Manage Patient Details</li>
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
                  <label for="full_name">Full Name</label>
                  <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $full_name; ?>" required>
                </div>
                <div class="form-group">
                  <label for="sex">Sex</label>
                  <select class="form-control" id="sex" name="sex" required>
                    <option value="male" <?php echo ($sex == 'male') ? 'selected' : ''; ?>>Male</option>
                    <option value="female" <?php echo ($sex == 'female') ? 'selected' : ''; ?>>Female</option>
                    <option value="other" <?php echo ($sex == 'other') ? 'selected' : ''; ?>>Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" id="address" name="address" rows="3"><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="phone_number">Phone Number</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $phone_number; ?>">
                </div>
                <div class="form-group">
                  <label for="civil_status">Civil Status</label>
                  <select class="form-control" id="civil_status" name="civil_status">
                    <option value="single" <?php echo ($civil_status == 'single') ? 'selected' : ''; ?>>Single</option>
                    <option value="married" <?php echo ($civil_status == 'married') ? 'selected' : ''; ?>>Married</option>
                    <option value="divorced" <?php echo ($civil_status == 'divorced') ? 'selected' : ''; ?>>Divorced</option>
                    <option value="widowed" <?php echo ($civil_status == 'widowed') ? 'selected' : ''; ?>>Widowed</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="birthday">Birthday</label>
                  <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $birthday; ?>">
                </div>
                <div class="form-group">
                  <label for="philhealth_id">PhilHealth ID</label>
                  <input type="text" class="form-control" id="philhealth_id" name="philhealth_id" value="<?php echo $philhealth_id; ?>">
                </div>
                <div class="form-group">
                  <label for="bp">Blood Pressure (BP)</label>
                  <input type="text" class="form-control" id="bp" name="bp" value="<?php echo $bp; ?>">
                </div>
                <div class="form-group">
                  <label for="temperature">Temperature</label>
                  <input type="number" step="0.1" class="form-control" id="temperature" name="temperature" value="<?php echo $temperature; ?>">
                </div>
                <div class="form-group">
                  <label for="rr">Respiratory Rate (RR)</label>
                  <input type="number" class="form-control" id="rr" name="rr" value="<?php echo $rr; ?>">
                </div>
                <div class="form-group">
                  <label for="hr">Heart Rate (HR)</label>
                  <input type="number" class="form-control" id="hr" name="hr" value="<?php echo $hr; ?>">
                </div>
                <div class="form-group">
                  <label for="pr">Pulse Rate (PR)</label>
                  <input type="number" class="form-control" id="pr" name="pr" value="<?php echo $pr; ?>">
                </div>
                <div class="form-group">
                  <label for="weight">Weight</label>
                  <input type="number" step="0.1" class="form-control" id="weight" name="weight" value="<?php echo $weight; ?>">
                </div>
                <div class="form-group">
                  <label for="height">Height</label>
                  <input type="number" step="0.1" class="form-control" id="height" name="height" value="<?php echo $height; ?>">
                </div>
                <div class="form-group">
                  <label for="diagnosis">Diagnosis</label>
                  <textarea class="form-control" id="diagnosis" name="diagnosis" rows="3"><?php echo $diagnosis; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="treatment">Treatment</label>
                  <textarea class="form-control" id="treatment" name="treatment" rows="3"><?php echo $treatment; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="last_checkup_date">Last Checkup Date</label>
                  <input type="date" class="form-control" id="last_checkup_date" name="last_checkup_date" value="<?php echo $last_checkup_date; ?>">
                </div>
                <div class="form-group">
                  <label for="next_followup_date">Next Follow-up Date</label>
                  <input type="date" class="form-control" id="next_followup_date" name="next_followup_date" value="<?php echo $next_followup_date; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>

        </div>
      </div>
      <!--Row-->


      <!-- Modal Logout -->
      

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