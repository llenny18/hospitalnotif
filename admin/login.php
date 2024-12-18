<!DOCTYPE html>
<?php include("../model/conn.php"); ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Taal RHU System- Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-login">
  <!-- Login Content --><?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the email exists in the database
  $query = "SELECT * FROM users WHERE (email = ? or username = ?) and role='admin'";
  if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param('ss', $email, $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
          $user = $result->fetch_assoc();
          // Verify the password
          if (password_verify($password, $user['password_hash'])) {
              // Set session variables
              $_SESSION['admin_id'] = $user['user_id'];
              $_SESSION['username'] = $user['username'];
              $_SESSION['role'] = $user['role'];

              // Redirect to index.php
        echo "<script>alert('Login Success!'); window.location.href='index.php';</script>";
          } else {
              // Invalid password
        echo "<script>alert('Invalid password!'); ;</script>";
      }
      } else {
          // No user found with that email
          echo "<script>alert('No account found with that email!'); ;</script>";
        }
      $stmt->close();
  } else {
      echo "<script>alert('Database query error!'); ;</script>";
    }
}

?>
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Administrator Login</h1>
                  </div>
                  <form class="user" method="POST" action="">
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>

                    </form>
                    <hr>
                    
                    <div class="text-center">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>