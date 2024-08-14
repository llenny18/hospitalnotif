
<?php
include("./model/conn.php");

function displayQRCodeLink($patient_id, $conn) {


    // Query to check if the patient_id has a QR code
    $sql = "";
   
    $sql = "SELECT qr_code_exists FROM patient_qr_status WHERE patient_id = ".$patient_id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

    // Display the link if the QR code exists
    if($row['qr_code_exists'] === 'No') {
        echo "<a href='http://localhost/hospitalnotif/admin/generateqr.php?patient_id=" . $patient_id . "' class='btn btn-success m-1'>Generate QR Code</a>";
    }
}
}

function displayTable($conn, $tableName, $query, $columns) {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($columns as $column) {
                
                    echo "<td>" . $row[$column] . "</td>";
                
                
            }
            
                echo "<td><a href='view_record.php?record_id=".$row['record_id']."'  class='btn btn-primary m-1'>View</a>
                </td>";

                
            
            
            echo "</tr>";
        }
    } else {
    }
}




?>