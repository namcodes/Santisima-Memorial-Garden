<?php
include_once('../php/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../../wp-resources/icon.png" type="image/x-icon" />
  <!-- DataTables -->
  <link rel="stylesheet" href="../../wp-plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../../wp-plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="../../wp-plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-danger text-white" href="../php/logout.php" role="button">
            Logout
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-2">
      <!-- Brand Logo -->
      <a href="../" class="brand-link">
        <img src="../../wp-resources/icon.png" alt="Santisima Logo" class="brand-image img-circle elevation-1" />
        <span class="brand-text font-weight-light">SANTISIMA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../images/<?php echo ($avatar) ?>" class="img-circle elevation-1" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo (ucfirst($first_name) . " " . ucfirst($last_name)) ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Tools</li>
            <li class="nav-item">
              <a href="../" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payments.php" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>Payment Records</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="transactions.php" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>Transactions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="records.php" class="nav-link">
                <i class="nav-icon fas fa-book-open"></i>
                <p>Records</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="support.php" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>Live Chat</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $user_query = $conn->query("SELECT * FROM tbl_users ORDER BY id DESC");
                ?>
                <h3><?php echo (number_format($user_query->num_rows)); ?></h3>

                <p>Total of Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php
                $transaction_query = $conn->query("SELECT * FROM tbl_transactions");
                ?>
                <h3><?php echo (number_format($transaction_query->num_rows)); ?></h3>
                <p>Total of Transactions</p>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $death_query = $conn->query("SELECT * FROM tbl_records");
                ?>
                <h3><?php echo (number_format($death_query->num_rows)); ?></h3>

                <p>Total of Deaths</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="records.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Latest Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="table-users" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="white-space: nowrap">Avatar</th>
                      <th style="white-space: nowrap">First Name</th>
                      <th style="white-space: nowrap">Last Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $counter = 0;
                    foreach ($user_query as $user_row) {
                      ++$counter;
                      echo ('
                        <tr>
                        <td>' . $counter . '</td>
                        <td style="
                              white-space: nowrap;
                              width: 15px;
                              text-align: center;
                            ">
                          <img src="../../wp-images/' . $user_row['avatar'] . '" class="img-circle col-10 img-responsive" />
                        </td>
                        <td style="white-space: nowrap">' . $user_row['fname'] . '</td>
                        <td style="white-space: nowrap">' . $user_row['lname'] . '</td>
                        </tr>
                        ');
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Latest Transactions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th style="white-space: nowrap">Reference</th>
                      <th style="white-space: nowrap">Status</th>
                      <th style="white-space: nowrap">Date</th>
                      <th style="white-space: nowrap">First Name</th>
                      <th style="white-space: nowrap">Last Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $transaction_query = $conn->query("SELECT * FROM tbl_transactions ORDER BY id DESC");
                    $counter = 0;
                    foreach ($transaction_query as $trans_row) {
                      ++$counter;
                      if ($trans_row['status'] == 'Success') {
                        $status = "badge badge-success";
                      } elseif ($trans_row['status'] == "Pending") {
                        $status = "badge badge-secondary";
                      } else {
                        $status = "badge badge-danger";
                      }
                      echo ('
                        <tr>
                        <td style="white-space: nowrap;">' . $counter . '</td>
                        <td style="white-space: nowrap;">#' . $trans_row['reference'] . '</td>
                        <td style="white-space: nowrap;"><span class="' . $status . '">' . $trans_row['status'] . '</span></td>
                        <td style="white-space: nowrap;">' . $trans_row['date'] . '</td>
                        <td style="white-space: nowrap;">' . $trans_row['fname'] . '</td>
                        <td style="white-space: nowrap;">' . $trans_row['lname'] . '</td>
                        </tr>
                        ');
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block"><b>Version</b> 1.0.0</div>
      <strong>Copyright &copy; 2022-2023 <a href="#">SANTISIMA</a>.</strong>
      All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../../wp-plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../wp-plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../wp-plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../wp-plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../wp-plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../wp-plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../wp-plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../wp-plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../wp-plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $("#table-users").DataTable(),
      $("#table").DataTable()
    $("#table_search").DataTable({
      "responsive": false,
      "lengthChange": false,
      "autoWidth": false,
    });
  </script>
</body>

</html>