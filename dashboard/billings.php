<?php
include_once('../wp-php/session.php');
$billing_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");
if ($billing_query->num_rows > 0) {
  $fetch_row = $billing_query->fetch_assoc();

  //address
  $address = $fetch_row['address'];
  //contact
  $contact = $fetch_row['contact'];
  //postal
  $postal = $fetch_row['postal'];
  //fname
  $fname = $fetch_row['fname'];
  //lname
  $lname = $fetch_row['lname'];
  //email_address
  $email_address = $fetch_row['email'];
} else {
  $fname = $first_name;
  $lname = $last_name;
  $email_address = $email;
  $contact = "";
  $address = "";
  $postal = "";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Billing</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon" />
  <script src="../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../wp-plugins/sweetalert2/sweetalert2.min.css" />
  <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }

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
            <div class="col-md-8">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h1 class="card-title">Personal Information</h1>
                </div>
                <form action="php/billing.php" method="post">
                  <input type="number" name="user" value="<?php echo ($user); ?>" hidden>
                  <div class="card-body">
                    <div class="row w-100 justify-content-center">
                      <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" name="first_name" value="<?php echo ($fname) ?>" class="form-control" pattern="[a-zA-Z ]*" required />
                      </div>
                      <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" value="<?php echo ($lname) ?>" type="text" name="last_name" class="form-control" pattern="[a-zA-Z ]*" required />
                      </div>
                    </div>

                    <div class="row w-100 justify-content-center">
                      <div class="form-group col-md-6">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" value="<?php echo ($email_address) ?>" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
                      </div>
                      <div class="form-group col-md-6">
                        <label for="contact">Contact Number</label>
                        <input id="contact" type="text" maxlength="11" name="contact" value="<?php echo ($contact) ?>" class="form-control" required />
                      </div>
                    </div>

                    <div class="row w-100 justify-content-center">
                      <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input id="address" type="text" name="address" value="<?php echo ($address) ?>" class="form-control" required />
                      </div>
                      <div class="form-group col-md-6">
                        <label for="postal_code">Postal Code</label>
                        <input id="postal_code" type="text" value="<?php echo ($postal) ?>" name="postal_code" class="form-control" maxlength="4" required />
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="billing-details" type="submit" class="btn btn-coded text-white float-right">
                      Submit <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
                </form>
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

  <?php
  if (isset($_SESSION['error'])) {
    echo ('
  <script>
  Swal.fire({
          icon: "error",
          title: "error!",
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

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
    var byId = function(id) {
      return document.getElementById(id);
    };

    $('#email').on('keyup', function(event) {
      var regex = /[a-zA-Z0-9]+@(gmail|yahoo|outlook)+\.(com)$/;
      var key = this.value;
      if (!regex.test(key)) {
        byId('email').style.borderColor = "red";
        byId('email').style.borderWidth = "2px";
      } else {
        byId('email').style.borderColor = "";
        byId('email').style.borderWidth = "";
      }
    });


    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      // true for mobile device
      console.log("mobile device");
      document.getElementById("contact").type = "number";

      $('#contact').on('keyup', function(event) {
        var regex_length = /^[0-9]{11}$/;
        var input = byId("contact").value

        if (!regex_length.test(input)) {
          byId('contact').style.borderColor = "red";
          byId('contact').style.borderWidth = "2px";
        } else {
          byId('contact').style.borderColor = "";
          byId('contact').style.borderWidth = "";
        }

      });

      $('#first_name').on('keyup', function(event) {
        var regex = /^[a-zA-Z ]+$/;
        var key = byId("first_name").value
        if (!regex.test(key)) {
          byId('first_name').style.borderColor = "red";
          byId('first_name').style.borderWidth = "2px";
        } else {
          byId('first_name').style.borderColor = "";
          byId('first_name').style.borderWidth = "";
        }
      });

      $('#last_name').on('keyup', function(event) {
        var regex = /^[a-zA-Z ]+$/;
        var key = byId("last_name").value
        if (!regex.test(key)) {
          byId('last_name').style.borderColor = "red";
          byId('last_name').style.borderWidth = "2px";
        } else {
          byId('last_name').style.borderColor = "";
          byId('last_name').style.borderWidth = "";
        }
      });

      $('#postal_code').on('keyup', function(event) {
        var regex_length = /^[0-9]{4}$/;
        var input = byId("postal_code").value

        if (!regex_length.test(input)) {
          byId('postal_code').style.borderColor = "red";
          byId('postal_code').style.borderWidth = "2px";
        } else {
          byId('postal_code').style.borderColor = "";
          byId('postal_code').style.borderWidth = "";
        }

      });

    } else {

      $('#first_name').on('keypress', function(event) {
        var regex = /[a-zA-Z ]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });

      $('#last_name').on('keypress', function(event) {
        var regex = /[a-zA-Z ]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });

      $('#contact').on('keypress', function(event) {
        var regex = /[0-9]/;
        var regex_length = /^(09)+[0-9]{9}$/;
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        var input = byId("contact").value
        if (!regex.test(key)) {
          byId('contact').style.borderColor = "red";
          byId('contact').style.borderWidth = "2px";
          return false;
        } else {
          byId('contact').style.borderColor = "";
          byId('contact').style.borderWidth = "";

          if (!regex_length.test(input)) {
            byId('contact').style.borderColor = "red";
            byId('contact').style.borderWidth = "2px";
          } else {
            byId('contact').style.borderColor = "";
            byId('contact').style.borderWidth = "";
          }

        }
      });

      $('#contact').on('keyup', function(event) {
        var regex_length = /^(09)+[0-9]{9}$/;
        var input = byId("contact").value

        if (!regex_length.test(input)) {
          byId('contact').style.borderColor = "red";
          byId('contact').style.borderWidth = "2px";
        } else {
          byId('contact').style.borderColor = "";
          byId('contact').style.borderWidth = "";
        }

      });

      $('#address').on('keypress', function(event) {
        var regex = /[0-9a-zA-Z ]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });

      $('#postal_code').on('keypress', function(event) {
        var regex = /[0-9]/gi
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
          return false;
        } else {}
      });
    }
  });
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
  </script>
</body>

</html>