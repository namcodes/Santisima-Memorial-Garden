<?php
session_start();
include_once('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail_host = "mail.santisima.online";
$username = "mail@santisima.online";
$password = "P@ssword123";
$title = "Santisima";

header("Location: ../");

function generate_code(
  int $length,
  string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
  if ($length < 1) {
    throw new \RangeException("Length must be a positive integer");
  }
  $pieces = [];
  $max = mb_strlen($keyspace, '8bit') - 1;
  for ($i = 0; $i < $length; ++$i) {
    $pieces[] = $keyspace[random_int(0, $max)];
  }
  return implode('', $pieces);
}

if (isset($_POST['verify-account'])) {
  $email_address = $conn->real_escape_string($_POST['email']);
  $otp_password = $conn->real_escape_string($_POST['otp_verification']);

  $user_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email_address}' LIMIT 1");
  if ($user_query->num_rows > 0) {
    $fetch_row = $user_query->fetch_assoc();
    if ($otp_password == $fetch_row['code']) {
      $update_query = $conn->query("UPDATE tbl_users SET status = 'Verified' WHERE email = '{$email_address}' AND code = '{$otp_password}'");
      if ($update_query) {
        $_SESSION['success'] = "Successfully Verified!";
        header("Location: ../login.php");
      } else {
        header("Location: ../verify.php");
      }
    } else {
      $_SESSION['error'] = "Invalid One Time Password (OTP)";
      header("Location: ../verify.php");
    }
  } else {
    header("Location: ../");
  }
}

if (isset($_POST['user-account'])) {
  $redirect = header("Location: ../verify.php");

  $email = $conn->real_escape_string($_POST['email']);


  $user_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");

  if ($user_query->num_rows > 0) {
    $user_row = $user_query->fetch_assoc();
    $verification_code = generate_code(16);
    $name = $user_row['fname'] . " " . $user_row['lname'];

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output, 1 for produciton , 2,3 for debuging in devlopment
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = $mail_host; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $username; // SMTP username
    $mail->Password = $password; // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;   // for tls                                 // TCP port to connect to
    $mail->Port = 465;

    $mail->setFrom($username, $title); // from who?
    $mail->addAddress($email, $name); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Verify your new Santisima account';
    $mail->Body = '
            <html>
            <body>
            <center>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">
                        <center style="
                    width: 100%;
                    table-layout: fixed;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    background-color: #fffbfb;
                  ">
                            <div style="
                      max-width: 600px;
                      margin-top: 0;
                      margin-bottom: 0;
                      margin-right: auto;
                      margin-left: auto;
                    ">
                                <table align="center" cellpadding="0" style="
                        border-spacing: 0;
                        color: #000;
                        margin: 0 auto;
                        width: 100%;
                      ">
                                    <tbody>
                                        <!-- whitespace -->
                                        <tr>
                                            <td height="40">
                                                <p style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              ">
                                                    &nbsp;
                                                </p>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" class="santisima" width="300px" style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 0;
                              padding-left: 0;
                              height: 143px;
                              vertical-align: middle;
                            " valign="middle">
                                                <span class="sg-image" data-imagelibrary="%7B%22width%22%3A%22160%22%2C%22height%22%3A34%2C%22alt_text%22%3A%22Verve%20Wine%22%2C%22alignment%22%3A%22%22%2C%22border%22%3A0%2C%22src%22%3A%22https%3A//marketing-image-production.s3.amazonaws.com/uploads/79d8f4f889362f0c7effb2c26e08814bb12f5eb31c053021ada3463c7b35de6fb261440fc89fa804edbd11242076a81c8f0a9daa443273da5cb09c1a4739499f.png%22%2C%22link%22%3A%22%23%22%2C%22classes%22%3A%7B%22sg-image%22%3A1%7D%7D"><a href="https://santisima.online" target="_blank"
                                ><img
                                  width="300px"
                                  src="https://i.ibb.co/JmK8tvj/logo.png"
                                  style="border-width: 0px" /></a
                            ></span>
                                            </td>
                                        </tr>
                                        <!-- Start of Email Body-->
                                        <tr>
                                            <td class="one-column" style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 0;
                              padding-left: 0;
                              background-color: #fffbfb;
                            ">
                                                <table style="border-spacing: 0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="inner contents center" style="padding-top: 15px; text-align: left">
                                                                <div style="
                                        background-color: #fffbfb;
                                        padding: 5px 10px;
                                      " class="container">
                                                                    <h2>Verify your new Santisima account</h2>
                                                                    <hr />
                                                                    <div class="description" style="font-size: 15px">
                                                                        <p>Hello <b>' . $name . ',</b></p>
                                                                        <p>
                                                                            To verify your email address, please use the following One Time Password (OTP).<br /><br />
                                                                            <b>' . $verification_code . '</b
                                          ><br /><br />
                                          Do not share this OTP with anyone. Santisima takes your account secuirity very seriously. Santisima Customer Service will never ask you to disclose or verify your Santisima password, OTP, Credit Card, or banking account number. If you receive a suspicious email with a link to update your account information, do not click on the link -- instead, report the email to Santisima Live Chat Support. <br>
                                          <br />
                                          <br />
                                          Santisima Team,<br>
                                          Thank You!
                                          <center>
                                            ***Please do not reply to this notice,
                                            as this message has been sent by an
                                            automated process***
                                          </center>
                                        </p>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- End of Email Body-->
                        <!-- whitespace -->
                        <tr>
                          <td height="40">
                            <p
                              style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              "
                            >
                              &nbsp;
                            </p>
    
                            <p>&nbsp;</p>
                          </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                          <td
                            style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 30px;
                              padding-left: 30px;
                              text-align: center;
                              margin-right: auto;
                              margin-left: auto;
                            "
                          >
                            <center>
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                Problems or questions? Call us at
                                <nobr
                                  ><a
                                    class="tel"
                                    href="tel:09556038102"
                                    style="color: #a1a8ad; text-decoration: none"
                                    target="_blank"
                                    ><span style="white-space: nowrap"
                                      >0955-603-8102</span
                                    ></a
                                  ></nobr
                                >
                              </p>
    
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                or email
                                <a
                                  href="mailto:memorialsantisima@gmail.com"
                                  style="color: #a1a8ad; text-decoration: underline"
                                  target="_blank"
                                  >memorialsantisima@gmail.com</a
                                >
                              </p>
    
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  padding-top: 10px;
                                  padding-bottom: 0px;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                Copyright © 2022 - 2023
                                <span style="white-space: nowrap">
                                  Santisima Memorial Garden ​</span
                                >,
                                <span style="white-space: nowrap"
                                  >Alright Reserved.
                                </span>
                              </p>
                            </center>
                          </td>
                        </tr>
                        <!-- whitespace -->
                        <tr>
                          <td height="40">
                            <p
                              style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              "
                            >
                              &nbsp;
                            </p>
                            <p>&nbsp;</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </center>
              </td>
            </tr>
          </table>
        </center>
              </body>
            </html>
            ';

    if ($mail->send()) {
      $update_query = $conn->query("UPDATE tbl_users SET code = '{$verification_code}' WHERE email = '{$email}'");
      if ($update_query) {
        $_SESSION['success'] = "Successfully re-sent";
        $redirect;
      } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
      }
    } else {
      $_SESSION['error'] = "Something went wrong, email not sent";
      $redirect;
    }
  } else {
    $_SESSION['error'] = "Something went wrong";
    $redirect;
  }
}

if (isset($_POST['verify_email'])) {
  $user_id = $conn->real_escape_string($_POST['code']);
  $new_email = $conn->real_escape_string($_POST['new_email']);

  $check_email = $conn->query("SELECT * FROM tbl_users WHERE email = '{$new_email}' LIMIT 1");
  if ($check_email->num_rows > 0) {
    $_SESSION['error'] = "Email is already exist";
  } else {
    $email_query = $conn->query("UPDATE tbl_users SET email = '{$new_email}' WHERE id = '{$user_id}'");
    if ($email_query > 0) {
      if (isset($_SESSION['verify_account'])) {
        unset($_SESSION['verify_account']);
        session_start();
        $_SESSION['verify_account'] = $new_email;
        $_SESSION['success'] = "Successfully Changed";
      }
    } else {
      $_SESSION['error'] = "Something went wrong";
    }
  }
}

if (isset($_POST['reset-account'])) {
  $redirect = header("Location: ../reset.php");
  $email = $conn->real_escape_string($_POST['email']);
  $user_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");

  if ($user_query->num_rows > 0) {
    $user_row = $user_query->fetch_assoc();
    $key = generate_code(500);
    $token = generate_code(300);
    $verification_code = generate_code(16);
    $name = $user_row['fname'] . " " . $user_row['lname'];

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output, 1 for produciton , 2,3 for debuging in devlopment
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = $mail_host; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $username; // SMTP username
    $mail->Password = $password; // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;   // for tls                                 // TCP port to connect to
    $mail->Port = 465;

    $mail->setFrom($username, $title); // from who?
    $mail->addAddress($email, $name); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Request New Password';
    $mail->Body = '
            <html>
            <body>
            <center>
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">
                        <center style="
                    width: 100%;
                    table-layout: fixed;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    background-color: #fffbfb;
                  ">
                            <div style="
                      max-width: 600px;
                      margin-top: 0;
                      margin-bottom: 0;
                      margin-right: auto;
                      margin-left: auto;
                    ">
                                <table align="center" cellpadding="0" style="
                        border-spacing: 0;
                        color: #000;
                        margin: 0 auto;
                        width: 100%;
                      ">
                                    <tbody>
                                        <!-- whitespace -->
                                        <tr>
                                            <td height="40">
                                                <p style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              ">
                                                    &nbsp;
                                                </p>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" class="santisima" width="300px" style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 0;
                              padding-left: 0;
                              height: 143px;
                              vertical-align: middle;
                            " valign="middle">
                                                <span class="sg-image" data-imagelibrary="%7B%22width%22%3A%22160%22%2C%22height%22%3A34%2C%22alt_text%22%3A%22Verve%20Wine%22%2C%22alignment%22%3A%22%22%2C%22border%22%3A0%2C%22src%22%3A%22https%3A//marketing-image-production.s3.amazonaws.com/uploads/79d8f4f889362f0c7effb2c26e08814bb12f5eb31c053021ada3463c7b35de6fb261440fc89fa804edbd11242076a81c8f0a9daa443273da5cb09c1a4739499f.png%22%2C%22link%22%3A%22%23%22%2C%22classes%22%3A%7B%22sg-image%22%3A1%7D%7D"><a href="https://santisima.online" target="_blank"
                                ><img
                                  width="300px"
                                  src="https://i.ibb.co/JmK8tvj/logo.png"
                                  style="border-width: 0px" /></a
                            ></span>
                                            </td>
                                        </tr>
                                        <!-- Start of Email Body-->
                                        <tr>
                                            <td class="one-column" style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 0;
                              padding-left: 0;
                              background-color: #fffbfb;
                            ">
                                                <table style="border-spacing: 0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="inner contents center" style="padding-top: 15px; text-align: left">
                                                                <div style="
                                        background-color: #fffbfb;
                                        padding: 5px 10px;
                                      " class="container">
                                                                    <h2>Request Change of Account Password</h2>
                                                                    <hr />
                                                                    <div class="description" style="font-size: 15px">
                                                                        <p>Dear <b>' . $name . ',</b></p>
                                                                        <p>
                                                                            You are receiving this notice as you have selected the option "Forgot your Passsword" on the santisima web site for your santisima account. <br /><br /><b><a
                                              href="http://localhost/new_password.php?key=' . $key . '&email=' . $email . '&auth_code=' . $verification_code . '&auth_token=' . $token . '"
                                              >Click here to reset</a
                                            ></b
                                          ><br /><br />
                                          The link above contains a security key
                                          which is requred to reset your password.
                                          <br /><br />
                                          The security key and the reset password
                                          feature will be expired once the password
                                          has been successfully updated.
                                          <br />
                                          <br />
                                          Kind Regards, <br />
                                          Santisima Team<br />
                                          <center>
                                            ***Please do not reply to this notice,
                                            as this message has been sent by an
                                            automated process***
                                          </center>
                                        </p>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- End of Email Body-->
                        <!-- whitespace -->
                        <tr>
                          <td height="40">
                            <p
                              style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              "
                            >
                              &nbsp;
                            </p>
    
                            <p>&nbsp;</p>
                          </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                          <td
                            style="
                              padding-top: 0;
                              padding-bottom: 0;
                              padding-right: 30px;
                              padding-left: 30px;
                              text-align: center;
                              margin-right: auto;
                              margin-left: auto;
                            "
                          >
                            <center>
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                Problems or questions? Call us at
                                <nobr
                              ><a
                                class="tel"
                                href="tel:09556038102"
                                style="color: #a1a8ad; text-decoration: none"
                                target="_blank"
                                ><span style="white-space: nowrap"
                                  >0955-603-8102</span
                                ></a
                              ></nobr
                            >
                              </p>
    
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                or email
                                <a
                                  href="mailto:memorialsantisima@gmail.com"
                                  style="color: #a1a8ad; text-decoration: underline"
                                  target="_blank"
                                  >memorialsantisima@gmail.com</a
                                >
                              </p>
    
                              <p
                                style="
                                  margin: 0;
                                  text-align: center;
                                  margin-right: auto;
                                  margin-left: auto;
                                  padding-top: 10px;
                                  padding-bottom: 0px;
                                  font-size: 15px;
                                  color: #a1a8ad;
                                  line-height: 23px;
                                "
                              >
                                Copyright © 2022 - 2023
                                <span style="white-space: nowrap">
                                  Santisima Memorial Garden ​</span
                                >,
                                <span style="white-space: nowrap"
                                  >Alright Reserved.
                                </span>
                              </p>
                            </center>
                          </td>
                        </tr>
                        <!-- whitespace -->
                        <tr>
                          <td height="40">
                            <p
                              style="
                                line-height: 40px;
                                padding: 0 0 0 0;
                                margin: 0 0 0 0;
                              "
                            >
                              &nbsp;
                            </p>
                            <p>&nbsp;</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </center>
              </td>
            </tr>
          </table>
        </center>
              </body>
            </html>
            ';

    if ($mail->send()) {
      $update_query = $conn->query("UPDATE tbl_users SET code = '{$verification_code}' WHERE email = '{$email}'");
      if ($update_query) {
        $_SESSION['success'] = "Successfully Sent";
        $redirect;
      } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
      }
    } else {
      $_SESSION['error'] = "Something went wrong, email not sent";
      $redirect;
    }
  } else {
    $_SESSION['error'] = "Invalid email address";
    $redirect;
  }
}

if (isset($_POST['new-password'])) {

  $auth_code = $conn->real_escape_string(htmlspecialchars($_POST['code']));
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['password']);
  $cpassword = $conn->real_escape_string($_POST['cpassword']);

  $key = generate_code(500);
  $token = generate_code(300);
  $new_code = generate_code(16);

  $redirect = header('Location: ../new_password.php?key=' . $key . '&email=' . $email . '&auth_code=' . $auth_code . '&auth_token=' . $token . '');

  if ($password == $cpassword) {
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $update_user = $conn->query("UPDATE tbl_users SET code = '{$new_code}', password = '{$hash_password}' WHERE email = '{$email}'");
    if ($update_user > 0) {
      $_SESSION['success'] = "Successfully Updated";
      header("Location: ../login.php");
    } else {
      $_SESSION['error'] = "Something went wrong";
      $redirect;
    }
  } else {
    $_SESSION['error'] = "Password not matched";
    $redirect;
  }
}
