<?php
include_once('../wp-php/session.php');
if (isset($_GET['hash'])) {
  $hash = htmlspecialchars($_GET['hash']);
  $failed_query = $conn->query("SELECT * FROM tbl_transactions WHERE hash = '{$hash}' LIMIT 1");
  if ($failed_query->num_rows > 0) {
    $update_transactions = $conn->query("UPDATE tbl_transactions SET status = 'Failed' WHERE hash = '{$hash}'");
    if ($update_transactions) {
      $failed_row = $failed_query->fetch_assoc();
    } else {
      echo ("Something went wrong");
    }
  } else {
    header("Location: ../");
  }
} else {
  header("Location: ../");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Failed</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon" />
  <style>
    .btn-coded {
      background-color: #d73e3e !important;
    }

    .btn-coded:hover {
      background-color: #dd5454 !important;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1604.44px">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row col-md-12 justify-content-center">
            <div class="row">
              <img src="../wp-resources/logo.png" alt="" class="img-fluid img-responsive" />
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card card-outline card-danger">
                <div class="card-header">
                  <h1 class="card-title">
                    <i class="fas fa-times text-danger"></i> - Failed Paid!
                  </h1>
                </div>
                <div class="card-body">
                  <p class="m-0">Name : <?php echo ($failed_row['fname'] . " " . $failed_row['lname']) ?></p>
                  <p class="m-0">Payment Method : Gcash</p>
                  <p class="m-0">Amount Paid : ₱ <?php echo (number_format($failed_row['amount'])) ?></p>
                  <p class="m-0">Reference Number : #<?php echo ($failed_row['reference']) ?></p>
                  <hr />
                  <div>
                    <b>Product Information</b>
                    <ul>
                    <li>Product Name : <?php echo ($failed_row['package_name']) ?></li>
                      <li>Product Class : <?php echo ($failed_row['package_class']) ?></li>
                      <li>Product Type : <?php echo ($failed_row['package_type']) ?></li>
                      <li>Map Place : <?php echo ($failed_row['map_place']) ?></li>
                    </ul>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="dashboard.php" class="btn btn-coded text-white">Go to Dashboard</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block"><b>Version</b> 1.0.0</div>
      <strong>Copyright &copy; 2022-2023 <a href="#">SANTISIMA</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>