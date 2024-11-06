<!DOCTYPE html>
<?php include("../model/conn.php");
include("../controller/sms.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Taal RHU System- Manage SMS Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <div id="wrapper">
    <?php include("./nav.php"); ?>
    
    <!-- Handle form submission -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patient_ids = $_POST['patient_id']; // Array of selected patient IDs
        $message = $_POST['message'];
        
        foreach ($patient_ids as $patient_id) {
          $sql = "SELECT * FROM pregnants where id = $patient_id";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
              $row = $result->fetch_assoc();
              $messageNew = "
              Name: {$row['mother_name']} <br>
              Gender: Female <br>
              Birthdate: {$row['mother_birthday']} <br> <br>

              Message: $message

              ";
            // Insert a new record for each selected patient
            $stmt = $conn->prepare("INSERT INTO sms_notifications (patient_id, message, p_type) VALUES (?, ?, 'pregnant')");
            $stmt->bind_param("ss", $patient_id, $messageNew);

            if ($stmt->execute()) {
              
              ?><script>console.log('<?php echo sendSms($row['phone_number'], $messageNew); ?>') </script> <?php
              }


              //sms
          } else {
              echo "Error: " . $stmt->error;
          }
            $stmt->close();
        }
        
        echo "<script>alert('Records saved successfully!'); window.location.href='sms_sent_preg.php';</script>";
    }
    ?>

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage SMS Records for Pregnant Women</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Manage SMS Records for Pregnant Women</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                    <label for="patient_id">Pregnant Woman (Hold Control button to Select multiple) </label>
                    <select class="form-control" id="patient_id" name="patient_id[]" required multiple>
                      <option value="">Select Pregnant Woman</option>
                      <?php
                      $query1 = "SELECT * FROM `pregnants`";
                      $result1 = $conn->query($query1);
                      if ($result1->num_rows > 0) {
                          while ($row = $result1->fetch_assoc()) {
                              $patient_id1 = $row['id'];
                              $full_name = $row['mother_name'];
                              echo "<option value='$patient_id1'>$full_name</option>";
                          }
                      } else {
                          echo "<option value=''>No patients found</option>";
                      }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include("./footer.php"); ?>
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
