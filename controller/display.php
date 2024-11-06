
<?php
include("../model/conn.php");

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
                if($column =="file_location"){
                    echo "<td>" . '<img src="'.$row[$column].'" alt="" ><hr>
                    <a href="'.$row[$column].'" download="'.$row[$column].'" class="btn btn-danger m-1"> Download Image</a>
                    ' . "</td>";
                    
                }
                else{
                    echo "<td>" . $row[$column] . "</td>";
                }
                
            }
            if($tableName == "users"){
                echo "<td><a href='edit_user.php?user_id=".$row['user_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?idval=".$row['user_id']."&table=$tableName&link=admins&idname=user_id'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "qr_codes"){
                echo "<td><a href='edit_qrcodes.php?qrid=".$row['qr_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?idval=".$row['qr_id']."&table=$tableName&link=qr_codes&idname=qr_id'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "sms_notifications"){
                echo "<td><a href='edit_sms.php?sms_id=".$row['sms_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?idval=".$row['sms_id']."&table=$tableName&link=sms_sent&idname=sms_id'  class='btn btn-danger m-1'>Delete</a></td>";
            }
            else if ($tableName == "patients"){
                echo "<td><a href='edit_patient.php?pid=".$row['patient_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?idval=".$row['patient_id']."&table=$tableName&link=patients&idname=patient_id'  class='btn btn-danger m-1'>Delete</a>";
                displayQRCodeLink($row['patient_id'], $conn);

               echo" </td>";
            }
            else if ($tableName == "medical_records"){
                echo "<td><a href='edit_mrecords.php?record_id=".$row['record_id']."'  class='btn btn-primary m-1'>Edit</a><a href='delete.php?idval=".$row['record_id']."&table=$tableName&link=m_records&idname=record_id'  class='btn btn-danger m-1'>Delete</a>
                </td>";
            }
            else if ($tableName == "pregnants"){
                echo "<td>
                <a href='pregnant_records.php?id=".$row['id']."'  class='btn btn-success m-1'>View Immunization Records</a>
                
                <a href='manage_pregnant.php?pregnantid=".$row['id']."'  class='btn btn-primary m-1'>Edit</a>
                <a href='delete.php?idval=".$row['id']."&table=$tableName&link=pregnants&idname=id'  class='btn btn-danger m-1'>Delete</a>
                </td>";
            }
            else if ($tableName == "child"){
                echo "<td>
                <a href='child_records.php?id=".$row['id']."'  class='btn btn-success m-1'>View Immunization Records</a>
                <a href='manage_child.php?childid=".$row['id']."'  class='btn btn-primary m-1'>Edit</a>
                
                <a href='delete.php?idval=".$row['id']."&table=$tableName&link=childs&idname=id'  class='btn btn-danger m-1'>Delete</a>
                </td>";
            }
            
            echo "</tr>";
        }
    } else {
    }
}




?>