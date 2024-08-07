<?php
include("../model/conn.php");

if(isset($_GET['table'])){
    $table = $_GET['table'];
    $idname = $_GET['idname'];
    $idval = $_GET['idval'];
    $link = $_GET['link'];

    $sql = "DELETE FROM ".$table." WHERE $idname = $idval";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Record Deleted successfully!'); window.location.href='".$link.".php';</script>";
    
    } else {
      echo "Error deleting record: " . $conn->error;
      echo "<script>alert('Error deleting record: " . $conn->error."'); window.location.href='".$link.".php';</script>";
    }
}








?>