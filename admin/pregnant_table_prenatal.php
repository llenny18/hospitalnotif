<?php
// Step 1: Establish database connection
include("../controller/display.php"); 

// Step 2: Get patient_id from the URL
$patient_id = isset($_GET['pid']) ? intval($_GET['pid']) : 0;

// Step 3: Select query to fetch data for the given patient_id from the view
$sql = "SELECT * FROM pregnant_patient_checkups WHERE patient_id = $patient_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Step 4: Display data in the card
    while($row = $result->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pregnancy and Check-up Details</title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
        <div class="container mt-5">
            <!-- Pregnant Patient Personal Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Mother's Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Mother's Name:</strong> <?php echo $row['mother_name']; ?></p>
                    <p><strong>Mother's Birthday:</strong> <?php echo $row['mother_birthday']; ?></p>
                    <p><strong>Mother's Cell Phone:</strong> <?php echo $row['mother_cell_phone']; ?></p>
                    <p><strong>Mother's Landline:</strong> <?php echo $row['mother_landline']; ?></p>
                    <p><strong>Mother's Blood Type:</strong> <?php echo $row['mother_blood_type']; ?></p>
                    <p><strong>Mother's Job:</strong> <?php echo $row['mother_job']; ?></p>
                </div>
            </div>

            <!-- Father's Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Father's Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Father's Name:</strong> <?php echo $row['father_name']; ?></p>
                    <p><strong>Father's Birthday:</strong> <?php echo $row['father_birthday']; ?></p>
                    <p><strong>Father's Cell Phone:</strong> <?php echo $row['father_cell_phone']; ?></p>
                    <p><strong>Father's Landline:</strong> <?php echo $row['father_landline']; ?></p>
                    <p><strong>Father's Blood Type:</strong> <?php echo $row['father_blood_type']; ?></p>
                    <p><strong>Father's Job:</strong> <?php echo $row['father_job']; ?></p>
                </div>
            </div>

            <!-- Children Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Children's Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Child 1 Name:</strong> <?php echo $row['child1_name']; ?>, <strong>Birthday:</strong> <?php echo $row['child1_birthday']; ?></p>
                    <p><strong>Child 2 Name:</strong> <?php echo $row['child2_name']; ?>, <strong>Birthday:</strong> <?php echo $row['child2_birthday']; ?></p>
                    <p><strong>Child 3 Name:</strong> <?php echo $row['child3_name']; ?>, <strong>Birthday:</strong> <?php echo $row['child3_birthday']; ?></p>
                </div>
            </div>

            <!-- Emergency Contact Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Emergency Contact Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Emergency Contact Name:</strong> <?php echo $row['emergency_contact_name']; ?></p>
                    <p><strong>Relationship:</strong> <?php echo $row['emergency_contact_relationship']; ?></p>
                    <p><strong>Emergency Contact Birthday:</strong> <?php echo $row['emergency_contact_birthday']; ?></p>
                    <p><strong>Emergency Contact Cell Phone:</strong> <?php echo $row['emergency_contact_cell_phone']; ?></p>
                    <p><strong>Emergency Contact Landline:</strong> <?php echo $row['emergency_contact_landline']; ?></p>
                </div>
            </div>

            <!-- Pregnant Check-up Information -->
            <div class="card">
                <div class="card-header">
                    <h3>Check-up Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Check-up Phase</th>
                                <th>Date</th>
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Age of Gestation</th>
                                <th>Blood Pressure</th>
                                <th>Nutritional Status</th>
                                <th>Birth Plan</th>
                                <th>Dental Check</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- First Check-up -->
                            <tr>
                                <td>First Check-up</td>
                                <td><?php echo $row['first_checkup_date']; ?></td>
                                <td><?php echo $row['first_checkup_weight']; ?> kg</td>
                                <td><?php echo $row['first_checkup_height']; ?> cm</td>
                                <td><?php echo $row['first_checkup_age_of_gestation']; ?> weeks</td>
                                <td><?php echo $row['first_checkup_blood_pressure']; ?></td>
                                <td><?php echo $row['first_checkup_nutritional_status']; ?></td>
                                <td><?php echo $row['first_checkup_birth_plan'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo $row['first_checkup_dental_check'] ? 'Yes' : 'No'; ?></td>
                            </tr>
                            <!-- Second Check-up -->
                            <tr>
                                <td>Second Check-up</td>
                                <td><?php echo $row['second_checkup_date']; ?></td>
                                <td><?php echo $row['second_checkup_weight']; ?> kg</td>
                                <td><?php echo $row['second_checkup_height']; ?> cm</td>
                                <td><?php echo $row['second_checkup_age_of_gestation']; ?> weeks</td>
                                <td><?php echo $row['second_checkup_blood_pressure']; ?></td>
                                <td><?php echo $row['second_checkup_nutritional_status']; ?></td>
                                <td><?php echo $row['second_checkup_birth_plan'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo $row['second_checkup_dental_check'] ? 'Yes' : 'No'; ?></td>
                            </tr>
                            <!-- Third Check-up -->
                            <tr>
                                <td>Third Check-up</td>
                                <td><?php echo $row['third_checkup_date']; ?></td>
                                <td><?php echo $row['third_checkup_weight']; ?> kg</td>
                                <td><?php echo $row['third_checkup_height']; ?> cm</td>
                                <td><?php echo $row['third_checkup_age_of_gestation']; ?> weeks</td>
                                <td><?php echo $row['third_checkup_blood_pressure']; ?></td>
                                <td><?php echo $row['third_checkup_nutritional_status']; ?></td>
                                <td><?php echo $row['third_checkup_birth_plan'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo $row['third_checkup_dental_check'] ? 'Yes' : 'No'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
        <?php
    }
} else {
    echo "No records found for the specified patient.";
}

$conn->close();
?>
  <script>
        window.onload = function() {
            window.print();  // This will open the print dialog automatically when the page loads
        };
    </script>