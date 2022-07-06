<?php
session_start();
include_once('wp-php/conn.php');
if (!empty($_SESSION['verify_account'])) {
  $email_address = $_SESSION['verify_account'];
  $checker = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email_address}' LIMIT 1");
  if ($checker->num_rows > 0) {
    $fetch_row = $checker->fetch_assoc();
    if ($fetch_row['status'] != 'Verified') {
      $email = $email_address;
      $code = $fetch_row['id'];
    } else {
      unset($_SESSION['verify_account']);
      $_SESSION['success'] = "Successfully Verified!";
      header("Location: login.php");
    }
  } else {
    header("Location: register.php");
  }
} else {
  header("Location: /");
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
  <title>Authentication required</title>
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

    .verify {
      background-color: #fff;
      padding: 10px;
      border-radius: 5px;
      width: 450px;
    }

    .verify header {
      padding: 10px 5px;
      border-bottom: 1px solid #e9e6e6;
    }

    .verify header h2 {
      font-weight: 400;
    }

    .verify form {
      padding: 10px 0;
    }

    .verify form .description {
      margin-bottom: 10px;
    }

    .verify form .description p {
      font-size: 16px;
    }

    .verify form .description p .change-link {
      text-decoration: none;
      color: #d73e3e;
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
      text-align: center;
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

    .link-resend {
      text-align: center;
    }

    .link-resend button {
      text-decoration: none;
      font-size: 15px;
      font-weight: 600;
      color: #d73e3e;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .link-resend button:hover {
      color: #e04d4d;
    }

    @media screen and (max-width: 700px) {
      .verify header {
        border-bottom: 1px solid #dfdcdc;
      }

      body {
        align-content: center;
      }

      .verify {
        background-color: transparent;
        width: 100%;
      }

      .web-logo img {
        width: 80%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="web-logo">
      <img src="wp-resources/logo.png" alt="Santisima Logo" />
    </div>
    <section class="verify">
      <header>
        <h2>Verify your email address</h2>
      </header>
      <form action="wp-php/verify.php" method="post">
        <div class="description">
          <p>
            To verify your email address, We've sent a One Time Password
            (OTP) to <?php echo ($email); ?>
            <a href="#change_email" id="change" class="change-link">(Change)</a>
          </p>
        </div>
        <div class="form-group">
          <input type="email" name="email" value="<?php echo ($email); ?>" hidden />
          <div class="input-group">
            <label for="otp_verification">Enter OTP</label>
            <input type="text" name="otp_verification" required />
          </div>
        </div>
        <div class="button-group">
          <button type="submit" id="user-account" name="verify-account">Verify</button>
        </div>
      </form>
      <form action="wp-php/verify.php" method="post">
        <input type="email" name="email" value="<?php echo ($email); ?>" hidden />
        <div class="link-resend">
          <button type="submit" name="user-account">Resend OTP!</button>
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
  <script src="wp-plugins/jquery/jquery.min.js"></script>
  <script>
    const btn_submit = document.getElementById('user-account');
    const btn_change = document.getElementById('change');

    function isValidEmail(address) {
      if (address != '' && address.search) {
        if (address.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
          return true;
        else return false;
      }
      // allow empty strings to return true - screen these with either a 'required' test or a 'length' test
      return true;
    }


    btn_change.onclick = () => {
      let email = prompt('Email address');
      if (!email == "") {
        if (!isValidEmail(email)) {
          alert("Please enter a valid email address, Try again.");
          return false;
        } else {
          location.href = "verify.php";
          $.ajax({
            url: "wp-php/verify.php",
            method: "POST",
            data: {
              verify_email: "verify",
              code: "<?php echo ($code) ?>",
              new_email: email
            },
          })
        }
      }
    }

    btn_submit.onclick = () => {
      btn_submit.disabled();
    }
  </script>
</body>

</html>