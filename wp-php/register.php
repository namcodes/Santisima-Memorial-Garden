<?php
session_start();
include_once('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$fname = $conn->real_escape_string($_POST['first_name']);
$lname = $conn->real_escape_string($_POST['last_name']);
$email = $conn->real_escape_string($_POST['email']);
$pass = $conn->real_escape_string($_POST['password']);
$cpass = $conn->real_escape_string($_POST['confirm_password']);

$redirect = header("Location: ../register.php");

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

if (isset($_POST['user-account'])) {
  $regex = "/^([a-zA-Z0-9\.]+@+[gmail|yahoo|outlook]+(\.)+com)$/";

  if (preg_match($regex, $email)) {
    $user_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");
    if ($user_query->num_rows > 0) {
      $_SESSION['error'] = "Your email address is already taken";
      $redirect;
    } else {

      $uppercase = preg_match('@[A-Z]@', $pass);
      $lowercase = preg_match('@[a-z]@', $pass);
      $number    = preg_match('@[0-9]@', $pass);
      $specialChars = preg_match('@[!@#$%^&*]@', $pass);

      if (strlen($pass) < 8) {
        $_SESSION['error'] = "Your Password Must Contain At Least 8 Characters!";
        $redirect;
      } elseif ($specialChars) {
        $_SESSION['error'] = "Your Password Must Contain At Least 1 Special Characters!";
        $redirect;
      } elseif ($uppercase) {
        $_SESSION['error'] = "Your Password Must Contain At Least 1 Capital Letter!";
        $redirect;
      } elseif ($lowercase) {
        $_SESSION['error'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        $redirect;
      } elseif ($number) {
        $_SESSION['error'] = "Your Password Must Contain At Least 1 Number!";
        $redirect;
      } else {

        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $verification_code = generate_code(16);

        $title = "Santisima";
        $username = "_mainaccount@fnhs-evoting.com";
        $password = "09071925550ndM@";
        $name = $fname . " " . $lname;

        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output, 1 for produciton , 2,3 for debuging in devlopment
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'mail.santisima.online'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = $username; // SMTP username
        $mail->Password = $password; // SMTP password
        // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 587;   // for tls                                 // TCP port to connect to
        $mail->Port = 465;

        //Recipients
        $mail->setFrom($username, $title); // from who?
        $mail->addAddress($email, $name); // Add a recipient
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Content
        // this give you the exact link of you site in the right page
        // if you are in actual web server, instead of http://" . $_SERVER['HTTP_HOST'] write your link
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
                                          Do not share this OTP with anyone. Santisima takes your account secuirity very seriously. Santisima Customer Service will never ask you to disclose or verify your Santisima password, OTP, Credit Card, or banking account number. If you receive a suspicious email with a link to update your account information, do not click on the link -- instead, report the email to Santisima Live Chat Support. 
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
          $insert_query = $conn->query("INSERT INTO tbl_users (avatar, fname, lname, email, password, code, status) VALUE ('default_avatar.jpeg', '{$fname}', '{$lname}', '{$email}', '{$hash}', '{$verification_code}', 'Not-Verified')");
          if ($insert_query) {
            $_SESSION['verify_account'] = $email;
            header("Location: ../verify.php");
          } else {
            $_SESSION['error'] = "Something went wrong your query";
            $redirect;
          }
        } else {
          $_SESSION['error'] = "Something went wrong";
          $redirect;
        }
      }
    }
  } else {
    $_SESSION['error'] = "Your email is not valid.";
    $redirect;
  }
} else {
  header("Location: ../");
}
