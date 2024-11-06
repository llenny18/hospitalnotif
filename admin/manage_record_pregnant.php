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
  <title>Taal RHU System - Manage Immunization Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php");

    $record_id = isset($_GET['recordid']) ? $_GET['recordid'] : '';
    $family_id = $dose = $date_given = $return_date = '';

    // If editing an existing record, fetch its data
    if ($record_id) {
        $stmt = $conn->prepare("SELECT * FROM immunization_record_pregnant WHERE id = ?");
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
        $family_id = $_POST['family_id'];
        $dose = $_POST['dose'];
        $date_given = $_POST['date_given'];
        $return_date = $_POST['return_date'];

        if ($record_id) {
            // Update the record
            $stmt = $conn->prepare("UPDATE immunization_record_pregnant SET family_id=?, dose=?, date_given=?, return_date=? WHERE id=?");
            $stmt->bind_param("isssi", $family_id, $dose, $date_given, $return_date, $record_id);
        } else {
            // Insert a new record
            $stmt = $conn->prepare("INSERT INTO immunization_record_pregnant (family_id, dose, date_given, return_date) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $family_id, $dose, $date_given, $return_date);
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
        <h1 class="h3 mb-0 text-gray-800">Manage Immunization Records</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Manage Immunization Records</li>
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
                  <label for="family_id">Pregnant Woman</label>
                  <select class="form-control" id="family_id" name="family_id" required>
            <option value="">Select Pregnant Woman</option>
            <?php
            $query1 = "SELECT * FROM `pregnants`";
            $result1 = $conn->query($query1);
            // Check if there are patients to display in the dropdown
            if ($result1->num_rows > 0) {
                // Loop through the result and display options
                while ($row = $result1->fetch_assoc()) {
                    $patient_id = $row['id'];
                    $full_name = $row['mother_name'];
                    echo "<option value='$patient_id'>$full_name</option>";
                }
            } else {
                echo "<option value=''>No patients found</option>";
            }
            ?>
        </select>
                </div>
                <div class="form-group">
                  <label for="dose">Dose</label>
                  <select class="form-control" id="dose" name="dose" required>
                    <option value="1st dose - as early as possible during pregnancy" <?php echo ($dose == '1st dose - as early as possible during pregnancy') ? 'selected' : ''; ?>>1st dose - as early as possible during pregnancy</option>
                    <option value="2nd dose - at least 4 weeks after dose 1" <?php echo ($dose == '2nd dose - at least 4 weeks after dose 1') ? 'selected' : ''; ?>>2nd dose - at least 4 weeks after dose 1</option>
                    <option value="3rd dose - at least 6 months after dose 2" <?php echo ($dose == '3rd dose - at least 6 months after dose 2') ? 'selected' : ''; ?>>3rd dose - at least 6 months after dose 2</option>
                    <option value="4th dose - at least 1 year after dose 3" <?php echo ($dose == '4th dose - at least 1 year after dose 3') ? 'selected' : ''; ?>>4th dose - at least 1 year after dose 3</option>
                    <option value="5th dose - at least 1 year after dose 4" <?php echo ($dose == '5th dose - at least 1 year after dose 4') ? 'selected' : ''; ?>>5th dose - at least 1 year after dose 4</option>
                    <option value="Fully Immunized - received all 5 doses" <?php echo ($dose == 'Fully Immunized - received all 5 doses') ? 'selected' : ''; ?>>Fully Immunized - received all 5 doses</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="date_given">Date Given</label>
                  <input type="date" class="form-control" id="date_given" name="date_given" value="<?php echo $date_given; ?>" required>
                </div>
                <div class="form-group">
                  <label for="return_date">Return Date</label>
                  <input type="date" class="form-control" id="return_date" name="return_date" value="<?php echo $return_date; ?>">
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
