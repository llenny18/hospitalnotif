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
  <title>Taal RHU System- Manage SMS Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php"); 
    
    $sms_id = isset($_GET['sms_id']) ? $_GET['sms_id'] : '';

// If editing an existing record, fetch its data
if ($sms_id) {
    $stmt = $conn->prepare("SELECT * FROM sms_notifications WHERE sms_id = ?");
    $stmt->bind_param("i", $sms_id);
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
    $message = $_POST['message'];

    if ($sms_id) {
        // Update the record
        $stmt = $conn->prepare("UPDATE sms_notifications SET patient_id=?, message=? WHERE sms_id=?");
        $stmt->bind_param("ssi", $patient_id, $message, $sms_id);
    } else {
        // Insert a new record
        $stmt = $conn->prepare("INSERT INTO sms_notifications (patient_id, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $patient_id, $message);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Record saved successfully!'); window.location.href='sms_notifications.php';</script>";
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
            <h1 class="h3 mb-0 text-gray-800">Manage SMS Records</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
             
              <li class="breadcrumb-item" aria-current="page">Manage SMS Records</li>
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
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
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