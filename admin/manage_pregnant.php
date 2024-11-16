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
  <title>Taal RHU System - Manage Pregnant Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php");

// Verify table field names in your SQL statements match the database
$pregnant_id = isset($_GET['pregnantid']) ? $_GET['pregnantid'] : '';
$mother_name = $mother_birthday = $mother_cell_phone = $mother_landline = $mother_blood_type = $mother_job = $father_name = $father_birthday = $father_cell_phone = $father_landline = $father_blood_type = $father_job = $child1_name = $child1_birthday = $child2_name = $child2_birthday = $child3_name = $child3_birthday = $address = $emergency_contact_name = $emergency_contact_relationship = $emergency_contact_birthday = $emergency_contact_cell_phone = $emergency_contact_landline = '';

if ($pregnant_id) {
    $stmt = $conn->prepare("SELECT * FROM pregnants WHERE id = ?");
    $stmt->bind_param("i", $pregnant_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        extract($row);
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form values
    $mother_name = $_POST['mother_name'];
    $mother_birthday = $_POST['mother_birthday'];
    $mother_cell_phone = $_POST['mother_cell_phone'];
    $mother_landline = $_POST['mother_landline'];
    $mother_blood_type = $_POST['mother_blood_type'];
    $mother_job = $_POST['mother_job'];
    $father_name = $_POST['father_name'];
    $father_birthday = $_POST['father_birthday'];
    $father_cell_phone = $_POST['father_cell_phone'];
    $father_landline = $_POST['father_landline'];
    $father_blood_type = $_POST['father_blood_type'];
    $father_job = $_POST['father_job'];
    $child1_name = $_POST['child1_name'];
    $child1_birthday = $_POST['child1_birthday'];
    $child2_name = $_POST['child2_name'];
    $child2_birthday = $_POST['child2_birthday'];
    $child3_name = $_POST['child3_name'];
    $child3_birthday = $_POST['child3_birthday'];
    $address = $_POST['address'];
    $emergency_contact_name = $_POST['emergency_contact_name'];
    $emergency_contact_relationship = $_POST['emergency_contact_relationship'];
    $emergency_contact_birthday = $_POST['emergency_contact_birthday'];
    $emergency_contact_cell_phone = $_POST['emergency_contact_cell_phone'];
    $emergency_contact_landline = $_POST['emergency_contact_landline'];

    if ($pregnant_id) {
        // Update record if pregnant_id is set
        $stmt = $conn->prepare("UPDATE pregnants SET mother_name=?, mother_birthday=?, mother_cell_phone=?, mother_landline=?, mother_blood_type=?, mother_job=?, father_name=?, father_birthday=?, father_cell_phone=?, father_landline=?, father_blood_type=?, father_job=?, child1_name=?, child1_birthday=?, child2_name=?, child2_birthday=?, child3_name=?, child3_birthday=?, address=?, emergency_contact_name=?, emergency_contact_relationship=?, emergency_contact_birthday=?, emergency_contact_cell_phone=?, emergency_contact_landline=? WHERE id=?");
        $stmt->bind_param("ssssssssssssssssssssssssi", $mother_name, $mother_birthday, $mother_cell_phone, $mother_landline, $mother_blood_type, $mother_job, $father_name, $father_birthday, $father_cell_phone, $father_landline, $father_blood_type, $father_job, $child1_name, $child1_birthday, $child2_name, $child2_birthday, $child3_name, $child3_birthday, $address, $emergency_contact_name, $emergency_contact_relationship, $emergency_contact_birthday, $emergency_contact_cell_phone, $emergency_contact_landline, $pregnant_id);
    
      } else {
        // Insert new record if no pregnant_id is provided
        $stmt = $conn->prepare("INSERT INTO pregnants (mother_name, mother_birthday, mother_cell_phone, mother_landline, mother_blood_type, mother_job, father_name, father_birthday, father_cell_phone, father_landline, father_blood_type, father_job, child1_name, child1_birthday, child2_name, child2_birthday, child3_name, child3_birthday, address, emergency_contact_name, emergency_contact_relationship, emergency_contact_birthday, emergency_contact_cell_phone, emergency_contact_landline) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssssssssssssss", $mother_name, $mother_birthday, $mother_cell_phone, $mother_landline, $mother_blood_type, $mother_job, $father_name, $father_birthday, $father_cell_phone, $father_landline, $father_blood_type, $father_job, $child1_name, $child1_birthday, $child2_name, $child2_birthday, $child3_name, $child3_birthday, $address, $emergency_contact_name, $emergency_contact_relationship, $emergency_contact_birthday, $emergency_contact_cell_phone, $emergency_contact_landline);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Record saved successfully!'); window.location.href='pregnants.php';</script>";
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
            <h1 class="h3 mb-0 text-gray-800">Manage Pregnant Records</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Manage Pregnant Records</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- General Element -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="form-group">
                      <label for="mother_name">Mother's Name</label>
                      <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $mother_name; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="mother_birthday">Mother's Birthday</label>
                      <input type="date" class="form-control" id="mother_birthday" name="mother_birthday" value="<?php echo $mother_birthday; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="mother_cell_phone">Mother's Cell Phone</label>
                      <input type="text" class="form-control" id="mother_cell_phone" name="mother_cell_phone" value="<?php echo $mother_cell_phone; ?>">
                    </div>
                    <div class="form-group">
                      <label for="mother_landline">Mother's Landline</label>
                      <input type="text" class="form-control" id="mother_landline" name="mother_landline" value="<?php echo $mother_landline; ?>">
                    </div>
                    <div class="form-group">
                      <label for="mother_blood_type">Mother's Blood Type</label>
                      <input type="text" class="form-control" id="mother_blood_type" name="mother_blood_type" value="<?php echo $mother_blood_type; ?>">
                    </div>
                    <div class="form-group">
                      <label for="mother_job">Mother's Job</label>
                      <input type="text" class="form-control" id="mother_job" name="mother_job" value="<?php echo $mother_job; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_name">Father's Name</label>
                      <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $father_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_birthday">Father's Birthday</label>
                      <input type="date" class="form-control" id="father_birthday" name="father_birthday" value="<?php echo $father_birthday; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_cell_phone">Father's Cell Phone</label>
                      <input type="text" class="form-control" id="father_cell_phone" name="father_cell_phone" value="<?php echo $father_cell_phone; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_landline">Father's Landline</label>
                      <input type="text" class="form-control" id="father_landline" name="father_landline" value="<?php echo $father_landline; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_blood_type">Father's Blood Type</label>
                      <input type="text" class="form-control" id="father_blood_type" name="father_blood_type" value="<?php echo $father_blood_type; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_job">Father's Job</label>
                      <input type="text" class="form-control" id="father_job" name="father_job" value="<?php echo $father_job; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child1_name">Child 1 Name</label>
                      <input type="text" class="form-control" id="child1_name" name="child1_name" value="<?php echo $child1_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child1_birthday">Child 1 Birthday</label>
                      <input type="date" class="form-control" id="child1_birthday" name="child1_birthday" value="<?php echo $child1_birthday; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child2_name">Child 2 Name</label>
                      <input type="text" class="form-control" id="child2_name" name="child2_name" value="<?php echo $child2_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child2_birthday">Child 2 Birthday</label>
                      <input type="date" class="form-control" id="child2_birthday" name="child2_birthday" value="<?php echo $child2_birthday; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child3_name">Child 3 Name</label>
                      <input type="text" class="form-control" id="child3_name" name="child3_name" value="<?php echo $child3_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="child3_birthday">Child 3 Birthday</label>
                      <input type="date" class="form-control" id="child3_birthday" name="child3_birthday" value="<?php echo $child3_birthday; ?>">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emergency_contact_name">Emergency Contact Name</label>
                      <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" value="<?php echo $emergency_contact_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emergency_contact_relationship">Emergency Contact Relationship</label>
                      <input type="text" class="form-control" id="emergency_contact_relationship" name="emergency_contact_relationship" value="<?php echo $emergency_contact_relationship; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emergency_contact_birthday">Emergency Contact Birthday</label>
                      <input type="date" class="form-control" id="emergency_contact_birthday" name="emergency_contact_birthday" value="<?php echo $emergency_contact_birthday; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emergency_contact_cell_phone">Emergency Contact Cell Phone</label>
                      <input type="text" class="form-control" id="emergency_contact_cell_phone" name="emergency_contact_cell_phone" value="<?php echo $emergency_contact_cell_phone; ?>">
                    </div>
                    <div class="form-group">
                      <label for="emergency_contact_landline">Emergency Contact Landline</label>
                      <input type="text" class="form-control" id="emergency_contact_landline" name="emergency_contact_landline" value="<?php echo $emergency_contact_landline; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
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
