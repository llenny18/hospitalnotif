<?php
session_start();
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "Taal_RHU_System"; // The database name you've created

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Close the connection
// Uncomment this line to close the connection after operations
// $conn->close();


function checkColor($num){
    if($num<0){
        echo "danger";
    }
    else {
        echo "success";
    }

}


function checkArrow($num){
    if($num<0){
        echo "down";
    }
    else {
        echo "up";
    }

}
function checkText($num){
    if($num<0){
        echo " Less";
    }
    else {
        echo " More";
    }

}

function countQR($conn) {

    $sql = "SELECT count(*) as count FROM `qr_codes` WHERE 1;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['count'];

}
}

function countQRM($conn) {

    $sql ='SELECT * FROM `qrm`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['count'];
}
}


function countPatientM($conn) {

    $sql ='SELECT * FROM `pm`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['patient_checkup_count_difference'];
}
}



function countWorkerM($conn) {

    $sql ='SELECT * FROM `wm`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['health_worker_created_difference'];
}
}


function countRecordM($conn) {

    $sql ='SELECT * FROM `rm`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['checkup_count_difference'];
}
}
function countPatient($conn) {

    $sql = "SELECT count(*) as count FROM `patients` WHERE 1;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['count'];
}
}
function countWorker($conn) {

    $sql = 'SELECT count(*) as count FROM `users` WHERE role = "health_worker"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['count'];
}
}

function countRecords($conn) {

    $sql = 'SELECT count(*) as count FROM `medical_records` WHERE 1';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

return $row['count'];
}
}


?>
