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
  <title>Taal RHU System- View Record</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Select2 -->
  <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->
  <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- Bootstrap Touchspin -->
  <link href="vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
  <!-- ClockPicker -->
  <link href="vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <!-- RuangAdmin CSS -->
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php"); ?>
    <!-- Topbar -->

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Record</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">View Record</li>
        </ol>
      </div>

      <?php


      if (isset($_GET['record_id'])) {
        $record_id = $_GET['record_id'];

        // SQL query to fetch the record by ID
        $sql = "SELECT * FROM medical_records WHERE record_id = $record_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

      ?>
          <div class="row">
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Medical Record Details</h6>
      </div>
      <div class="card-body">
        <div class="row">

          <div class="form-group col-lg-6">
            <label for="patient_id">Patient ID</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
              </div>
              <input type="text" class="form-control" id="patient_id" value="<?php echo $row['patient_id']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="checkup_date">Checkup Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
              </div>
              <input type="text" class="form-control" id="checkup_date" value="<?php echo $row['checkup_date']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="diagnosis">Diagnosis</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-stethoscope"></i></span>
              </div>
              <input type="text" class="form-control" id="diagnosis" value="<?php echo $row['diagnosis']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="treatment">Treatment</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-pills"></i></span>
              </div>
              <input type="text" class="form-control" id="treatment" value="<?php echo $row['treatment']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="bp">Blood Pressure</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-heartbeat"></i></span>
              </div>
              <input type="text" class="form-control" id="bp" value="<?php echo $row['bp']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="temperature">Temperature</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-thermometer-half"></i></span>
              </div>
              <input type="text" class="form-control" id="temperature" value="<?php echo $row['temperature']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="rr">Respiratory Rate (RR)</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lungs"></i></span>
              </div>
              <input type="text" class="form-control" id="rr" value="<?php echo $row['rr']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="hr">Heart Rate (HR)</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-heart"></i></span>
              </div>
              <input type="text" class="form-control" id="hr" value="<?php echo $row['hr']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="pr">Pulse Rate (PR)</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-hand-holding-heart"></i></span>
              </div>
              <input type="text" class="form-control" id="pr" value="<?php echo $row['pr']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="weight">Weight</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-weight"></i></span>
              </div>
              <input type="text" class="form-control" id="weight" value="<?php echo $row['weight']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="height">Height</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
              </div>
              <input type="text" class="form-control" id="height" value="<?php echo $row['height']; ?>" readonly>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="doctor_notes">Doctor's Notes</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-md"></i></span>
              </div>
              <textarea class="form-control" id="doctor_notes" rows="3" readonly><?php echo $row['doctor_notes']; ?></textarea>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label for="nurse_notes">Nurse's Notes</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-nurse"></i></span>
              </div>
              <textarea class="form-control" id="nurse_notes" rows="3" readonly><?php echo $row['nurse_notes']; ?></textarea>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


      <?php
        } else {
          echo "No record found.";
        }
      } else {
        echo "No record ID provided.";
      }
      ?>



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
  <!-- Select2 -->
  <script src="vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="vendor/clock-picker/clockpicker.js"></script>
  <!-- RuangAdmin Javascript -->
  <script src="js/ruang-admin.min.js"></script>
  <!-- Javascript for this page -->
  <script>
    $(document).ready(function() {


      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        todayBtn: 'linked',
      });

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,
        boostat: 5,
        maxboostedstep: 10,
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min: 0,
        max: 100,
        decimals: 2,
        step: 0.1,
        postfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e) {
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>

</body>

</html>