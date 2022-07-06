<?php
include_once('../wp-php/session.php');
if (isset($_GET['hash'])) {
  $hash = htmlspecialchars($_GET['hash']);
  $success_query = $conn->query("SELECT * FROM tbl_transactions WHERE hash = '{$hash}' LIMIT 1");
  if ($success_query->num_rows > 0) {
    $update_transactions = $conn->query("UPDATE tbl_transactions SET status = 'Success' WHERE hash = '{$hash}'"); //Update table from transactioncs
    if ($update_transactions) {
      $success_row = $success_query->fetch_assoc(); //Fetching data from database
      $package_code = $success_row['package_code'];
      $tbl_prices = $conn->query("SELECT * FROM tbl_prices WHERE package_code = '{$package_code}' LIMIT 1");
      if ($tbl_prices->num_rows > 0) {
        $prices_rows = $tbl_prices->fetch_assoc();
        $reservation_fee = $success_row['amount'];
        $token = $success_row['token'];
        $package_type = $success_row['package_type'];
        $balance = $prices_rows['price'] - $success_row['amount'];
        $date = date("Y-m-d");
        $check_payment = $conn->query("SELECT * FROM tbl_payments WHERE user = '{$user}' AND token = '{$token}' LIMIT 1");
        if ($check_payment->num_rows < 1) {
          $insert_payment = $conn->query("INSERT INTO tbl_payments (date, user, token, package_type, balance, paid) VALUE ('{$date}', {$user}, '{$token}', '{$package_type}', '{$balance}', '{$reservation_fee}')");
        } 
      }
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
  <title>Santisima | Success</title>

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
              <div class="card card-outline card-success">
                <div class="card-header">
                  <h1 class="card-title">
                    <i class="fa fa-check text-green"></i> - Successully Paid!
                  </h1>
                </div>
                <div class="card-body">
                  <p class="m-0">Name : <?php echo ($success_row['fname'] . " " . $success_row['lname']) ?></p>
                  <p class="m-0">Payment Method : Gcash</p>
                  <p class="m-0">Amount Paid : ₱ <?php echo (number_format($success_row['amount'])) ?></p>
                  <p class="m-0">Reference Number : #<?php echo ($success_row['reference']) ?></p>
                  <hr />
                  <div>
                    <b>Package Information</b>
                    <ul>
                      <li>Product Name : <?php echo ($success_row['package_name']) ?></li>
                      <li>Product Class : <?php echo ($success_row['package_class']) ?></li>
                       <?php
                       if(!empty($package_type)){
                        ?>
                        <li>Product Type : <?php echo ($package_type) ?></li>
                        <?php
                       }
                       ?>
                      
                      <li>Map Place : <?php echo ($success_row['map_place']) ?></li>
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
      <strong>Copyright &copy; 2022-2023
        <a href="#">SANTISIMA</a>.</strong>
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