<?php
include_once('../wp-php/session.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon">
  <!-- Sweet Alert 2-->
  <script src="../../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../../wp-plugins/sweetalert2/sweetalert2.min.css" />
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1604.44px">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../wp-images/<?php echo ($avatar); ?>" alt="User profile picture" />
                  </div>

                  <h3 class="profile-username text-center"><?php echo (ucfirst($first_name) . ' ' . ucfirst($last_name)); ?></h3>

                  <p class="text-muted text-center">Santisima Member</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Email Address </b>
                      <a class="float-right"><?php echo ($email); ?></a>
                    </li>
                    <li class="list-group-item">
                      <a class="float-left btn btn-info" href="packages.php">
                        <i class="fa fa-box"></i> Packages
                      </a>
                      <a class="float-right btn btn-danger" href="../wp-php/logout.php">
                        <i class="fa fa-sign-out-alt"></i> Logout
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card card-outline card-warning">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <div class="d-flex flex-wrap">
                        <?php
                        $transaction_query = $conn->query("SELECT * FROM tbl_transactions WHERE user = '{$user}' AND status = 'Success' ORDER BY id DESC");
                        if ($transaction_query->num_rows > 0) {
                          foreach ($transaction_query as $transaction_row) {
                            $package_code = $transaction_row['package_code'];
                            $package_query = $conn->query("SELECT * FROM tbl_packages WHERE package_code = '{$package_code}' LIMIT 1");
                            if ($package_query->num_rows > 0) {
                              $fetch_package = $package_query->fetch_assoc();
                              $token = $transaction_row['token'];
                              $balance_query = $conn->query("SELECT * FROM tbl_payments WHERE token = '{$token}' LIMIT 1");
                              $balance_row = $balance_query->fetch_assoc();
                            }

                            if(!empty($transaction_row['package_class'])){
                              $package_source = '<li class="list-group-item">
                              <b>Package Class </b>
                              <a class="float-right">' . $transaction_row['package_class'] . '</a>
                            </li>';
                            }else{
                              $package_source = '';
                            }
                            echo ('
                          <div class="col-md-4">
                          <div class="card">
                            <div class="card-header">
                              <div class="text-center">
                                <img class="img-responsive img-fluid" src="../wp-assets/' . $fetch_package['image'] . '" alt="Product View" />
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Package Name </b>
                                  <a class="float-right">' . $transaction_row['package_name'] . '</a>
                                </li>'.$package_source.'
                                <li class="list-group-item">
                                  <b>Map Place </b>
                                  <a class="float-right">' . $transaction_row['map_place'] . '</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Reference Number </b>
                                  <a class="float-right">#' . $transaction_row['reference'] . '</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Payment Method </b>
                                  <a class="float-right">Gcash</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Amount of Paid </b>
                                  <a class="float-right badge badge-success">₱ ' . number_format($balance_row['paid']) . '</a>
                                </li>
                                <li class="list-group-item">
                                <b>Pending Balance </b>
                                <a class="float-right badge badge-danger">₱ ' . number_format($balance_row['balance']) . '</a>
                              </li>
                              <li class="list-group-item text-center">
                                <button class="btn btn-primary w-100 btn-pay" data-id="' . $balance_row['token'] . '">Pay Now!</button>
                              </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                            ');
                          }
                        } else {
                          header("Location: billings.php");
                        }
                        ?>
                      </div>

                    </div>
                    <div class="tab-pane" id="settings">
                      <form action="php/update.php" enctype="multipart/form-data" method="post">
                        <input type="text" name="user_id" value="<?php echo($user)?>" hidden>
                        <div class="form-group row">
                          <label for="avatar" class="col-sm-2 col-form-label">Upload Avatar</label>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="avatar" accept="image/jpg, image/jpeg, image/png" class="custom-file-input" id="avatar">
                                <label class="custom-file-label" for="avatar">Choose file</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                          <div class="col-sm-4">
                            <input type="text" name="fname" class="form-control" id="firstname" value="<?php echo (ucfirst($first_name)) ?>" placeholder="First Name" />
                          </div>

                          <label for="lname" class="col-sm-1 col-form-label">Last Name</label>
                          <div class="col-sm-4">
                            <input type="text" name="lname" class="form-control" id="lastname" value="<?php echo (ucfirst($last_name)) ?>" placeholder="Last Name" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo (ucfirst($email)) ?>" placeholder="Email Address" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="password" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="cpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-4">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" /> I agree to the
                                <a href="../terms-and-conditions.html">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button name="update-account" type="submit" class="btn btn-danger">
                              Save Changes
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- /.card-body -->
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

    <!-- Main Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block"><b>Version</b> 1.0.0</div>
      <strong>Copyright &copy; 2022-2023
        <a href="#">SANTISIMA</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->
  <?php
  if (isset($_SESSION['success'])) {
    echo ('
  <script>
  Swal.fire({
          icon: "success",
          title: "Success!",
          text: "' . $_SESSION['success'] . '",
          showConfirmButton: false,
          timer: 1500,
        });
</script>
  ');
    unset($_SESSION['success']);
  }
  ?>

  <?php
  if (isset($_SESSION['error'])) {
    echo ('
  <script>
  Swal.fire({
          icon: "error",
          title: "Error!",
          text: "' . $_SESSION['error'] . '",
          showConfirmButton: false,
          timer: 1500,
        });
</script>
  ');
    unset($_SESSION['error']);
  }
  ?>

  <!-- REQUIRED SCRIPTS -->

      <!-- Modal Edit transactions -->
      <div class="modal fade" id="pay-amount" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pay Pending Balance</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="php/payment2.php" method="post">
                <input type="text" name="user" value="<?php echo($user)?>" hidden/>
                    <input type="text" class="token" name="token" hidden/>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" class="form-control" name="amount" required/>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="pay-balance" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- Custome File Input -->
  <script src="../../wp-plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });

    let getId = function(id) {
      return document.getElementById(id);
    };

    $(document).on("click", ".btn-pay", function(){
      let token = $(this).data("id");
      $('.token').val(token);
      $("#pay-amount").modal("show");
    });

    $('#firstname').on('keyup', function(event) {
      var regex = /^[a-zA-Z ]+$/;
      var key = getId("firstname").value
      if (!regex.test(key)) {
        getId('firstname').style.borderColor = "red";
        getId('firstname').style.borderWidth = "2px";
      } else {
        getId('firstname').style.borderColor = "";
        getId('firstname').style.borderWidth = "";
      }
    });

    $('#lastname').on('keyup', function(event) {
      var regex = /^[a-zA-Z ]+$/;
      var key = getId("lastname").value
      if (!regex.test(key)) {
        getId('lastname').style.borderColor = "red";
        getId('lastname').style.borderWidth = "2px";
      } else {
        getId('lastname').style.borderColor = "";
        getId('lastname').style.borderWidth = "";
      }
    });

    $('#firstname').on('keypress', function(event) {
      var regex = /[a-zA-Z ]/gi
      var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
      if (!regex.test(key)) {
        return false;
      } else {}
    });

    $('#lastname').on('keypress', function(event) {
      var regex = /[a-zA-Z ]/gi
      var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
      if (!regex.test(key)) {
        return false;
      } else {}
    });

    $('#email').on('keyup', function (event){
			var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
				var key = this.value;
				if(!regex.test(key)){
					getId('email').style.borderColor = "red";
					getId('email').style.borderWidth = "2px";
				}
				else{
					getId('email').style.borderColor = "";
					getId('email').style.borderWidth = "";
				}
		});

    
    $('#email').on('keypress', function (event){
			var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
				var key = this.value;
				if(!regex.test(key)){
					getId('email').style.borderColor = "red";
					getId('email').style.borderWidth = "2px";
				}
				else{
					getId('email').style.borderColor = "";
					getId('email').style.borderWidth = "";
				}
		});
  </script>
</body>

</html>