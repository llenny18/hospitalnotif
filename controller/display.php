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
            echo "</tr>";
        }
    } else {
    }
}





















?>