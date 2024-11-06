<?php include("../controller/display.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregnant Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .table-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #ffffff;
        }
        h1 {
            color: #0044cc;
            text-align: center;
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
            text-align: left;
        }
        th {
            background-color: #0044cc;
            color: white;
        }
    </style>
</head>
<body>
<?php

function selectDate1($pid, $vaccine) {
    global $conn;
    $sql = "SELECT * FROM pregnant_records_view WHERE dose LIKE '%$vaccine%' AND pregnant_id = '$pid'";
    $result = $conn->query($sql);

    $dates = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dates[] = $row['date_given'];  // Collect all the dates in an array
        }
    }
    return !empty($dates) ? implode("<br> - ", $dates) : "";  // Join the dates with a line break if available
}

function selectDate2($pid, $vaccine) {
    global $conn;
    $sql = "SELECT * FROM pregnant_records_view WHERE dose LIKE '%$vaccine%' AND pregnant_id = '$pid'";
    $result = $conn->query($sql);

    $return_dates = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $return_dates[] = $row['return_date'];  // Collect all the return dates in an array
        }
    }
    return !empty($return_dates) ? implode("<br> - ", $return_dates) : "";  // Join the return dates with a line break if available
}

?>

<div class="table-container">
    <h1>Pregnant Records</h1>
    <table>
        <thead>
            <tr>
                <th>Dose</th>
                <th>Description</th>
                <th>Date of Vaccination (mm/dd/yy)</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Define the doses and descriptions for the pregnancy immunization
            $pregnancy_doses = [
                "1st dose" => "As early as possible during pregnancy",
                "2nd dose" => "At least 4 weeks after dose 1",
                "3rd dose" => "At least 6 months after dose 2",
                "4th dose" => "At least 1 year after dose 3",
                "5th dose" => "At least 1 year after dose 4",
                "Fully Immunized" => "Nakatanggap na ng 5 doses ng Tetanus-containing Vaccines"
            ];

            // Loop through each dose and create a row in the table
            foreach ($pregnancy_doses as $dose => $description) {
                $date_given = selectDate1($_GET['pid'], $dose);  // Fetch the vaccination dates
                $return_date = selectDate2($_GET['pid'], $dose);  // Fetch the return dates

                echo "<tr>
                    <td>$dose</td>
                    <td>$description</td>
                    <td>$date_given</td>
                    <td>$return_date</td>
                </tr>";
            }
            ?>
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
