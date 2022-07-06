<?php
session_start();
if (isset($_SESSION['attemp'])) {
  $login_record = $_SESSION['attemp'];
  if (isset($_SESSION['time'])) {
    $timer = time() - $_SESSION['time'];
    if ($timer > 80) {
      unset($_SESSION['time']);
      unset($_SESSION['attemp']);
      $button = '<button type="submit" name="user-account">Sign In</button>';
    } else {
      $button = '<center><span style="color: red;">Please wait for 30 seconds</span></center>';
    }
  }else{
    $button = '<button type="submit" name="user-account">Sign In</button>';
  }
} else {
  $button = '<button type="submit" name="user-account">Sign In</button>';
}


if (!empty($_SESSION['client'])) {
  header("Location: dashboard/");
} else {
  if (!empty($_SESSION['verify_account'])) {
    unset($_SESSION['verify_account']);
  }
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
  <link rel="shortcut icon" href="wp-resources/icon.png" type="image/x-icon">
  <title>Santisima | Sign In</title>
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

    .santisima-logo {
      margin-bottom: 20px;
      width: 100%;
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

    input[type="password"] {
      font-weight: bold;
    }

    @media screen and (max-width: 700px) {
      .login header {
        border-bottom: 1px solid #dfdcdc;
      }

      body {
        align-content: center;
      }

      .web-logo {
        text-align: center;
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
        <h2>Login your account</h2>
      </header>
      <form method="post" action="wp-php/login.php">
        <div class="form-group">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-envelope"></i>
              <label for="email">Email Address</label>
            </div>
            <input type="email" name="email" required />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-icon-label">
              <i class="fa fa-lock"></i>
              <label for="password">Password</label>
            </div>
            <input type="password" name="password" required />
          </div>
          <a class="a-link" href="reset.php">Forgot Password</a>
        </div>
        <div class="form-button">
          <?php echo ($button) ?>
        </div>
        <div class="link-group">
          <p>
            Don't have an account?
            <a href="register.php" class="a-link">Click Here!</a>
          </p>
        </div>
      </form>
    </section>
  </div>
  <?php
  if (isset($_SESSION['success'])) {
    echo ('
  <script>
  Swal.fire({
          icon: "success",
          title: "success!",
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


</body>

</html>