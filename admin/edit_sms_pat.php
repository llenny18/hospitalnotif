<?php include("../model/conn.php");
include("../controller/sms.php"); ?>
<!DOCTYPE html>
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

    <?php
    $sms_id = isset($_GET['sms_id']) ? $_GET['sms_id'] : '';

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patient_ids = $_POST['patient_id'];
        $message = $_POST['message'];

        foreach ($patient_ids as $patient_id) {
          $sql = "SELECT * FROM patients where patient_id = $patient_id";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
              $row = $result->fetch_assoc();
              $messageNew = "
              Name: {$row['full_name']} ,
              Gender: {$row['sex']},
              Age: {$row['age']} ,
              Address: {$row['address']} ,
              Followup Checkup: {$row['next_followup_date']} ,

              Message: $message

              ";
            $stmt = $conn->prepare("INSERT INTO sms_notifications (patient_id, message, p_type) VALUES (?, ?, 'patient')");
            $stmt->bind_param("ss", $patient_id, $messageNew);

            if ($stmt->execute()) {
              
               sendSms($row['phone_number'], $messageNew);
              }


                //sms
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }

        echo "<script>alert('SMS Successfully Sent!');</script>";
        echo "<script>window.location.href='sms_sent_pat.php';</script>";
    }
    ?>
    
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage SMS Records for Patient</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Manage SMS Records for Patient</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                    <label for="patient_id">Patient (Hold Control button to Select multiple) </label>
                    <select class="form-control" id="patient_id" name="patient_id[]" required multiple>
                      <option value="">Select Pregnant Woman</option>
                      <?php
                      $query1 = "SELECT * FROM `patients`";
                      $result1 = $conn->query($query1);

                      if ($result1->num_rows > 0) {
                          while ($row = $result1->fetch_assoc()) {
                              $patient_id1 = $row['patient_id'];
                              $full_name = $row['full_name'];
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
                    <textarea class="form-control" id="message" name="message" rows="3" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include("./footer.php"); ?>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>

  </div>
</body>
</html>
