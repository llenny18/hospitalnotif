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
    $person_id = $vaccine = $date_given = $remarks = '';

    // If editing an existing record, fetch its data
    if ($record_id) {
        $stmt = $conn->prepare("SELECT * FROM immunization_record_child WHERE id = ?");
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
        $person_id = $_POST['person_id'];
        $vaccine = $_POST['vaccine'];
        $date_given = $_POST['date_given'];
        $remarks = $_POST['remarks'];

        if ($record_id) {
            // Update the record
            $stmt = $conn->prepare("UPDATE immunization_record_child SET person_id=?, vaccine=?, date_given=?, remarks=? WHERE id=?");
            $stmt->bind_param("isssi", $person_id, $vaccine, $date_given, $remarks, $record_id);
        } else {
            // Insert a new record
            $stmt = $conn->prepare("INSERT INTO immunization_record_child (person_id, vaccine, date_given, remarks) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $person_id, $vaccine, $date_given, $remarks);
        }

        if ($stmt->execute()) {
            echo "<script>alert('Record saved successfully!'); window.location.href='childs.php';</script>";
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
                  <label for="person_id">Person ID</label>
                  <select class="form-control" id="person_id" name="person_id" required>
                    <option value="">Select Person</option>
                    <?php
                    $query1 = "SELECT * FROM `child`";  // assuming you have a children table
                    $result1 = $conn->query($query1);
                    // Check if there are people to display in the dropdown
                    if ($result1->num_rows > 0) {
                        // Loop through the result and display options
                        while ($row = $result1->fetch_assoc()) {
                            $person_id = $row['id'];
                            $full_name = $row['name'];
                            echo "<option value='$person_id'>$full_name</option>";
                        }
                    } else {
                        echo "<option value=''>No people found</option>";
                    }
                    ?>
                </select>
                </div>
                <div class="form-group">
                  <label for="vaccine">Vaccine</label>
                  <select class="form-control" id="vaccine" name="vaccine" required>
  <option value="BCG Vaccine - At Birth" <?php echo ($vaccine == 'BCG Vaccine - At Birth') ? 'selected' : ''; ?>>BCG Vaccine - At Birth</option>
  <option value="Hepatitis B Vaccine - At Birth" <?php echo ($vaccine == 'Hepatitis B Vaccine - At Birth') ? 'selected' : ''; ?>>Hepatitis B Vaccine - At Birth</option>
  <option value="Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months" <?php echo ($vaccine == 'Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months') ? 'selected' : ''; ?>>Pentavalent Vaccine (DPT-Hep B-HIB) - 1 1/2 Months</option>
  <option value="Pentavalent Vaccine (DPT-Hep B-HIB) - 2 1/2 Months" <?php echo ($vaccine == 'Pentavalent Vaccine (DPT-Hep B-HIB) - 2 1/2 Months') ? 'selected' : ''; ?>>Pentavalent Vaccine (DPT-Hep B-HIB) - 2 1/2 Months</option>
  <option value="Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months" <?php echo ($vaccine == 'Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months') ? 'selected' : ''; ?>>Pentavalent Vaccine (DPT-Hep B-HIB) - 3 1/2 Months</option>
  <option value="Oral Polio Vaccine (OPV) - 1 1/2 Months" <?php echo ($vaccine == 'Oral Polio Vaccine (OPV) - 1 1/2 Months') ? 'selected' : ''; ?>>Oral Polio Vaccine (OPV) - 1 1/2 Months</option>
  <option value="Oral Polio Vaccine (OPV) - 2 1/2 Months" <?php echo ($vaccine == 'Oral Polio Vaccine (OPV) - 2 1/2 Months') ? 'selected' : ''; ?>>Oral Polio Vaccine (OPV) - 2 1/2 Months</option>
  <option value="Oral Polio Vaccine (OPV) - 3 1/2 Months" <?php echo ($vaccine == 'Oral Polio Vaccine (OPV) - 3 1/2 Months') ? 'selected' : ''; ?>>Oral Polio Vaccine (OPV) - 3 1/2 Months</option>
  <option value="Inactivated Polio Vaccine (IPV) - 3 1/2 Months" <?php echo ($vaccine == 'Inactivated Polio Vaccine (IPV) - 3 1/2 Months') ? 'selected' : ''; ?>>Inactivated Polio Vaccine (IPV) - 3 1/2 Months</option>
  <option value="Inactivated Polio Vaccine (IPV) - 9 Months" <?php echo ($vaccine == 'Inactivated Polio Vaccine (IPV) - 9 Months') ? 'selected' : ''; ?>>Inactivated Polio Vaccine (IPV) - 9 Months</option>
  <option value="Pneumococcal Conjugate Vaccine (PCV) - 1 1/2 Months" <?php echo ($vaccine == 'Pneumococcal Conjugate Vaccine (PCV) - 1 1/2 Months') ? 'selected' : ''; ?>>Pneumococcal Conjugate Vaccine (PCV) - 1 1/2 Months</option>
  <option value="Pneumococcal Conjugate Vaccine (PCV) - 2 1/2 Months" <?php echo ($vaccine == 'Pneumococcal Conjugate Vaccine (PCV) - 2 1/2 Months') ? 'selected' : ''; ?>>Pneumococcal Conjugate Vaccine (PCV) - 2 1/2 Months</option>
  <option value="Pneumococcal Conjugate Vaccine (PCV) - 3 1/2 Months" <?php echo ($vaccine == 'Pneumococcal Conjugate Vaccine (PCV) - 3 1/2 Months') ? 'selected' : ''; ?>>Pneumococcal Conjugate Vaccine (PCV) - 3 1/2 Months</option>
  <option value="Measles, Mumps, Rubella Vaccine (MMR) - 9 Months" <?php echo ($vaccine == 'Measles, Mumps, Rubella Vaccine (MMR) - 9 Months') ? 'selected' : ''; ?>>Measles, Mumps, Rubella Vaccine (MMR) - 9 Months</option>
  <option value="Measles, Mumps, Rubella Vaccine (MMR) - 1 Year" <?php echo ($vaccine == 'Measles, Mumps, Rubella Vaccine (MMR) - 1 Year') ? 'selected' : ''; ?>>Measles, Mumps, Rubella Vaccine (MMR) - 1 Year</option>
  <option value="Measles Containing Vaccine (MCV) MR/MMR - Grade 1" <?php echo ($vaccine == 'Measles Containing Vaccine (MCV) MR/MMR - Grade 1') ? 'selected' : ''; ?>>Measles Containing Vaccine (MCV) MR/MMR - Grade 1</option>
  <option value="Measles Containing Vaccine (MCV) MR/MMR - Grade 7" <?php echo ($vaccine == 'Measles Containing Vaccine (MCV) MR/MMR - Grade 7') ? 'selected' : ''; ?>>Measles Containing Vaccine (MCV) MR/MMR - Grade 7</option>
  <option value="Tetanus Diphtheria (TD) - Grade 1 & 7" <?php echo ($vaccine == 'Tetanus Diphtheria (TD) - Grade 1 & 7') ? 'selected' : ''; ?>>Tetanus Diphtheria (TD) - Grade 1 & 7</option>
  <option value="Human Papillomavirus Vaccine - Grade 4 (FEMALE 9-14 Years Old)" <?php echo ($vaccine == 'Human Papillomavirus Vaccine - Grade 4 (FEMALE 9-14 Years Old)') ? 'selected' : ''; ?>>Human Papillomavirus Vaccine - Grade 4 (FEMALE 9-14 Years Old)</option>
  <option value="Influenza Vaccine - Senior Citizen" <?php echo ($vaccine == 'Influenza Vaccine - Senior Citizen') ? 'selected' : ''; ?>>Influenza Vaccine - Senior Citizen</option>
  <option value="Pneumococcal Vaccine - Senior Citizen" <?php echo ($vaccine == 'Pneumococcal Vaccine - Senior Citizen') ? 'selected' : ''; ?>>Pneumococcal Vaccine - Senior Citizen</option>
</select>

                </div>
                <div class="form-group">
                  <label for="date_given">Date Given</label>
                  <input type="date" class="form-control" id="date_given" name="date_given" value="<?php echo $date_given; ?>" required>
                </div>
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <textarea class="form-control" id="remarks" name="remarks"><?php echo $remarks; ?></textarea>
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
