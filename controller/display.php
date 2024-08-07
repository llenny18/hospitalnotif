
<?php
include("../model/conn.php");



function displayTable($conn, $tableName, $query, $columns) {
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($columns as $column) {
                echo "<td>" . $row[$column] . "</td>";
            }
            if($tableName == "users"){
                echo "<td><a href='edit_user.php?user_id=".$row['user_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?user_id=".$row['user_id']."'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "qr_codes"){
                echo "<td><a href='edit_qrcodes.php?qrid=".$row['qr_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?user_id=".$row['qr_id']."'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "sms_notifications"){
                echo "<td><a href='edit_sms.php?sms_id=".$row['sms_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?user_id=".$row['sms_id']."'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "patients"){
                echo "<td><a href='edit_patient.php?pid=".$row['patient_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?user_id=".$row['patient_id']."'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "medical_records"){
                echo "<td><a href='edit_mrecords.php?record_id=".$row['record_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?user_id=".$row['record_id']."'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            
            echo "</tr>";
        }
    } else {
    }
}




?>