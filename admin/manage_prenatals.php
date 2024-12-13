<?php include("../model/conn.php"); ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Taal RHU System - Manage Prenatal Checkup Records</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include("./nav.php");

    $checkup_id = isset($_GET['checkupid']) ? $_GET['checkupid'] : '';
    // Default values
    $patient_id = $checkup_date = $age = $weight = $height = $bmi_status = $last_menstrual_period = $expected_delivery_date = $first_checkup_date = $first_checkup_weight = $first_checkup_height = $first_checkup_age_of_gestation = $first_checkup_blood_pressure = $first_checkup_nutritional_status = $first_checkup_birth_plan = $first_checkup_dental_check = $second_checkup_date = $second_checkup_weight = $second_checkup_height = $second_checkup_age_of_gestation = $second_checkup_blood_pressure = $second_checkup_nutritional_status = $second_checkup_birth_plan = $second_checkup_dental_check = $third_checkup_date = $third_checkup_weight = $third_checkup_height = $third_checkup_age_of_gestation = $third_checkup_blood_pressure = $third_checkup_nutritional_status = $third_checkup_birth_plan = $third_checkup_dental_check = '';

    // If editing an existing record, fetch its data
    if ($checkup_id) {
        $stmt = $conn->prepare("SELECT * FROM prenatal_checkup WHERE id = ?");
        $stmt->bind_param("i", $checkup_id);
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
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi_status = $_POST['bmi_status'];
        $last_menstrual_period = $_POST['last_menstrual_period'];
        $expected_delivery_date = $_POST['expected_delivery_date'];
        $first_checkup_date = $_POST['first_checkup_date'];
        $first_checkup_weight = $_POST['first_checkup_weight'];
        $first_checkup_height = $_POST['first_checkup_height'];
        $first_checkup_age_of_gestation = $_POST['first_checkup_age_of_gestation'];
        $first_checkup_blood_pressure = $_POST['first_checkup_blood_pressure'];
        $first_checkup_nutritional_status = $_POST['first_checkup_nutritional_status'];
        $first_checkup_birth_plan = $_POST['first_checkup_birth_plan'];
        $first_checkup_dental_check = $_POST['first_checkup_dental_check'];
        $second_checkup_date = $_POST['second_checkup_date'];
        $second_checkup_weight = $_POST['second_checkup_weight'];
        $second_checkup_height = $_POST['second_checkup_height'];
        $second_checkup_age_of_gestation = $_POST['second_checkup_age_of_gestation'];
        $second_checkup_blood_pressure = $_POST['second_checkup_blood_pressure'];
        $second_checkup_nutritional_status = $_POST['second_checkup_nutritional_status'];
        $second_checkup_birth_plan = $_POST['second_checkup_birth_plan'];
        $second_checkup_dental_check = $_POST['second_checkup_dental_check'];
        $third_checkup_date = $_POST['third_checkup_date'];
        $third_checkup_weight = $_POST['third_checkup_weight'];
        $third_checkup_height = $_POST['third_checkup_height'];
        $third_checkup_age_of_gestation = $_POST['third_checkup_age_of_gestation'];
        $third_checkup_blood_pressure = $_POST['third_checkup_blood_pressure'];
        $third_checkup_nutritional_status = $_POST['third_checkup_nutritional_status'];
        $third_checkup_birth_plan = $_POST['third_checkup_birth_plan'];
        $third_checkup_dental_check = $_POST['third_checkup_dental_check'];

        if ($checkup_id) {
            // Update existing record
           $stmt = $conn->prepare("UPDATE prenatal_checkup 
    SET 
        patient_id = ?, checkup_date = ?, age = ?, weight = ?, height = ?, bmi_status = ?, 
        last_menstrual_period = ?, expected_delivery_date = ?, first_checkup_date = ?, 
        first_checkup_weight = ?, first_checkup_height = ?, first_checkup_age_of_gestation = ?, 
        first_checkup_blood_pressure = ?, first_checkup_nutritional_status = ?, 
        first_checkup_birth_plan = ?, first_checkup_dental_check = ?, 
        second_checkup_date = ?, second_checkup_weight = ?, second_checkup_height = ?, 
        second_checkup_age_of_gestation = ?, second_checkup_blood_pressure = ?, 
        second_checkup_nutritional_status = ?, second_checkup_birth_plan = ?, 
        second_checkup_dental_check = ?, third_checkup_date = ?, third_checkup_weight = ?, 
        third_checkup_height = ?, third_checkup_age_of_gestation = ?, 
        third_checkup_blood_pressure = ?, third_checkup_nutritional_status = ?, 
        third_checkup_birth_plan = ?, third_checkup_dental_check = ? 
    WHERE id = ?");
$stmt->bind_param(
    "sssssssssssssssssssssssssssssssss",
    $patient_id, $checkup_date, $age, $weight, $height, $bmi_status,
    $last_menstrual_period, $expected_delivery_date, $first_checkup_date,
    $first_checkup_weight, $first_checkup_height, $first_checkup_age_of_gestation,
    $first_checkup_blood_pressure, $first_checkup_nutritional_status,
    $first_checkup_birth_plan, $first_checkup_dental_check, $second_checkup_date,
    $second_checkup_weight, $second_checkup_height, $second_checkup_age_of_gestation,
    $second_checkup_blood_pressure, $second_checkup_nutritional_status,
    $second_checkup_birth_plan, $second_checkup_dental_check, $third_checkup_date,
    $third_checkup_weight, $third_checkup_height, $third_checkup_age_of_gestation,
    $third_checkup_blood_pressure, $third_checkup_nutritional_status,
    $third_checkup_birth_plan, $third_checkup_dental_check, $checkup_id
);

        } else {
            // Insert new record
            $stmt = $conn->prepare("INSERT INTO prenatal_checkup (patient_id, checkup_date, age, weight, height, bmi_status, last_menstrual_period, expected_delivery_date, first_checkup_date, first_checkup_weight, first_checkup_height, first_checkup_age_of_gestation, first_checkup_blood_pressure, first_checkup_nutritional_status, first_checkup_birth_plan, first_checkup_dental_check, second_checkup_date, second_checkup_weight, second_checkup_height, second_checkup_age_of_gestation, second_checkup_blood_pressure, second_checkup_nutritional_status, second_checkup_birth_plan, second_checkup_dental_check, third_checkup_date, third_checkup_weight, third_checkup_height, third_checkup_age_of_gestation, third_checkup_blood_pressure, third_checkup_nutritional_status, third_checkup_birth_plan, third_checkup_dental_check) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("issssssssssssssssssssssssssssss", $patient_id, $checkup_date, $age, $weight, $height, $bmi_status, $last_menstrual_period, $expected_delivery_date, $first_checkup_date, $first_checkup_weight, $first_checkup_height, $first_checkup_age_of_gestation, $first_checkup_blood_pressure, $first_checkup_nutritional_status, $first_checkup_birth_plan, $first_checkup_dental_check, $second_checkup_date, $second_checkup_weight, $second_checkup_height, $second_checkup_age_of_gestation, $second_checkup_blood_pressure, $second_checkup_nutritional_status, $second_checkup_birth_plan, $second_checkup_dental_check, $third_checkup_date, $third_checkup_weight, $third_checkup_height, $third_checkup_age_of_gestation, $third_checkup_blood_pressure, $third_checkup_nutritional_status, $third_checkup_birth_plan, $third_checkup_dental_check);
        }
        
        if ($stmt->execute()) {
            echo "<script>alert('Record saved successfully'); window.location='prenatals.php?pid=$patient_id';</script>";
        } else {
            echo "<script>alert('Error saving record');</script>";
        }
    }
    ?>

<div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Prenatal Checkup Records</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Manage Prenatal Checkup Records</li>
        </ol>
      </div>
<div class="row">
        <div class="col-lg-12">
          <!-- General Element -->
          <div class="card mb-4">
    <!-- Form for entering/editing prenatal checkup records -->
    <div class="card-body">
    <form method="POST" action="">
        <!-- Patient Basic Information -->
        <div class="form-group">
            <label for="patient_id">Patient ID:</label>

            <select class="form-control" id="patient_id" name="patient_id" required>
            <option value="">Select Pregnant Woman</option>
            <?php
            $query1 = "SELECT * FROM `pregnants`";
            $result1 = $conn->query($query1);
            // Check if there are patients to display in the dropdown
            if ($result1->num_rows > 0) {
                // Loop through the result and display options
                while ($row = $result1->fetch_assoc()) {
                    $patient_id1 = $row['id'];
                    $full_name = $row['mother_name'];
                    if($patient_id1 ==  $patient_id ){
                    echo "<option selected value='$patient_id1'>$full_name</option>";

                    }
                    else{
                      echo "<option value='$patient_id1'>$full_name</option>";

                    }
                }
            } else {
                echo "<option value=''>No patients found</option>";
            }
            ?>
        </select>
        </div>

        <div class="form-group">
            <label for="checkup_date">Checkup Date:</label>
            <input type="date" class="form-control" id="checkup_date" name="checkup_date" value="<?php echo $checkup_date; ?>" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
        </div>

        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" class="form-control" id="weight" name="weight" value="<?php echo $weight; ?>" required>
        </div>

        <div class="form-group">
            <label for="height">Height:</label>
            <input type="number" class="form-control" id="height" name="height" value="<?php echo $height; ?>" required>
        </div>

        <div class="form-group">
            <label for="bmi_status">BMI Status:</label>
            <input type="text" class="form-control" id="bmi_status" name="bmi_status" value="<?php echo $bmi_status; ?>" required>
        </div>

        <div class="form-group">
            <label for="last_menstrual_period">Last Menstrual Period:</label>
            <input type="date" class="form-control" id="last_menstrual_period" name="last_menstrual_period" value="<?php echo $last_menstrual_period; ?>" required>
        </div>

        <div class="form-group">
            <label for="expected_delivery_date">Expected Delivery Date:</label>
            <input type="date" class="form-control" id="expected_delivery_date" name="expected_delivery_date" value="<?php echo $expected_delivery_date; ?>" required>
        </div>

        <br>
        <hr>
        <!-- First Checkup Details -->
        <h5 class="font-weight-bold">First Checkup</h5>
        <div class="form-group">
            <label for="first_checkup_date">Date:</label>
            <input type="date" class="form-control" id="first_checkup_date" name="first_checkup_date" value="<?php echo $first_checkup_date; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_weight">Weight:</label>
            <input type="number" class="form-control" id="first_checkup_weight" name="first_checkup_weight" value="<?php echo $first_checkup_weight; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_height">Height:</label>
            <input type="number" class="form-control" id="first_checkup_height" name="first_checkup_height" value="<?php echo $first_checkup_height; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_age_of_gestation">Age of Gestation:</label>
            <input type="number" class="form-control" id="first_checkup_age_of_gestation" name="first_checkup_age_of_gestation" value="<?php echo $first_checkup_age_of_gestation; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_blood_pressure">Blood Pressure:</label>
            <input type="text" class="form-control" id="first_checkup_blood_pressure" name="first_checkup_blood_pressure" value="<?php echo $first_checkup_blood_pressure; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_nutritional_status">Nutritional Status:</label>
            <input type="text" class="form-control" id="first_checkup_nutritional_status" name="first_checkup_nutritional_status" value="<?php echo $first_checkup_nutritional_status; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_birth_plan">Birth Plan:</label>
            <input type="text" class="form-control" id="first_checkup_birth_plan" name="first_checkup_birth_plan" value="<?php echo $first_checkup_birth_plan; ?>" required>
        </div>
        <div class="form-group">
            <label for="first_checkup_dental_check">Dental Check:</label>
            <input type="text" class="form-control" id="first_checkup_dental_check" name="first_checkup_dental_check" value="<?php echo $first_checkup_dental_check; ?>" required>
        </div>

        <!-- Second Checkup Details -->
        <br>
        <hr>
        <h5 class="font-weight-bold">Second Checkup</h5>
        <div class="form-group">
            <label for="second_checkup_date">Date:</label>
            <input type="date" class="form-control" id="second_checkup_date" name="second_checkup_date" value="<?php echo $second_checkup_date; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_weight">Weight:</label>
            <input type="number" class="form-control" id="second_checkup_weight" name="second_checkup_weight" value="<?php echo $second_checkup_weight; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_height">Height:</label>
            <input type="number" class="form-control" id="second_checkup_height" name="second_checkup_height" value="<?php echo $second_checkup_height; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_age_of_gestation">Age of Gestation:</label>
            <input type="number" class="form-control" id="second_checkup_age_of_gestation" name="second_checkup_age_of_gestation" value="<?php echo $second_checkup_age_of_gestation; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_blood_pressure">Blood Pressure:</label>
            <input type="text" class="form-control" id="second_checkup_blood_pressure" name="second_checkup_blood_pressure" value="<?php echo $second_checkup_blood_pressure; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_nutritional_status">Nutritional Status:</label>
            <input type="text" class="form-control" id="second_checkup_nutritional_status" name="second_checkup_nutritional_status" value="<?php echo $second_checkup_nutritional_status; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_birth_plan">Birth Plan:</label>
            <input type="text" class="form-control" id="second_checkup_birth_plan" name="second_checkup_birth_plan" value="<?php echo $second_checkup_birth_plan; ?>" required>
        </div>
        <div class="form-group">
            <label for="second_checkup_dental_check">Dental Check:</label>
            <input type="text" class="form-control" id="second_checkup_dental_check" name="second_checkup_dental_check" value="<?php echo $second_checkup_dental_check; ?>" required>
        </div>

        <!-- Third Checkup Details -->
        <br>
        <hr>
        <h5 class="font-weight-bold">Third Checkup</h5>
        <div class="form-group">
            <label for="third_checkup_date">Date:</label>
            <input type="date" class="form-control" id="third_checkup_date" name="third_checkup_date" value="<?php echo $third_checkup_date; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_weight">Weight:</label>
            <input type="number" class="form-control" id="third_checkup_weight" name="third_checkup_weight" value="<?php echo $third_checkup_weight; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_height">Height:</label>
            <input type="number" class="form-control" id="third_checkup_height" name="third_checkup_height" value="<?php echo $third_checkup_height; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_age_of_gestation">Age of Gestation:</label>
            <input type="number" class="form-control" id="third_checkup_age_of_gestation" name="third_checkup_age_of_gestation" value="<?php echo $third_checkup_age_of_gestation; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_blood_pressure">Blood Pressure:</label>
            <input type="text" class="form-control" id="third_checkup_blood_pressure" name="third_checkup_blood_pressure" value="<?php echo $third_checkup_blood_pressure; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_nutritional_status">Nutritional Status:</label>
            <input type="text" class="form-control" id="third_checkup_nutritional_status" name="third_checkup_nutritional_status" value="<?php echo $third_checkup_nutritional_status; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_birth_plan">Birth Plan:</label>
            <input type="text" class="form-control" id="third_checkup_birth_plan" name="third_checkup_birth_plan" value="<?php echo $third_checkup_birth_plan; ?>" required>
        </div>
        <div class="form-group">
            <label for="third_checkup_dental_check">Dental Check:</label>
            <input type="text" class="form-control" id="third_checkup_dental_check" name="third_checkup_dental_check" value="<?php echo $third_checkup_dental_check; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>


  </div>

  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>
</html>