<?php
session_start();
if (!empty($_SESSION['admin'])) {
  header("Location: dashboard/");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../wp-plugins/sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
    <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon">
    <title>Santisima | Login</title>
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
        text-align: center;
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
        color: #000;
        margin-top: 5px;
        display: inline-block;
      }

      .a-link:hover {
        text-decoration: underline;
        color: #428cc9;
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
        <img class="santisima-logo" src="../wp-resources/logo.png" alt="Logo" />
      </div>
      <section class="login">
        <header>
          <h2>Admin Login</h2>
        </header>
        <form action="php/login.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <div class="input-icon-label">
                <i class="fa fa-user"></i>
                <label for="username">Username</label>
              </div>
              <input type="text" name="username" />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-icon-label">
                <i class="fa fa-lock"></i>
                <label for="password">Password</label>
              </div>
              <input type="password" name="password" />
            </div>
          </div>
          <div class="form-button">
            <button name="user-account" id="button-test">Login</button>
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
            timer: 1500,
          });
  </script>
    ');
      unset($_SESSION['error']);
    }
    ?>
  </body>
</html>
