<?php
session_start();
if (isset($_SESSION['client'])) {
  header("Location: dashboard/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="wp-plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="wp-plugins/sweetalert2/sweetalert2.min.css" />
  <link rel="stylesheet" href="wp-plugins/fontawesome-free/css/all.min.css" />
  <link rel="shortcut icon" href="wp-resources/icon.png" type="image/x-icon" />
  <title>Santisima | Sign Up</title>
  <style>
    * {
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #efefef;
      display: grid;
      place-items: center;
      min-height: 100vh;
    }

    .login {
      width: 100%;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 10px;
      background-color: #fff;
    }

    .web-logo {
      text-align: center;
    }

    .santisima-logo {
      margin-bottom: 20px;
    }

    .login header {
      padding: 15px 0;
      border-bottom: 1px solid #ebeaea;
      font-size: 20px;
    }

    .login header h2 {
      font-weight: 500;
    }

    .login form {
      padding: 10px 5px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .terms-group {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 10px;
      font-size: 16px;
    }

    .terms-group a {
      text-decoration: none;
      color: #007bff;
    }

    .terms-group a:hover {
      text-decoration: underline;
    }


    .input-group {
      width: 100%;
    }

    .input-group input {
      width: 100%;
      padding: 5px;
      font-size: 18px;
      border: 2px solid #c1c1c1;
      outline: none;
      border-radius: 5px;
    }

    .input-group input:focus {
      border: 2px solid #d73e3e;
    }

    .input-group .input-icon-label {
      margin-bottom: 5px;
    }

    .a-link {
      text-decoration: none;
      color: #d73e3e;
      margin-top: 5px;
      display: inline-block;
    }

    .a-link:hover {
      text-decoration: underline;
    }

    .form-button {
      margin-bottom: 10px;
    }

    .form-button button {
      width: 100%;
      padding: 10px 0;
      border-radius: 5px;
      border: none;
      font-size: 16px;
      background-color: #d73e3e;
      color: #fff;
      cursor: pointer;
    }

    .form-button button:hover {
      background-color: #e04d4d;
    }

    .link-group {
      text-align: center;
    }

    .d-flex {
      display: flex !important;
      gap: 10px;
    }

    input[type="password"] {
      font-weight: bold;
    }

    @media screen and (max-width: 700px) {
      .d-flex {
        flex-direction: column;
      }

      .login header {
        border-bottom: 1px solid #dfdcdc;
      }

      body {
        align-content: center;
      }

      .santisima-logo {
        width: 80%;
      }

      .login {
        box-shadow: none;
        background-color: transparent;
      }

      .form-button button {
        height: 40px;
      }

      .input-group input {
        height: 40px;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="web-logo">
      <img class="santisima-logo" src="wp-resources/logo.png" alt="Logo" />
    </div>
    <section class="login">
      <header>
        <h2>Create an account</h2>
      </header>
      <form method="post" action="wp-php/register.php">
        <div class="form-group d-flex">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-user"></i>
              <label for="first_name">First Name</label>
            </div>
            <input id="first_name" type="text" name="first_name" required />
          </div>
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-user"></i>
              <label for="last_name">Last Name</label>
            </div>
            <input id="last_name" type="text" name="last_name" required />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-envelope"></i>
              <label for="email">Email Address</label>
            </div>
            <input id="email" type="email" name="email" required />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-lock"></i>
              <label for="password">Password</label>
            </div>
            <input id="password" type="password" minlength="8" name="password" required />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-lock"></i>
              <label for="confirm_password">Confirm Password</label>
            </div>
            <input id="cpassword" type="password" minlength="8" name="confirm_password" required />
          </div>
        </div>
        <div class="terms-group">
          <input type="checkbox" required /> I agree to the
          <a href="terms-and-conditions.html">terms and conditions</a>
        </div>
        <div class="form-button">
          <button type="submit" name="user-account">Sign Up</button>
        </div>
        <div class="link-group">
          <p>
            Already have an account?
            <a href="login.php" class="a-link">Click Here!</a>
          </p>
        </div>
      </form>
    </section>
  </div>
  <?php
  if (isset($_SESSION['error'])) {
    echo ('
  <script>
  Swal.fire({
          icon: "error",
          title: "error!",
          text: "' . $_SESSION['error'] . '",
          showConfirmButton: false,
          timer: 2000,
        });
</script>
  ');
    unset($_SESSION['error']);
  }
  ?>

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      const byId = function(id) {
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
    }
    });
  </script>
</body>

</html>