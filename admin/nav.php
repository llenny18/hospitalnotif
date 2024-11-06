<?php
if(!isset($_SESSION['admin_id'])){
  echo "<script>alert('Login Required!'); window.location.href='login.php';</script>";

}

{



?>



<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">TAAL-RHU</div>
      </a>
      <hr class="sidebar-divider my-0">
      <br>
      <div class="sidebar-heading">
        Home
      </div>
      <li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "index.php") { echo ' active ';} ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        System Management
      </div>
      <li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "admins.php" || basename($_SERVER['REQUEST_URI']) == "workers.php") { echo ' active ';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Accounts</span>
        </a>
        <div id="collapseBootstrap" class="collapse <?php if (basename($_SERVER['REQUEST_URI']) == "admins.php" || basename($_SERVER['REQUEST_URI']) == "workers.php") { echo ' show ';} ?>" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Records</h6>
            <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "admins.php" ) { echo ' active ';} ?>" href="admins.php">Administrators</a>
            <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "workers.php") { echo ' active ';} ?>" href="workers.php">Health Workers</a>
           
           
          </div>
        </div>
      </li>
      <li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "qr_codes.php" || basename($_SERVER['REQUEST_URI']) == "sms_sent_preg.php" || basename($_SERVER['REQUEST_URI']) == "sms_sent_pat.php") { echo ' active ';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm ">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Access Control</span>
        </a>
        <div id="collapseForm" class="collapse <?php if (basename($_SERVER['REQUEST_URI']) == "qr_codes.php" || basename($_SERVER['REQUEST_URI']) == "sms_sent_pat.php" || basename($_SERVER['REQUEST_URI']) == "sms_sent_preg.php") { echo ' show ';} ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Records</h6>
          <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "qr_codes.php") { echo ' active ';} ?>" href="qr_codes.php">QR Codes</a>
            <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "sms_sent_preg.php") { echo ' active ';} ?>" href="sms_sent_preg.php">Pregnant SMS Notification</a>
            <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "sms_sent_pat.php") { echo ' active ';} ?>" href="sms_sent_pat.php">Patient SMS Notification</a>
          </div>
        </div>
      </li>
      
     
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Records Management
      </div>
      <li class="nav-item <?php if (basename($_SERVER['REQUEST_URI']) == "patients.php" || basename($_SERVER['REQUEST_URI']) == "m_records.php") { echo ' active ';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Hospital </span>
        </a>
        <div id="collapseTable" class="collapse <?php if (basename($_SERVER['REQUEST_URI']) == "patients.php" || basename($_SERVER['REQUEST_URI']) == "m_records.php" || basename($_SERVER['REQUEST_URI']) == "pregnants.php" || basename($_SERVER['REQUEST_URI']) == "childs.php") { echo ' show ';} ?>" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Records</h6>
            
          <a class="collapse-item <?php if (basename($_SERVER['REQUEST_URI']) == "patients.php" ) { echo ' active ';} ?>" href="patients.php">Patient List</a>
          <a class="collapse-item <?php if ( basename($_SERVER['REQUEST_URI']) == "m_records.php") { echo ' active ';} ?>" href="m_records.php">Medical Records List</a>
          <a class="collapse-item <?php if ( basename($_SERVER['REQUEST_URI']) == "pregnants.php") { echo ' active ';} ?>" href="pregnants.php">Pregnant List</a>
          <a class="collapse-item <?php if ( basename($_SERVER['REQUEST_URI']) == "childs.php") { echo ' active ';} ?>" href="childs.php">Child List</a>
          
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
    
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter"><?php NotificationsCount($conn) ?>+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  One Week On Due Patient Checkups 
                </h6>
                <?php Notifications($conn); ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            
           
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?= $_SESSION['username'] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://localhost/hospitalnotif/admin/edit_user.php?user_id=<?= $_SESSION['admin_id'] ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>

<?php

}

?>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
          </div>
        </div>
      </div>