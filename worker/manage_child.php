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
  <title>Taal RHU System - Manage Children Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php");

$child_id = isset($_GET['childid']) ? $_GET['childid'] : '';
$name = $date_of_birth = $place_of_birth = $address = $mother_name = $father_name = $birth_height = $birth_weight = $sex = $contact_number = '';

// If editing an existing record, fetch its data
if ($child_id) {
    $stmt = $conn->prepare("SELECT * FROM child WHERE id = ?");
    $stmt->bind_param("i", $child_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        extract($row);
    }
    $stmt->close();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $address = $_POST['address'];
    $mother_name = $_POST['mother_name'];
    $father_name = $_POST['father_name'];
    $birth_height = $_POST['birth_height'];
    $birth_weight = $_POST['birth_weight'];
    $sex = $_POST['sex'];
    $contact_number = $_POST['contact_number'];

    if ($child_id) {
        // Update the record
        $stmt = $conn->prepare("UPDATE child SET name=?, date_of_birth=?, place_of_birth=?, address=?, mother_name=?, father_name=?, birth_height=?, birth_weight=?, sex=?, contact_number=? WHERE id=?");
        $stmt->bind_param("ssssssddssi", $name, $date_of_birth, $place_of_birth, $address, $mother_name, $father_name, $birth_height, $birth_weight, $sex, $contact_number, $child_id);
    } else {
        // Insert a new record
        $stmt = $conn->prepare("INSERT INTO child (name, date_of_birth, place_of_birth, address, mother_name, father_name, birth_height, birth_weight, sex, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssddss", $name, $date_of_birth, $place_of_birth, $address, $mother_name, $father_name, $birth_height, $birth_weight, $sex, $contact_number);
    }

    if ($stmt->execute()) {
      echo "<script>alert('Record saved successfully!'); window.location.href='children.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Children Records</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item" aria-current="page">Manage Children Records</li>
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
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="date_of_birth">Date of Birth</label>
                      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo $date_of_birth; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="place_of_birth">Place of Birth</label>
                      <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="<?php echo $place_of_birth; ?>">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                      <label for="mother_name">Mother's Name</label>
                      <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $mother_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="father_name">Father's Name</label>
                      <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $father_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="birth_height">Birth Height (cm)</label>
                      <input type="number" class="form-control" id="birth_height" name="birth_height" value="<?php echo $birth_height; ?>" step="0.01">
                    </div>
                    <div class="form-group">
                      <label for="birth_weight">Birth Weight (kg)</label>
                      <input type="number" class="form-control" id="birth_weight" name="birth_weight" value="<?php echo $birth_weight; ?>" step="0.01">
                    </div>
                    <div class="form-group">
                      <label for="sex">Sex</label>
                      <select class="form-control" id="sex" name="sex" required>
                        <option value="Male" <?php echo ($sex == 'Male') ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo ($sex == 'Female') ? 'selected' : ''; ?>>Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="contact_number">Contact Number</label>
                      <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>">
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
