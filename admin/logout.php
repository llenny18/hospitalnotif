<?php
 include("../model/conn.php");


 session_destroy();
 session_unset();

 echo "<script>alert('Logout Success!'); window.location.href='login.php';;</script>";



?>