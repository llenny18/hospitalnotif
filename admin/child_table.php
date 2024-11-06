<?php include("../controller/display.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immunization Card For Child</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        h1 {
            color: #0044cc;
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .info label {
            font-weight: bold;
        }
        .info span {
            display: inline-block;
            width: 70%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0044cc;
            color: white;
        }
        .section-header {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
            padding-left: 10px;
        }
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #4CAF50;
    font-size: 2.5em;
}

.info-container {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.info-section {
    width: 48%;
}

.info-section h2 {
    font-size: 1.8em;
    color: #4CAF50;
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
    display: block;
    margin: 10px 0 5px;
}

span {
    color: #555;
    font-size: 1.1em;
}

label, span {
    display: inline-block;
    width: 100%;
}

.info-section span {
    font-size: 1.1em;
    line-height: 1.1em;
}

p {
    text-align: center;
    font-size: 1.2em;
    color: #FF6347;
}

    </style>
</head>
<body>
    <div class="card-container">
    <?php
// Check if the 'pid' parameter is set
if(isset($_GET['pid'])) {
    $pid = $_GET['pid'];

    // SQL query to fetch data from the view
    $sql = "SELECT * FROM child_immunization_view WHERE child_id = ?";
    
    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("i", $pid); // 'i' for integer (pid is assumed to be an integer)

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($child_id, $child_name, $child_date_of_birth, $child_place_of_birth, $child_address, $child_mother_name, $child_father_name, $child_birth_height, $child_birth_weight, $child_sex, $child_contact_number, $immunization_record_id, $vaccine, $vaccine_date_given, $vaccine_remarks);

        // Fetch the data
        if($stmt->fetch()) {
            // Display the data in HTML format
            echo "<h1>Immunization Card</h1>";
            echo "<div class='info-container'>";
            echo "<div class='info-section'>";
            echo "<h2>Child Information</h2>";
            echo "<label>Name:</label> <span>" . htmlspecialchars($child_name) . "</span><br>";
            echo "<label>Date of Birth:</label> <span>" . htmlspecialchars($child_date_of_birth) . "</span><br>";
            echo "<label>Place of Birth:</label> <span>" . htmlspecialchars($child_place_of_birth) . "</span><br>";
            echo "<label>Address:</label> <span>" . htmlspecialchars($child_address) . "</span><br>";
            echo "<label>Mother's Name:</label> <span>" . htmlspecialchars($child_mother_name) . "</span><br>";
            echo "<label>Father's Name:</label> <span>" . htmlspecialchars($child_father_name) . "</span><br>";
            echo "<label>Birth Height:</label> <span>" . htmlspecialchars($child_birth_height) . "</span><br>";
            echo "<label>Birth Weight:</label> <span>" . htmlspecialchars($child_birth_weight) . "</span><br>";
            echo "<label>Sex:</label> <span>" . htmlspecialchars($child_sex) . "</span><br>";
            echo "<label>Contact No:</label> <span>" . htmlspecialchars($child_contact_number) . "</span><br>";
            echo "</div>";
            
            // Immunization Record Section
            echo "<div class='info-section'>";
            echo "<h2>Immunization Records</h2>";
            echo "<label>Vaccine:</label> <span>" . htmlspecialchars($vaccine) . "</span><br>";
            echo "<label>Date Given:</label> <span>" . htmlspecialchars($vaccine_date_given) . "</span><br>";
            echo "<label>Remarks:</label> <span>" . htmlspecialchars($vaccine_remarks) . "</span><br>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<p>No records found for this child.</p>";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "<p>Error preparing statement: " . $conn->error . "</p>";
    }
} else {
    echo "<p>No child ID provided.</p>";
}


function selectDate($pid, $vaccine){
    global $conn;
    $sql = "SELECT * FROM immunization_record_child WHERE vaccine like '%$vaccine%' and person_id = '$pid'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($vaccine == "Others") {
                echo $row['remarks'] . " - ";
            }
    echo "- " .$row['date_given'] . "<br> ";
        }
    }
    else{
        echo "";
    }
        
}
    
function selectRemarks($pid, $vaccine){
    global $conn;
    $sql = "SELECT * FROM immunization_record_child WHERE vaccine like '%$vaccine%' and person_id = '$pid'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           
    echo "- " .$row['remarks'] . "<br> ";
        }
    }
    else{
        echo "";
    }
        
}
    

// Close the database connection
?>

        <table>
            <thead>
                <tr>
                    <th>Bakuna</th>
                    <th>Doses</th>
                    <th>Petsa ng Bakuna (mm/dd/yy)</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BCG Vaccine</td>
                    <td>At Birth</td>
                    <td><?php selectDate($_GET['pid'], "BCG Vaccine - At Birth");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "BCG Vaccine - At Birth");  ?></td>
                </tr>
                <tr>
                    <td>Hepatitis B Vaccine</td>
                    <td>At Birth</td>
                    <td><?php selectDate($_GET['pid'], "Hepatitis B Vaccine");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Hepatitis B Vaccine");  ?></td>
                </tr>
                <tr>
                    <td>Pentavalent Vaccine (DPT-Hep B-HIB)</td>
                    <td>1 - 1/2 Months<br> 2 - 1/2 Months<br> 3 - 1/2 Months</td>
                    <td><?php selectDate($_GET['pid'], "Pentavalent Vaccine (DPT-Hep B-HIB)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Pentavalent Vaccine (DPT-Hep B-HIB)");  ?></td>
                </tr>
                <tr>
                    <td>Oral Polio Vaccine (OPV)</td>
                    <td>1: 1/2 Months<br> 2: 1/2 Months<br> 3: 1/2 Months</td>
                    <td><?php selectDate($_GET['pid'], "Oral Polio Vaccine (OPV)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Oral Polio Vaccine (OPV)");  ?></td>
                </tr>
                <tr>
                    <td>Inactivated Polio Vaccine (IPV)</td>
                    <td>3 1/2 & 9 months</td>
                    <td><?php selectDate($_GET['pid'], "Inactivated Polio Vaccine (IPV)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "nactivated Polio Vaccine (IPV)");  ?></td>
                </tr>
                <tr>
                    <td>Pneumococcal Conjugate Vaccine (PCV)</td>
                    <td>1: 1/2 Months<br> 2: 1/2 Months<br> 3: 1/2 Months</td>
                    <td><?php selectDate($_GET['pid'], "Pneumococcal Conjugate Vaccine (PCV)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Pneumococcal Conjugate Vaccine (PCV)");  ?></td>
                </tr>
                <tr>
                    <td>Measles, Mumps, Rubella Vaccine (MMR)</td>
                    <td>9 Months & 1 Year</td>
                    <td><?php selectDate($_GET['pid'], "Measles, Mumps, Rubella Vaccine (MMR)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Measles, Mumps, Rubella Vaccine (MMR)");  ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="section-header">School Aged Children</td>
                </tr>
                <tr>
                    <td>Measles Containing Vaccine (MCV) MR/MMR</td>
                    <td>Grade 1</td>
                    <td><?php selectDate($_GET['pid'], "Measles Containing Vaccine (MCV) MR/MMR - Grade 1");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Measles Containing Vaccine (MCV) MR/MMR - Grade 1");  ?></td>
                </tr>
                <tr>
                    <td>Measles Containing Vaccine (MCV) MR/MMR</td>
                    <td>Grade 7</td>
                    <td><?php selectDate($_GET['pid'], "Measles Containing Vaccine (MCV) MR/MMR- Grade 7");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Measles Containing Vaccine (MCV) MR/MMR- Grade 7");  ?></td>
                </tr>
                <tr>
                    <td>Tetanus Diphtheria (TD)</td>
                    <td>Grade 7 & 12</td>
                    <td><?php selectDate($_GET['pid'], "Tetanus Diphtheria (TD)");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Tetanus Diphtheria (TD)");  ?></td>
                </tr>
                <tr>
                    <td>Human Papillomavirus Vaccine</td>
                    <td>Grade 4 FEMALE 9-14 Years Old</td>
                    <td><?php selectDate($_GET['pid'], "Human Papillomavirus Vaccine");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "Human Papillomavirus Vaccine");  ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="section-header">Senior Citizen</td>
                </tr>
                <tr>
                    <td>Influenza Vaccine</td>
                    <td>Annually</td>
                    <td><?php selectDate($_GET['pid'], "Influenza Vaccine");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "BCG Vaccine - At Birth");  ?></td>
                </tr>
                <tr>
                    <td>Pneumococcal Vaccine</td>
                    <td>Once</td>
                    <td><?php selectDate($_GET['pid'], "Pneumococcal Vaccine");  ?></td>
                    <td><?php selectRemarks($_GET['pid'], "BCG Vaccine - At Birth");  ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="section-header">Iba Pang Mga Bakuna</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left; padding-left: 10px;"><?php selectDate($_GET['pid'], "Others");  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        window.onload = function() {
            window.print();  // This will open the print dialog automatically when the page loads
        };
    </script>
</body>
</html>
