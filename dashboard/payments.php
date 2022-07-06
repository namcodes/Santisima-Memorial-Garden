<?php
include_once('../wp-php/session.php');
if (isset($_GET['auth_code']) && isset($_GET['auth_map'])) {
  $package_code = $_GET['auth_code'];
  $map_number = $_GET['auth_map'];
  $package_query = $conn->query("SELECT * FROM tbl_packages WHERE package_code = '{$package_code}' LIMIT 1");
  if ($package_query->num_rows > 0) {
    $package_row = $package_query->fetch_assoc();
  } else {
    header("Location: packages.php");
  }
} else {
  header("Location: packages.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Payment</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon" />
  <!-- Sweet Alert 2 -->
  <script src="../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../wp-plugins/sweetalert2/sweetalert2.min.css" />
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
            <div class="col-md-9">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h2 class="card-title">Payment Confirmation</h2>
                </div>
                <form action="php/payment.php" method="post">
                <!-- /.card-header -->
                <div class="card-body d-flex flex-wrap">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <img src="../wp-assets/<?php echo ($package_row['image']) ?>" alt="" class="card-img-top" />
                      </div>
                      <div class="card-body">
                        <div class="card-text">
                          <?php echo ($package_row['description']) ?>
                        </div>
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>Package Name </b>
                            <a class="float-right"><?php echo ($package_row['package_name']) ?></a>
                          </li>
                          <?php
                          if (!empty($package_row['package_class'])) {
                          ?>
                            <li class="list-group-item">
                              <b>Package Class </b>
                              <a class="float-right"><?php echo ($package_row['package_class']) ?></a>
                            </li>
                          <?php
                          }
                          ?>

                          <li class="list-group-item">
                            <b>Map Place </b>
                            <a class="float-right"><?php echo ($package_row['phase']) ?> - #<?php echo ($map_number) ?></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <?php
                  $billing_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");
                  if ($billing_query->num_rows > 0) {
                    $billing_row = $billing_query->fetch_assoc();
                  } else {
                    header("Location: ../billings.php");
                  }
                  ?>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h1 class="card-title">Billing Details</h1>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>Name </b>
                            <a class="float-right"><?php echo ($billing_row['fname'] . ' ' . $billing_row['lname']) ?></a>
                          </li>
                          <li class="list-group-item">
                            <b>Email Address </b>
                            <a class="float-right"><?php echo ($billing_row['email']) ?></a>
                          </li>
                          <li class="list-group-item">
                            <b>contact number </b>
                            <a class="float-right"><?php echo ($billing_row['contact']) ?></a>
                          </li>
                          <li class="list-group-item">
                            <b>Address </b>
                            <a class="float-right"><?php echo ($billing_row['address']) ?></a>
                          </li>
                          <li class="list-group-item">
                            <b>Zip Code </b>
                            <a class="float-right"><?php echo ($billing_row['postal']) ?></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h1 class="card-title">Transaction Details</h1>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>Payment Method </b>
                            <a class="float-right"><b>Gcash</b></a>
                          </li>
                           <?php
                              $code = $package_row['package_code'];
                              $package_type  = $conn->query("SELECT * FROM tbl_prices WHERE package_code = '{$code}'");
                              if($package_type->num_rows > 0){
                                ?>
                          <li class="list-group-item">
                          <b>Package Type </b>
                            <select name="package_type" class="col-md-4 form-control float-right" required>
                              <option value="" selected disabled>SELECT</option>
                             

                                <?php
                              foreach($package_type as $type_rows){
                                ?>
                                <option value="<?php echo($type_rows['description'])?>"><?php echo($type_rows['description']. " - ₱ ". $type_rows['price'])?></option>
                                <?php
                              }
                              ?>
                            
                            </select>
                          </li>
                          <?php
                          }
                          ?>
                          
                          <li class="list-group-item">
                            <b>Reservation Fee</b>
                            <a class="float-right"><b>₱ <?php echo (number_format($package_row['price'])) ?></b></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="text" name="user" value="<?php echo ($user) ?>" hidden>
                    <input type="text" name="payment_method" value="Gcash" hidden>
                    <input type="text" name="amount" value="<?php echo ($package_row['price']) ?>" hidden>
                    <input type="text" name="package_name" value="<?php echo ($package_row['package_name']) ?>" hidden>
                    <?php
                    if (!empty($package_row['package_class'])) {
                    ?>
                      <input type="text" name="package_class" value="<?php echo ($package_row['package_class']) ?>" hidden>
                    <?php
                    }
                    ?>
                    <input type="text" name="package_code" value="<?php echo ($package_row['package_code']) ?>" hidden>
                    <input type="text" name="map_place" value="<?php echo ($package_row['phase']) ?> - #<?php echo ($map_number) ?>" hidden>
                    <button type="submit" class="float-right btn btn-primary">
                      Pay Now!
                    </button>
                  </form>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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