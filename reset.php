<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <script src="wp-plugins/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="wp-plugins/sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="wp-plugins/fontawesome-free/css/all.min.css" />
    <link
      rel="shortcut icon"
      href="wp-resources/icon.png"
      type="image/x-icon"
    />
    <title>Santisima | Reset Password</title>
    <style>
      * {
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        background-color: #efefef;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .web-logo {
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
      }

      .reset {
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
        width: 450px;
      }

      .reset header {
        padding: 10px 0;
        border-bottom: 1px solid #e7e7e7;
      }

      .reset form {
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

      .button-group {
        margin-bottom: 10px;
      }

      .button-group button {
        width: 100%;
        padding: 10px 0;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        background-color: #d73e3e;
        color: #fff;
        cursor: pointer;
      }

      .button-group button:hover {
        background-color: #e04d4d;
      }

      .description {
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="web-logo">
        <img src="wp-resources/logo.png" alt="Santisima Logo" />
      </div>
      <section class="reset">
        <header>
          <h2>Reset Password</h2>
        </header>
        <form action="wp-php/verify.php" method="post">
          <div class="description">
            <p>
              Enter your user account's verified email address and we will send
              you a One Time Password (OTP).
            </p>
          </div>
          <div class="form-group">
            <div class="input-group">
              <label for="email"
                ><i class="fa fa-envelope"></i> Email Address</label
              >
              <input type="email" name="email" class="email" required />
            </div>
          </div>
          <div class="button-group">
            <button name="reset-account" type="submit">Reset Password</button>
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
