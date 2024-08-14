<?php


// Include the PHP QR Code library
include '../model/conn.php';
include '../phpqrcode/qrlib.php';

// Data to be encoded in the QR code

// Get the patient ID from the form submission
$patient_id = $_GET['patient_id'];

// Data to be encoded in the QR code (you can customize the URL as needed)
$data = 'http://localhost/hospitalnotif/m_records.php?p_id=' . $patient_id;

// File path where the QR code image will be saved
$filename = "../qrcodes/qr_" . $patient_id . ".png";

// Generate and save the QR code image
QRcode::png($data, $filename, QR_ECLEVEL_L, 10, 2);



// Insert the QR code data into the database
$sql = "INSERT INTO qr_codes (patient_id, qr_code, file_location) VALUES ('$patient_id', '" . basename($filename) . "', '$filename')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('QR Code generated and saved successfully!');
        window.location.href = 'qr_codes.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>