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
  <title>Taal RHU System- Manage User Account</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include("./nav.php");
    // Initialize variables
    $username = $password_hash = $email = $full_name = $role = "";

    // Check if we are editing an existing record
    if (isset($_GET['user_id'])) {
      $user_id = $_GET['user_id'];
      $sql = "SELECT * FROM users WHERE user_id = $user_id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
        $full_name = $row['full_name'];
        $role = $row['role'];
      }
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password_hash = password_hash($row['password_hash'], PASSWORD_DEFAULT); // Hash the password
      $email = $_POST['email'];
      $full_name = $_POST['full_name'];
      $role = $_POST['role'];

      if (isset($_GET['user_id'])) {
        // Update the record
        $sql = "UPDATE users SET username='$username',  email='$email', full_name='$full_name', role='$role' WHERE user_id=$user_id";
      } else {
        // Insert a new record
        $sql = "INSERT INTO users (username, password_hash, email, full_name, role) VALUES ('$username', '$password_hash', '$email', '$full_name', '$role')";
      }

      if ($conn->query($sql) === TRUE) {
        if($role == "admin"){
          echo "<script>alert('Record saved successfully!'); window.location.href='admins.php';</script>";

        }
        else if($role == "health_worker"){
          echo "<script>alert('Record saved successfully!'); window.location.href='workers.php';</script>";

        }
      } else {
        echo "<script>alert('Error: " . $sql . " - " . $conn->error."');</script>";
      }
    }

    $conn->close();

    ?>
    <!-- Topbar -->

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage User Account</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>

          <li class="breadcrumb-item" aria-current="page">Manage User Account</li>
        </ol>
      </div>

      <div class="row">


        <div class="col-lg-12">
          <!-- General Element -->
          <div class="card mb-4">
         
            <div class="card-body">
            <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <?php if (!isset($_GET['user_id'])) { ?>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" value="<?php echo $password_hash; ?>" name="password" required>
        </div>
        <?php } ?>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $full_name; ?>">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="admin" <?php echo ($role == 'admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="health_worker" <?php echo ($role == 'health_worker') ? 'selected' : ''; ?>>Health Worker</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
            </div>
          </div>

        </div>
      </div>
      <!--Row-->


      <!-- Modal Logout -->
      

    </div>
    <!---Container Fluid-->
  </div>
  <!-- Footer -->
  <?php include("./footer.php"); ?>
  <!-- Footer -->
  </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>