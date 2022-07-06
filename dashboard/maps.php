<?php
/*
Apartment Niche
  Available Front View Level {#} - #
  Available Back View Level {#} - #
=====================================
Lawn Lot
  Available Lawn Lot Phase 1 - #
  Available Lawn Lot Phase 2 - #
=====================================
Single Distinctive 
  Available Single Distinctive Phase 1 - #
  Available Single Distinctive Phase 2 - #
*/
include_once('../wp-php/session.php');

function generate_code(
  int $length,
  string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcedfghijkmnlopqrstuvwxyz'
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

if ($_GET['auth_code']) {
  $package_code = $_GET['auth_code'];
} else {
  header("Location: packages.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Maps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../wp-plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  <link rel="shortcut icon" href="../wp-resources/icon.png" type="image/x-icon">
  <style>
    .btn-coded {
      background-color: #d73e3e !important;
    }

    .shapes:hover {
      fill: #e77575;
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
              <?php
              switch ($_GET['auth_token']) {
                  //Lawn Lot Phase 2 
                case 'lphase2map': {
              ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Lawn Lot - Phase 2</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <div class="d-flex flex-wrap" style="gap: 10px">
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 672 780">
                              <g id="lawnlot" transform="translate(-245 -12)">
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 723)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #15 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280) . '&package_code='); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(785 723)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #14 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(740 723)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #13 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(695 723)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #12 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(605 723)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(515 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(470 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(425 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(380 723)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #11 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(335 723)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(290 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(245 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(515 644)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #10 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(470 644)" fill="#e15454" />
                                </a>


                                <rect data-name="Not-Available" width="42" height="69" transform="translate(425 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(380 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(335 644)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #09 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(650 565)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(515 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(470 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(425 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(380 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 486)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #08 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(830 486)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 486)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #07 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(515 486)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(470 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(515 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(470 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 328)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #06 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(695 328)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(515 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(560 249)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #05 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(875 170)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 170)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #04 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(650 170)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(605 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(830 91)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #03 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(785 91)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #02 -->
                                <a href="payments.php?<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(740 91)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(650 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(875 12)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #01 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(830 12)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(785 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(740 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(695 12)" fill="#828282" />
                              </g>
                            </svg>

                          </div>
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 672 780">
                              <g id="lawnlot" transform="translate(-10 -12)">

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 723)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #33 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=33&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(550 723)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 723)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 644)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 565)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #32 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=32&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(865 565)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 2 - #31 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=31&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(820 565)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 565)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #30 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=30&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(460 565)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 565)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 565)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #29 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=29&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(865 486)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 486)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #28 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=28&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(775 486)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #27 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=27&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(730 486)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #26 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=26&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(685 486)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #25 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=25&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(640 486)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 486)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #24 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(235 486)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 486)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 2 - #23 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(145 486)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 2 - #22 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(100 486)" fill="#e15454" />
                                </a>
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 486)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 407)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 328)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #21 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(550 328)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 328)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 328)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #20 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(10 328)" fill="#e15454" />
                                </a>
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 249)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 170)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #19 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(820 170)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 170)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 170)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #18 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(10 170)" fill="#e15454" />
                                </a>
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(865 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 91)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(10 91)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #17 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(865 12)" fill="#e15454" />
                                </a>

                                <rect data-name="Not-Available" width="42" height="69" transform="translate(820 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(775 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(730 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(685 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(640 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(595 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(550 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(505 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(460 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(415 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(370 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(325 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(280 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(235 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(190 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(145 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(100 12)" fill="#828282" />
                                <rect data-name="Not-Available" width="42" height="69" transform="translate(55 12)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 2 - #16 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(120) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                                  <rect class="shapes" data-name="Available" width="42" height="69" transform="translate(10 12)" fill="#e15454" />
                                </a>

                              </g>
                            </svg>

                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }


                  //Lawn Lot Phase 1
                case 'lphase1map': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Lawn Lot - Phase 1</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <div class="d-flex flex-wrap">
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 672 780">
                              <g id="Lawn-Lot-Phase1" data-name="Lawn Lot - Phase 1" transform="translate(-50 -63)">
                                <rect id="Not-Available" width="42" height="69" transform="translate(668 63)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(623 63)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(578 63)" fill="#828282" />
                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(533 63)" fill="#828282" />
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(443 63)" fill="#828282" />
                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(398 63)" fill="#828282" />
                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(488 63)" fill="#828282" />
                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(668 142)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(668 221)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(668 300)" fill="#828282" />
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(668 379)" fill="#828282" />
                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(668 458)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(623 142)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(623 221)" fill="#828282" />
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(623 300)" fill="#828282" />
                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(623 379)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(623 458)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(578 142)" fill="#828282" />
                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(578 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #01 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(578 300)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(578 379)" fill="#828282" />
                                <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(578 458)" fill="#e15454" />
                                <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(353 458)" fill="#828282" />
                                <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(533 142)" fill="#828282" />
                                <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(533 221)" fill="#828282" />
                                <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(533 300)" fill="#828282" />
                                <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(533 379)" fill="#828282" />
                                <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(353 379)" fill="#828282" />
                                <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(533 458)" fill="#828282" />
                                <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(308 458)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #02 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(443 142)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(443 221)" fill="#828282" />
                                <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(443 300)" fill="#828282" />
                                <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(443 379)" fill="#828282" />
                                <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(263 379)" fill="#828282" />
                                <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(308 300)" fill="#828282" />
                                <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(308 221)" fill="#828282" />
                                <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(308 142)" fill="#828282" />
                                <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(443 458)" fill="#828282" />
                                <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(218 458)" fill="#828282" />
                                <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(398 142)" fill="#828282" />
                                <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(398 221)" fill="#828282" />
                                <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(398 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #03 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(398 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(218 379)" fill="#828282" />
                                <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(263 300)" fill="#828282" />
                                <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(263 221)" fill="#828282" />
                                <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(173 379)" fill="#828282" />
                                <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(218 300)" fill="#828282" />
                                <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(128 379)" fill="#828282" />
                                <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(398 458)" fill="#828282" />
                                <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(128 458)" fill="#828282" />
                                <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(173 458)" fill="#828282" />
                                <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(488 142)" fill="#828282" />
                                <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(488 221)" fill="#828282" />
                                <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(488 300)" fill="#828282" />
                                <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(488 379)" fill="#828282" />
                                <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(308 379)" fill="#828282" />
                                <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(353 300)" fill="#828282" />
                                <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(353 221)" fill="#828282" />
                                <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(353 142)" fill="#828282" />
                                <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(488 458)" fill="#828282" />
                                <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(263 458)" fill="#828282" />
                                <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(710 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(638 537) rotate(90)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #04 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(566 537) rotate(90)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(494 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(422 537) rotate(90)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #05 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(350 537) rotate(90)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(278 537) rotate(90)" fill="#828282" />
                              </g>
                            </svg>

                          </div>
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 672 780">
                              <g id="Lawn-Lot-Phase-1" data-name="Lawn Lot 1 - Phase 1" transform="translate(-817 -63)">
                                <rect id="Not-Available" width="42" height="69" transform="translate(1714 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1642 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1570 537) rotate(90)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #06 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(1498 537) rotate(90)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1426 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1282 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(994 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1066 537) rotate(90)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #07 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1138 537) rotate(90)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1354 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1210 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(922 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1087 63)" fill="#828282" />
                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1402 63)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1042 63)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1357 63)" fill="#828282" />
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(997 63)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #08 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1627 63)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1312 63)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(952 63)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1582 63)" fill="#828282" />
                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1267 63)" fill="#828282" />
                                <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(862 63)" fill="#828282" />
                                <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1492 63)" fill="#828282" />
                                <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1177 63)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #09 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(817 63)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1447 63)" fill="#828282" />
                                <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1132 63)" fill="#828282" />
                                <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(907 63)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #10 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1537 63)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1222 63)" fill="#828282" />
                                <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1087 142)" fill="#828282" />
                                <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1402 142)" fill="#828282" />
                                <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(1087 221)" fill="#828282" />
                                <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1402 221)" fill="#828282" />
                                <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(1087 300)" fill="#828282" />
                                <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(1402 300)" fill="#828282" />
                                <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1087 379)" fill="#828282" />
                                <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(1402 379)" fill="#828282" />
                                <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(1087 458)" fill="#828282" />
                                <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(1402 458)" fill="#828282" />
                                <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(1042 142)" fill="#828282" />
                                <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(1357 142)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #11 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1042 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(1357 221)" fill="#828282" />
                                <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(1042 300)" fill="#828282" />
                                <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(1357 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #12-->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1042 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(1357 379)" fill="#828282" />
                                <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1042 458)" fill="#828282" />
                                <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(1357 458)" fill="#828282" />
                                <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(997 142)" fill="#828282" />
                                <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(1627 142)" fill="#828282" />
                                <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(1312 142)" fill="#828282" />
                                <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(997 221)" fill="#828282" />
                                <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1627 221)" fill="#828282" />
                                <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(1312 221)" fill="#828282" />
                                <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(997 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #13 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1627 300)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(1312 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #14 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(997 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(1627 379)" fill="#828282" />
                                <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1312 379)" fill="#828282" />
                                <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(997 458)" fill="#828282" />
                                <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(1627 458)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #15 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1312 458)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(952 142)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #16 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1582 142)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(1267 142)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #17 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(952 221)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 1 - #18 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1582 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(1267 221)" fill="#828282" />
                                <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(952 300)" fill="#828282" />
                                <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(1582 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #19 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1267 300)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(952 379)" fill="#828282" />
                                <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(1582 379)" fill="#828282" />
                                <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(1267 379)" fill="#828282" />
                                <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(952 458)" fill="#828282" />
                                <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(1582 458)" fill="#828282" />
                                <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(1267 458)" fill="#828282" />
                                <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(862 142)" fill="#828282" />
                                <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(1492 142)" fill="#828282" />
                                <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(1177 142)" fill="#828282" />
                                <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(862 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #20 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1492 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1177 221)" fill="#828282" />
                                <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(862 300)" fill="#828282" />
                                <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(1492 300)" fill="#828282" />
                                <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1177 300)" fill="#828282" />
                                <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(862 379)" fill="#828282" />
                                <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(1492 379)" fill="#828282" />
                                <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(1177 379)" fill="#828282" />
                                <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(862 458)" fill="#828282" />
                                <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(1492 458)" fill="#828282" />
                                <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1177 458)" fill="#828282" />
                                <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(817 142)" fill="#828282" />
                                <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(1447 142)" fill="#828282" />
                                <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(1132 142)" fill="#828282" />
                                <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(817 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #21 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1447 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(1132 221)" fill="#828282" />
                                <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(817 300)" fill="#828282" />
                                <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(1447 300)" fill="#828282" />
                                <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(1132 300)" fill="#828282" />
                                <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(817 379)" fill="#828282" />
                                <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(1447 379)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #22 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1132 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(817 458)" fill="#828282" />
                                <rect id="Not-Available-93" data-name="Not-Available" width="42" height="69" transform="translate(1447 458)" fill="#828282" />
                                <rect id="Not-Available-94" data-name="Not-Available" width="42" height="69" transform="translate(1132 458)" fill="#828282" />
                                <rect id="Not-Available-95" data-name="Not-Available" width="42" height="69" transform="translate(907 142)" fill="#828282" />
                                <rect id="Not-Available-96" data-name="Not-Available" width="42" height="69" transform="translate(1537 142)" fill="#828282" />
                                <rect id="Not-Available-97" data-name="Not-Available" width="42" height="69" transform="translate(1222 142)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #23 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(907 221)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase 1 - #24 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" data-name="Available" width="42" height="69" transform="translate(1537 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-98" data-name="Not-Available" width="42" height="69" transform="translate(1222 221)" fill="#828282" />
                                <rect id="Not-Available-99" data-name="Not-Available" width="42" height="69" transform="translate(907 300)" fill="#828282" />
                                <rect id="Not-Available-100" data-name="Not-Available" width="42" height="69" transform="translate(1537 300)" fill="#828282" />
                                <rect id="Not-Available-101" data-name="Not-Available" width="42" height="69" transform="translate(1222 300)" fill="#828282" />
                                <rect id="Not-Available-102" data-name="Not-Available" width="42" height="69" transform="translate(907 379)" fill="#828282" />
                                <rect id="Not-Available-103" data-name="Not-Available" width="42" height="69" transform="translate(1537 379)" fill="#828282" />
                                <rect id="Not-Available-104" data-name="Not-Available" width="42" height="69" transform="translate(1222 379)" fill="#828282" />
                                <rect id="Not-Available-105" data-name="Not-Available" width="42" height="69" transform="translate(907 458)" fill="#828282" />
                                <rect id="Not-Available-106" data-name="Not-Available" width="42" height="69" transform="translate(1537 458)" fill="#828282" />
                                <rect id="Not-Available-107" data-name="Not-Available" width="42" height="69" transform="translate(1222 458)" fill="#828282" />
                              </g>
                            </svg>
                          </div>
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 672 780">
                              <g id="Lawn_Lot_1_" data-name="Lawn Lot 1 " transform="translate(-1784 -63)">
                                <rect id="Not-Available" width="42" height="69" transform="translate(1925 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1997 537) rotate(90)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1853 537) rotate(90)" fill="#828282" />
                                <!-- Available Lawn Lot Phase - 1 #25 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=25&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(2054 221)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase - 1 #26 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=26&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(2009 221)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1784 142)" fill="#828282" />
                                <!-- Available Lawn Lot Phase - 1 #27 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=27&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(2324 221)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase - 1 #28 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=28&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1964 221)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase - 1 #29 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=29&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(2279 221)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1919 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase - 1 #30 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=30&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(2234 221)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase - 1 #31 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=31&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1829 221)" fill="#e15454" />
                                </a>

                                <!-- Available Lawn Lot Phase - 1 #32 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=32&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(2144 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1784 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase - 1 #33 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=33&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(2099 221)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1874 221)" fill="#828282" />

                                <!-- Available Lawn Lot Phase - 1 #34 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=34&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(2189 221)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #35 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=35&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(2054 300)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(2054 379)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(2054 458)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(2009 300)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #36 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=36&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(2324 300)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(2009 379)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #36 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=36&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(2324 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(2009 458)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(2324 458)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1964 300)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #37 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=37&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(2279 300)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1964 379)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #38 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=38&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(2279 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1964 458)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(2279 458)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1919 300)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #39 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=39&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(2234 300)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1919 379)" fill="#828282" />
                                <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(2234 379)" fill="#828282" />
                                <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1919 458)" fill="#828282" />
                                <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(2234 458)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #40 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=40&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(1829 300)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #41 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=41&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(2144 300)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #42 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=42&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(1829 379)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #43 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=43&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(2144 379)" fill="#e15454" />
                                </a>

                                <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1829 458)" fill="#828282" />
                                <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(2144 458)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #44 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=44&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(1784 300)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #45 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=45&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(2099 300)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1784 379)" fill="#828282" />
                                <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(2099 379)" fill="#828282" />

                                <!-- Available Lawn Lot Phase 1 - #46 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=46&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(1784 458)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(2099 458)" fill="#828282" />
                                <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1874 300)" fill="#828282" />
                                <!-- Available Lawn Lot Phase 1 - #47 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=47&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(2189 300)" fill="#e15454" />
                                </a>
                                <!-- Available Lawn Lot Phase 1 - #48 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=48&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-25" data-name="Available" width="42" height="69" transform="translate(1874 379)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(2189 379)" fill="#828282" />
                                <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1874 458)" fill="#828282" />
                                <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(2189 458)" fill="#828282" />
                                <g id="Guard_House" data-name="Guard House">
                                  <g id="Rectangle_1420" data-name="Rectangle 1420" transform="translate(1856 63)" fill="#fff" stroke="#707070" stroke-width="1">
                                    <rect width="405" height="148" rx="5" stroke="none" />
                                    <rect x="0.5" y="0.5" width="404" height="147" rx="4.5" fill="none" />
                                  </g>
                                  <g id="Rectangle_1421" data-name="Rectangle 1421" transform="translate(2261 98)" fill="#fff" stroke="#707070" stroke-width="1">
                                    <rect width="28" height="79" stroke="none" />
                                    <rect x="0.5" y="0.5" width="27" height="78" fill="none" />
                                  </g>
                                  <text id="Guard_House-2" data-name="Guard House" transform="translate(1943 146)" font-size="40" font-family="SegoeUI, Segoe UI">
                                    <tspan x="0" y="0">Guard House</tspan>
                                  </text>
                                </g>
                              </g>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }


                  //Apartment Niche Front View
                case 'afrontview': {
                    $level = $_GET['level'];
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Apartment Niche - Front View</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <?php
                        switch ($level) {
                          case 1: {
                        ?>
                              <div class="row">
                                <h3>Apartment Niche (Right Side)- Level 1</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_1" data-name="Level 1" transform="translate(-219 -398.5)">
                                      <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(727.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(1207.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(868.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(1348.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(1009.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1489.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(774.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(1254.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(915.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1395.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(1056.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(1536.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(1442.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(1103.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(1583.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(1150.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(1630.5 398.5)" fill="#828282" />
                                      <text id="_1" data-name="1" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">1</tspan>
                                      </text>
                                      <!-- Available Front View Level 1 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(1301.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(962.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-25" data-name="Available" width="42" height="69" transform="translate(821.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-26" data-name="Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-27" data-name="Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-28" data-name="Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                              <div class="row">
                                <h3>Apartment Niche (Left Side)- Level 1</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_1" data-name="Level 1" transform="translate(-219 -398.5)">
                                      <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(717.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(1187.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(858.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(1328.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(999.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(764.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(905.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-93" data-name="Not-Available" width="42" height="69" transform="translate(1375.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-94" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-95" data-name="Not-Available" width="42" height="69" transform="translate(1046.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-96" data-name="Not-Available" width="42" height="69" transform="translate(1516.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-97" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-98" data-name="Not-Available" width="42" height="69" transform="translate(1281.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-99" data-name="Not-Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-100" data-name="Not-Available" width="42" height="69" transform="translate(952.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-101" data-name="Not-Available" width="42" height="69" transform="translate(1422.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-102" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-103" data-name="Not-Available" width="42" height="69" transform="translate(1093.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-104" data-name="Not-Available" width="42" height="69" transform="translate(1563.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-105" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-106" data-name="Not-Available" width="42" height="69" transform="translate(1140.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-107" data-name="Not-Available" width="42" height="69" transform="translate(1610.5 398.5)" fill="#828282" />
                                      <text id="_1" data-name="1" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">1</tspan>
                                      </text>
                                      <!-- Available Front View Level 1 - #07 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1469.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #08 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(1234.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #09 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(811.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 1 - #10 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }
                          case 2: {
                            ?>
                              <div class="row">
                                <h3>Apartment Niche (Right Side)- Level 2</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_2" data-name="Level 2" transform="translate(-219 -398.5)">
                                      <text id="_2" data-name="2" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">2</tspan>
                                      </text>
                                      <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(1207.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(868.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1009.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(1489.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(774.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1254.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(915.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(1395.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(1056.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(1536.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(821.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(1301.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(962.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(1583.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(1150.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(1630.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 2 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(1442.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(1348.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(1103.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(727.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #07 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #08 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#e15454" />
                                      </a>

                                    </g>
                                  </svg>
                                </div>
                              </div>
                              <div class="row">
                                <h3>Apartment Niche (Left Side)- Level 2</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_2" data-name="Level 2" transform="translate(-219 -398.5)">
                                      <text id="_2" data-name="2" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">2</tspan>
                                      </text>
                                      <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(717.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(1187.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(858.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(1328.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(999.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(1469.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(764.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(905.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(1375.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(1046.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1516.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(811.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1281.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(952.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(1422.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(1140.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1610.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 2 - #09 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(1234.5 398.5)" fill="#e15454" />
                                      </a>

                                      <!-- Available Front View Level 2 - #10 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1563.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 2 - #11 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(1093.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 2 - #12 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }
                          case 3: {
                            ?>
                              <div class="row">
                                <h3>Apartment Niche (Right Side)- Level 3</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_3" data-name="Level 3" transform="translate(-219 -398.5)">
                                      <text id="_3" data-name="3" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">3</tspan>
                                      </text>
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(727.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1207.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(868.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1348.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1009.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(774.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1254.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(915.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(1395.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(1056.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(1301.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(1442.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(1103.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1583.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(1150.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(1630.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 3 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(1536.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1489.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(962.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(821.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                              <div class="row">
                                <h3>Apartment Niche (Left Side)- Level 3</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_3" data-name="Level 3" transform="translate(-219 -398.5)">
                                      <text id="_3" data-name="3" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">3</tspan>
                                      </text>
                                      <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(717.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1187.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(858.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1328.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(999.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(1469.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(764.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(1234.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(905.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1046.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(1516.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(811.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(1281.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1422.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(1093.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1563.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(1140.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1610.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 3 - #07 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1375.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #08 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(952.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 3 - #09 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }
                          case 4: {
                            ?>
                              <div class="row">
                                <h3>Apartment Niche (Right Side)- Level 4</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_4" data-name="Level 4" transform="translate(-219 -398.5)">
                                      <text id="_4" data-name="4" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">4</tspan>
                                      </text>
                                      <rect id="Not-Available" width="42" height="69" transform="translate(727.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1207.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(868.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1009.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1489.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(774.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1254.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1395.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1056.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1536.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(821.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1301.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(962.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1442.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1583.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1150.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 4 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available" width="42" height="69" transform="translate(1630.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(1348.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(1103.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(915.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #07 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                              <div class="row">
                                <h3>Apartment Niche (Left Side)- Level 4</h3>
                                <div class="col-md-12">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_4" data-name="Level 4" transform="translate(-219 -398.5)">
                                      <text id="_4" data-name="4" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">4</tspan>
                                      </text>
                                      <rect id="Not-Available" width="42" height="69" transform="translate(247.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(717.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1187.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1328.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(529.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(999.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1469.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(294.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(764.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(1234.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(435.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(905.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1375.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1046.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1516.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(341.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(811.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1281.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(482.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(952.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1422.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(623.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1093.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(670.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1140.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1610.5 398.5)" fill="#828282" />
                                      <!-- Available Front View Level 4 - #08 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available" width="42" height="69" transform="translate(388.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #09 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(858.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Front View Level 4 - #10 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(1563.5 398.5)" fill="#e15454" />
                                      </a>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                        <?php
                              break;
                            }
                        }
                        ?>
                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }

                  //Apartment Niche Back View
                case 'abackview': {
                    $level = $_GET['level'];
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Apartment Niche - Back View</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <?php
                        switch ($level) {
                          case 1: {
                        ?>
                              <div class="row">
                                <div class="col-md-12">
                                  <h3>Apartment Niche - Level 1</h3>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_1" data-name="Level 1" transform="translate(-219 -398.5)">
                                      <!-- Available Back View Level 1 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect id="Available" width="42" height="69" transform="translate(812.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 1 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect id="Available-2" data-name="Available" width="42" height="69" transform="translate(1611.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 1 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect id="Available-3" data-name="Available" width="42" height="69" transform="translate(1328.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 1 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect id="Available-4" data-name="Available" width="42" height="69" transform="translate(248.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 1 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect id="Available-5" data-name="Available" width="42" height="69" transform="translate(576.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 1 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect id="Available-6" data-name="Available" width="42" height="69" transform="translate(1094.5 398.5)" fill="#e15454" />
                                      </a>
                                      <rect id="Not-Available" width="42" height="69" transform="translate(483.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1141.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1470.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1564.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(295.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(953.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(624.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1282.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(530.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(1188.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(859.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1517.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(342.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1000.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(671.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(906.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1235.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(389.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1047.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(718.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1376.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(436.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(765.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1423.5 398.5)" fill="#828282" />
                                      <text id="_1" data-name="1" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">1</tspan>
                                      </text>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }

                          case 2: {
                            ?>
                              <div class="row">
                                <div class="col-md-12">
                                  <h3>Apartment Niche - Level 2</h3>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_2" data-name="Level 2" transform="translate(-219 -398.5)">
                                      <!-- Available Back View Level 2 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available" width="42" height="69" transform="translate(1470.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 2 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(953.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 2 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(389.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 2 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1423.5 398.5)" fill="#e15454" />
                                      </a>

                                      <rect id="Not-Available" width="42" height="69" transform="translate(483.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1141.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(812.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1564.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(295.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(624.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1282.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(530.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1188.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(859.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1517.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1611.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(342.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1000.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(671.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1329.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(248.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(906.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(577.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1235.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1047.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(718.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1376.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(436.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1094.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(765.5 398.5)" fill="#828282" />
                                      <text id="_2" data-name="2" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">2</tspan>
                                      </text>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }

                          case 3: {
                            ?>
                              <div class="row">
                                <div class="col-md-12">
                                  <h3>Apartment Niche - Level 3</h3>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_3" data-name="Level 3" transform="translate(-219 -398.5)">
                                      <!-- Available Back View Level 3 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available" width="42" height="69" transform="translate(1189 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 3 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(672 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 3 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(907 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 3 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(437 398.5)" fill="#e15454" />
                                      </a>
                                      <rect id="Not-Available" width="42" height="69" transform="translate(484 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1142 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(813 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1471 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1565 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(296 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(954 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(625 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1283 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(531 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(860 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1518 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1612 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(343 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1001 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1330 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(249 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(578 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1236 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(390 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1048 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(719 398.5)" fill="#828282" />
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1377 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1095 398.5)" fill="#828282" />
                                      <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(766 398.5)" fill="#828282" />
                                      <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1424 398.5)" fill="#828282" />
                                      <text id="_3" data-name="3" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">3</tspan>
                                      </text>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            <?php
                              break;
                            }
                          case 4: {
                            ?>
                              <div class="row">
                                <div class="col-md-12">
                                  <h3>Apartment Niche - Level 4</h3>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1450 130">
                                    <g id="Level_4" data-name="Level 4" transform="translate(-219 -398.5)">
                                      <!-- Available Back View Level 4 - #01 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available" width="42" height="69" transform="translate(1141.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 4 - #02 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(812.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 4 - #03 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(295.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 4 - #04 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(530.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 4 - #05 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(1517.5 398.5)" fill="#e15454" />
                                      </a>
                                      <!-- Available Back View Level 4 - #06 -->
                                      <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                        <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(1000.5 398.5)" fill="#e15454" />
                                      </a>
                                      <rect id="Not-Available" width="42" height="69" transform="translate(483.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1470.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1564.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(953.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(624.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1282.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1188.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(859.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1611.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(342.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(671.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1329.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(248.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(906.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(577.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1235.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(389.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1047.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(718.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1376.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(436.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1094.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(765.5 398.5)" fill="#828282" />
                                      <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1423.5 398.5)" fill="#828282" />
                                      <text id="_4" data-name="4" transform="translate(219 444)" fill="#707070" font-size="25" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                        <tspan x="0" y="0">4</tspan>
                                      </text>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                        <?php
                              break;
                            }
                        }
                        ?>
                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Single Distinctive Phase 1
                case 'sphase1': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Single Distinctive Phase 1</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-center">
                          <div class="col-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 627 227">
                              <g id="Single_Distinctive_Phase_1_-_Part_1" data-name="Single Distinctive Phase 1" transform="translate(-2009 -1319)">
                                <!-- Available Single Distinctive Phase 1 - #01 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(2009 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #02 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(2054 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #03 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(2099 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #04 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(2144 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #05 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(2189 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #06 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(2234 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #07 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(2279 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #08 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(2324 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #09 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(2369 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #10 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(2414 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #11 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(2459 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #12 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(2504 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #13 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(2549 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #14 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(2594 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #15 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(2099 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #16 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(2234 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #17 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(2279 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #18 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(2324 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #19 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(2369 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #20 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(2459 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #21 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(2504 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #22 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(2549 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #23 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(2054 1477)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available" width="42" height="69" transform="translate(2594 1398)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(2279 1477)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(2594 1477)" fill="#828282" />
                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(2234 1477)" fill="#828282" />
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(2549 1477)" fill="#828282" />
                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(2189 1398)" fill="#828282" />
                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(2189 1477)" fill="#828282" />
                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(2504 1477)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(2144 1398)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(2144 1477)" fill="#828282" />
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(2459 1477)" fill="#828282" />
                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(2054 1398)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(2369 1477)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(2009 1398)" fill="#828282" />
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(2009 1477)" fill="#828282" />
                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(2324 1477)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(2414 1398)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(2099 1477)" fill="#828282" />
                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(2414 1477)" fill="#828282" />
                              </g>
                            </svg>
                          </div>
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 858 227">
                              <g id="Single_Distinctive_Phase_1_-_Part_2" data-name="Single Distinctive Phase 1" transform="translate(-2662 -1319)">
                                <!-- Available Single Distinctive Phase 1 - #24 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(2662 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #25 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=25&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(2707 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #26 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=26&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(2752 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #27 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=27&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(2797 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #28 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=28&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(2842 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #29 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=29&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(2887 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #30 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=30&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(2932 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #31 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=31&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(2977 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #32 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=32&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(3022 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #33 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=33&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(3067 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #34 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=34&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(3112 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #35 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=35&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(3157 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #36 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=36&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(3202 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #37 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=37&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(3247 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #38 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=38&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(3292 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #39 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=39&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(3337 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #40 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=40&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(3382 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #41 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=41&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(3427 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #42 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=42&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(3472 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #43 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=43&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(2707 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #44 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=44&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(2797 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #45 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=45&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(2887 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #46 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=46&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(3022 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #47 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=47&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(3067 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #48 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=48&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-25" data-name="Available" width="42" height="69" transform="translate(3202 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #49 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=49&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-26" data-name="Available" width="42" height="69" transform="translate(3247 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #50 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=50&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-27" data-name="Available" width="42" height="69" transform="translate(3292 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #51 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=51&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-28" data-name="Available" width="42" height="69" transform="translate(3382 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #52 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=52&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-29" data-name="Available" width="42" height="69" transform="translate(2662 1477)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #53 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=53&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-30" data-name="Available" width="42" height="69" transform="translate(2752 1477)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #54 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=54&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-31" data-name="Available" width="42" height="69" transform="translate(2977 1477)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #55 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=55&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-32" data-name="Available" width="42" height="69" transform="translate(3427 1477)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available" width="42" height="69" transform="translate(2932 1398)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(2932 1477)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(3247 1477)" fill="#828282" />
                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(2887 1477)" fill="#828282" />
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(3202 1477)" fill="#828282" />
                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(2842 1398)" fill="#828282" />
                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(3472 1398)" fill="#828282" />
                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(3157 1398)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(2842 1477)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(3472 1477)" fill="#828282" />
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(3157 1477)" fill="#828282" />
                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(3427 1398)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(3112 1398)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(2797 1477)" fill="#828282" />
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(3112 1477)" fill="#828282" />
                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(3337 1398)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(2707 1477)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(3337 1477)" fill="#828282" />
                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(3022 1477)" fill="#828282" />
                                <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(2662 1398)" fill="#828282" />
                                <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(2977 1398)" fill="#828282" />
                                <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(3292 1477)" fill="#828282" />
                                <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(2752 1398)" fill="#828282" />
                                <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(3382 1477)" fill="#828282" />
                                <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(3067 1477)" fill="#828282" />
                              </g>
                            </svg>

                          </div>
                          <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 852 227">
                              <g id="Single_Distinctive_Phase_1_-_Part_3" data-name="Single Distinctive Phase 1" transform="translate(-3540 -1319)">
                                <!-- Available Single Distinctive Phase 1 - #56 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=56&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available" width="42" height="69" transform="translate(3540 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #57 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=57&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(3585 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #58 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=58&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(3630 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #59 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=59&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(3675 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #60 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=60&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(3720 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #61 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=61&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(3765 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #62 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=62&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(3810 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #63 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=63&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(3855 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #64 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=64&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(3900 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #65 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=65&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(3945 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #66 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=66&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(3990 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #67 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=67&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(4035 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #68 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=68&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(4080 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #69 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=69&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(4125 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #70 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=70&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(4170 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #71 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=71&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(4215 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #72 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=72&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(4260 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #73 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=73&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(4305 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #74 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=74&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(4350 1319)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #75 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=75&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(3675 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #76 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=76&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(3810 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #77 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=77&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(3945 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #78 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=78&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(4125 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #79 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=79&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(4215 1398)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #80 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=80&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-25" data-name="Available" width="42" height="69" transform="translate(3585 1477)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #81 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=81&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-26" data-name="Available" width="42" height="69" transform="translate(3765 1477)" fill="#e15454" />
                                </a>
                                <!-- Available Single Distinctive Phase 1 - #82 -->
                                <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=82&' . generate_code(280)); ?>">
                                  <rect class="shapes" id="Available-27" data-name="Available" width="42" height="69" transform="translate(3810 1477)" fill="#e15454" />
                                </a>
                                <rect id="Not-Available" width="42" height="69" transform="translate(4125 1477)" fill="#828282" />
                                <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(3765 1398)" fill="#828282" />
                                <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(4080 1398)" fill="#828282" />
                                <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(4080 1477)" fill="#828282" />
                                <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(3720 1398)" fill="#828282" />
                                <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(4035 1398)" fill="#828282" />
                                <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(3720 1477)" fill="#828282" />
                                <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(4035 1477)" fill="#828282" />
                                <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(4305 1398)" fill="#828282" />
                                <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(3990 1398)" fill="#828282" />
                                <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(3675 1477)" fill="#828282" />
                                <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(4305 1477)" fill="#828282" />
                                <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(3990 1477)" fill="#828282" />
                                <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(3585 1398)" fill="#828282" />
                                <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(3900 1398)" fill="#828282" />
                                <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(4215 1477)" fill="#828282" />
                                <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(3900 1477)" fill="#828282" />
                                <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(3540 1398)" fill="#828282" />
                                <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(4170 1398)" fill="#828282" />
                                <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(3855 1398)" fill="#828282" />
                                <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(3540 1477)" fill="#828282" />
                                <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(4170 1477)" fill="#828282" />
                                <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(3855 1477)" fill="#828282" />
                                <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(3630 1398)" fill="#828282" />
                                <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(4260 1398)" fill="#828282" />
                                <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(3630 1477)" fill="#828282" />
                                <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(4260 1477)" fill="#828282" />
                                <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(3945 1477)" fill="#828282" />
                                <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(4350 1398)" fill="#828282" />
                                <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(4350 1477)" fill="#828282" />
                              </g>
                            </svg>

                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Single Distinctive Phase 2
                case 'sphase2': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Single Distinctive Phase 2</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 852 227">
                          <g id="Single_Distinctive_Phase_2" data-name="Single Distinctive Phase 2" transform="translate(-817 -1042)">
                            <!-- Available Single Distinctive Phase 1 - #01 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available" width="42" height="69" transform="translate(862 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #02 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(907 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #03 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(952 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #04-->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(997 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(1042 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #06 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(1087 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #07 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1132 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #08 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(1177 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #09 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(1222 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #10 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1267 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #11 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(1312 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #12 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(1357 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #13 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(1402 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #14 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(1447 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #15 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(1492 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #16 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(1537 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #17 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(1582 1042)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #18 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(997 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #19 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(1042 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #20 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(1087 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #21 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(1177 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #22 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(1222 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #23 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(1267 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #24 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(1357 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #25 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=25&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-25" data-name="Available" width="42" height="69" transform="translate(1402 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #26 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=26&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-26" data-name="Available" width="42" height="69" transform="translate(1492 1121)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #27 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=27&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-27" data-name="Available" width="42" height="69" transform="translate(862 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #28 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=28&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-28" data-name="Available" width="42" height="69" transform="translate(907 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #29 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=29&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-29" data-name="Available" width="42" height="69" transform="translate(952 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #30 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=30&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-30" data-name="Available" width="42" height="69" transform="translate(997 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #31 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=31&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-31" data-name="Available" width="42" height="69" transform="translate(1042 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #32 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=32&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-32" data-name="Available" width="42" height="69" transform="translate(1087 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #33 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=33&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-33" data-name="Available" width="42" height="69" transform="translate(1132 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #34 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=34&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-34" data-name="Available" width="42" height="69" transform="translate(1222 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #35 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=35&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-35" data-name="Available" width="42" height="69" transform="translate(1267 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #36 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=36&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-36" data-name="Available" width="42" height="69" transform="translate(1312 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #37 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=37&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-37" data-name="Available" width="42" height="69" transform="translate(1357 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #38 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=38&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-38" data-name="Available" width="42" height="69" transform="translate(1447 1200)" fill="#e15454" />
                            </a>
                            <!-- Available Single Distinctive Phase 2 - #39 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=39&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-39" data-name="Available" width="42" height="69" transform="translate(1492 1200)" fill="#e15454" />
                            </a>

                            <rect id="Not-Available" width="42" height="69" transform="translate(1177 1200)" fill="#828282" />
                            <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1627 1121)" fill="#828282" />
                            <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1312 1121)" fill="#828282" />
                            <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1627 1200)" fill="#828282" />
                            <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(952 1121)" fill="#828282" />
                            <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1582 1121)" fill="#828282" />
                            <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1582 1200)" fill="#828282" />
                            <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(862 1121)" fill="#828282" />
                            <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(817 1042)" fill="#828282" />
                            <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(817 1121)" fill="#828282" />
                            <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1447 1121)" fill="#828282" />
                            <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(817 1200)" fill="#828282" />
                            <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(907 1121)" fill="#828282" />
                            <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1537 1121)" fill="#828282" />
                            <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1537 1200)" fill="#828282" />
                            <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1402 1200)" fill="#828282" />
                            <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1627 1042)" fill="#828282" />
                            <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1132 1121)" fill="#828282" />
                          </g>
                        </svg>

                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Double Distinctive Phase 1
                case 'dphase1': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Double Distinctive Phase 1</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1707 227">
                          <g id="Group_10" data-name="Group 10" transform="translate(-817 -1827)">
                            <!-- Available Double Distinctive Phase 1 - #01 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available" width="42" height="69" transform="translate(1267 1827)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #02 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(1627 1827)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #03 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(2392 1827)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #04 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(997 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(1042 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #04 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(1132 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1807 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #06 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(2077 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #07 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(2257 1906)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #08 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(862 1985)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #09 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(1312 1985)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 1 - #10 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(1942 1985)" fill="#e15454" />
                            </a>
                            <rect id="Not-Available" width="42" height="69" transform="translate(1087 1827)" fill="#828282" />
                            <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(1942 1827)" fill="#828282" />
                            <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1402 1827)" fill="#828282" />
                            <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(2257 1827)" fill="#828282" />
                            <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1087 1906)" fill="#828282" />
                            <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1942 1906)" fill="#828282" />
                            <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1402 1906)" fill="#828282" />
                            <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1087 1985)" fill="#828282" />
                            <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1402 1985)" fill="#828282" />
                            <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(2257 1985)" fill="#828282" />
                            <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1042 1827)" fill="#828282" />
                            <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1897 1827)" fill="#828282" />
                            <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1357 1827)" fill="#828282" />
                            <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(2212 1827)" fill="#828282" />
                            <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1897 1906)" fill="#828282" />
                            <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1357 1906)" fill="#828282" />
                            <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(2212 1906)" fill="#828282" />
                            <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1042 1985)" fill="#828282" />
                            <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1897 1985)" fill="#828282" />
                            <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1357 1985)" fill="#828282" />
                            <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(2212 1985)" fill="#828282" />
                            <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(997 1827)" fill="#828282" />
                            <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1852 1827)" fill="#828282" />
                            <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(2482 1827)" fill="#828282" />
                            <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1312 1827)" fill="#828282" />
                            <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(2167 1827)" fill="#828282" />
                            <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1852 1906)" fill="#828282" />
                            <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1627 1906)" fill="#828282" />
                            <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(2482 1906)" fill="#828282" />
                            <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1312 1906)" fill="#828282" />
                            <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(2167 1906)" fill="#828282" />
                            <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(997 1985)" fill="#828282" />
                            <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1852 1985)" fill="#828282" />
                            <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(1627 1985)" fill="#828282" />
                            <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(2482 1985)" fill="#828282" />
                            <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(2167 1985)" fill="#828282" />
                            <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(952 1827)" fill="#828282" />
                            <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(1807 1827)" fill="#828282" />
                            <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(1582 1827)" fill="#828282" />
                            <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(2437 1827)" fill="#828282" />
                            <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(2122 1827)" fill="#828282" />
                            <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(952 1906)" fill="#828282" />
                            <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1582 1906)" fill="#828282" />
                            <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(2437 1906)" fill="#828282" />
                            <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(1267 1906)" fill="#828282" />
                            <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(2122 1906)" fill="#828282" />
                            <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(952 1985)" fill="#828282" />
                            <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(1807 1985)" fill="#828282" />
                            <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1582 1985)" fill="#828282" />
                            <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(2437 1985)" fill="#828282" />
                            <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1267 1985)" fill="#828282" />
                            <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(2122 1985)" fill="#828282" />
                            <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(862 1827)" fill="#828282" />
                            <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1717 1827)" fill="#828282" />
                            <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(1492 1827)" fill="#828282" />
                            <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(2347 1827)" fill="#828282" />
                            <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(1177 1827)" fill="#828282" />
                            <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(2032 1827)" fill="#828282" />
                            <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(862 1906)" fill="#828282" />
                            <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(1717 1906)" fill="#828282" />
                            <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(1492 1906)" fill="#828282" />
                            <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(2347 1906)" fill="#828282" />
                            <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(1177 1906)" fill="#828282" />
                            <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(2032 1906)" fill="#828282" />
                            <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(1717 1985)" fill="#828282" />
                            <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(1492 1985)" fill="#828282" />
                            <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(2347 1985)" fill="#828282" />
                            <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(1177 1985)" fill="#828282" />
                            <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(2032 1985)" fill="#828282" />
                            <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(817 1827)" fill="#828282" />
                            <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(1672 1827)" fill="#828282" />
                            <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1447 1827)" fill="#828282" />
                            <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(2302 1827)" fill="#828282" />
                            <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(1132 1827)" fill="#828282" />
                            <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1987 1827)" fill="#828282" />
                            <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(817 1906)" fill="#828282" />
                            <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(1672 1906)" fill="#828282" />
                            <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(1447 1906)" fill="#828282" />
                            <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(2302 1906)" fill="#828282" />
                            <rect id="Available-13" data-name="Available" width="42" height="69" transform="translate(1987 1906)" fill="#828282" />
                            <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(817 1985)" fill="#828282" />
                            <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1672 1985)" fill="#828282" />
                            <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(1447 1985)" fill="#828282" />
                            <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(2302 1985)" fill="#828282" />
                            <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(1132 1985)" fill="#828282" />
                            <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(1987 1985)" fill="#828282" />
                            <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(907 1827)" fill="#828282" />
                            <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(1762 1827)" fill="#828282" />
                            <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(1537 1827)" fill="#828282" />
                            <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(1222 1827)" fill="#828282" />
                            <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(2077 1827)" fill="#828282" />
                            <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(907 1906)" fill="#828282" />
                            <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(1762 1906)" fill="#828282" />
                            <rect id="Not-Available-93" data-name="Not-Available" width="42" height="69" transform="translate(1537 1906)" fill="#828282" />
                            <rect id="Not-Available-94" data-name="Not-Available" width="42" height="69" transform="translate(2392 1906)" fill="#828282" />
                            <rect id="Not-Available-95" data-name="Not-Available" width="42" height="69" transform="translate(1222 1906)" fill="#828282" />
                            <rect id="Not-Available-96" data-name="Not-Available" width="42" height="69" transform="translate(907 1985)" fill="#828282" />
                            <rect id="Not-Available-97" data-name="Not-Available" width="42" height="69" transform="translate(1762 1985)" fill="#828282" />
                            <rect id="Not-Available-98" data-name="Not-Available" width="42" height="69" transform="translate(1537 1985)" fill="#828282" />
                            <rect id="Not-Available-99" data-name="Not-Available" width="42" height="69" transform="translate(2392 1985)" fill="#828282" />
                            <rect id="Not-Available-100" data-name="Not-Available" width="42" height="69" transform="translate(1222 1985)" fill="#828282" />
                            <rect id="Not-Available-101" data-name="Not-Available" width="42" height="69" transform="translate(2077 1985)" fill="#828282" />
                          </g>
                        </svg>

                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Double Distinctive Phase 2
                case 'dphase2': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Double Distinctive Phase 2</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1077 306">
                          <g id="Double-Distinctive" data-name="Double Distinctive Phase 2" transform="translate(-830 -1583)">
                            <!-- Available Double Distinctive Phase 2 - #01 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available" width="42" height="69" transform="translate(830 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #02 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(965 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #03 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(1190 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #04 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1325 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(1505 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #06 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(1820 1583)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #07 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1010 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #08 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(1145 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #09 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(1190 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #10 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1415 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #11 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(1550 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #12 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(1640 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #13 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(1730 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #14 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(1820 1662)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #15 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(830 1741)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #16 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(1010 1741)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #17 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(1280 1741)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #18 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(1730 1741)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #19 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(875 1820)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #20 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(1055 1820)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #21 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(1190 1820)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #22 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(1460 1820)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #23 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(1640 1820)" fill="#e15454" />
                            </a>
                            <!-- Available Double Distinctive Phase 2 - #24 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                              <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(1685 1820)" fill="#e15454" />
                            </a>

                            <rect id="Not-Available" width="42" height="69" transform="translate(830 1662)" fill="#828282" />
                            <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(830 1820)" fill="#828282" />
                            <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(920 1583)" fill="#828282" />
                            <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(920 1662)" fill="#828282" />
                            <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(920 1741)" fill="#828282" />
                            <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(920 1820)" fill="#828282" />
                            <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1010 1583)" fill="#828282" />
                            <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1010 1820)" fill="#828282" />
                            <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1100 1583)" fill="#828282" />
                            <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(1100 1662)" fill="#828282" />
                            <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1100 1741)" fill="#828282" />
                            <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1100 1820)" fill="#828282" />
                            <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1190 1741)" fill="#828282" />
                            <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1280 1583)" fill="#828282" />
                            <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1280 1662)" fill="#828282" />
                            <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1280 1820)" fill="#828282" />
                            <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1370 1583)" fill="#828282" />
                            <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1370 1662)" fill="#828282" />
                            <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1370 1741)" fill="#828282" />
                            <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1370 1820)" fill="#828282" />
                            <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1460 1583)" fill="#828282" />
                            <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1460 1662)" fill="#828282" />
                            <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1460 1741)" fill="#828282" />
                            <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1550 1583)" fill="#828282" />
                            <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1550 1741)" fill="#828282" />
                            <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1550 1820)" fill="#828282" />
                            <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1640 1583)" fill="#828282" />
                            <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1640 1741)" fill="#828282" />
                            <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(1730 1583)" fill="#828282" />
                            <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1730 1820)" fill="#828282" />
                            <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(1820 1741)" fill="#828282" />
                            <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(1820 1820)" fill="#828282" />
                            <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(875 1583)" fill="#828282" />
                            <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(875 1662)" fill="#828282" />
                            <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(875 1741)" fill="#828282" />
                            <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(965 1662)" fill="#828282" />
                            <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(965 1741)" fill="#828282" />
                            <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(965 1820)" fill="#828282" />
                            <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(1055 1583)" fill="#828282" />
                            <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(1055 1662)" fill="#828282" />
                            <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(1055 1741)" fill="#828282" />
                            <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(1145 1583)" fill="#828282" />
                            <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1145 1741)" fill="#828282" />
                            <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(1145 1820)" fill="#828282" />
                            <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(1235 1583)" fill="#828282" />
                            <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(1235 1662)" fill="#828282" />
                            <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(1235 1741)" fill="#828282" />
                            <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(1235 1820)" fill="#828282" />
                            <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1325 1662)" fill="#828282" />
                            <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(1325 1741)" fill="#828282" />
                            <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1325 1820)" fill="#828282" />
                            <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(1415 1583)" fill="#828282" />
                            <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(1415 1741)" fill="#828282" />
                            <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1415 1820)" fill="#828282" />
                            <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(1505 1662)" fill="#828282" />
                            <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(1505 1741)" fill="#828282" />
                            <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(1505 1820)" fill="#828282" />
                            <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(1595 1583)" fill="#828282" />
                            <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(1595 1662)" fill="#828282" />
                            <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(1595 1741)" fill="#828282" />
                            <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(1595 1820)" fill="#828282" />
                            <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(1685 1583)" fill="#828282" />
                            <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(1685 1662)" fill="#828282" />
                            <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(1685 1741)" fill="#828282" />
                            <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(1775 1583)" fill="#828282" />
                            <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(1775 1662)" fill="#828282" />
                            <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(1775 1741)" fill="#828282" />
                            <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(1775 1820)" fill="#828282" />
                            <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(1865 1583)" fill="#828282" />
                            <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(1865 1662)" fill="#828282" />
                            <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(1865 1741)" fill="#828282" />
                            <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1865 1820)" fill="#828282" />
                          </g>
                        </svg>

                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Single Niche Phase 1
                case 'nphase1': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Single Niche Phase 1</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1347 306">
                          <g id="Single-Niche-Phase-1" data-name="Single Niche Phase 1" transform="translate(-832 -1184)">
                              <!-- Available Single Niche Phase 1 - #01 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available" width="42" height="69" transform="translate(877 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #02 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(922 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #03 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(967 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #04 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1462 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(1822 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #06 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(2047 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #07 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(1147 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #08 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(1282 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #09 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(1642 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #10 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1957 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #11 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(2137 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #12 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(922 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #13 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(1057 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #14 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(1372 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #15 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(1642 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #16 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(1777 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #17 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(2137 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #18 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(832 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #19 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(1147 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #20 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(1282 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #21 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(1507 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #22 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(1687 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #23 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(1822 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 1 - #24 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(2002 1421)" fill="#e15454" />
                            </a>

                            <rect id="Not-Available" width="42" height="69" transform="translate(832 1342)" fill="#828282" />
                            <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(832 1263)" fill="#828282" />
                            <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(832 1184)" fill="#828282" />
                            <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1012 1342)" fill="#828282" />
                            <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1012 1263)" fill="#828282" />
                            <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1012 1184)" fill="#828282" />
                            <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1012 1421)" fill="#828282" />
                            <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1192 1342)" fill="#828282" />
                            <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1192 1263)" fill="#828282" />
                            <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(1192 1184)" fill="#828282" />
                            <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1192 1421)" fill="#828282" />
                            <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1327 1342)" fill="#828282" />
                            <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1327 1263)" fill="#828282" />
                            <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1327 1184)" fill="#828282" />
                            <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1327 1421)" fill="#828282" />
                            <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1507 1342)" fill="#828282" />
                            <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1507 1263)" fill="#828282" />
                            <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(1507 1184)" fill="#828282" />
                            <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(1687 1342)" fill="#828282" />
                            <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1687 1263)" fill="#828282" />
                            <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1687 1184)" fill="#828282" />
                            <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(877 1342)" fill="#828282" />
                            <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(877 1263)" fill="#828282" />
                            <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(877 1421)" fill="#828282" />
                            <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1057 1263)" fill="#828282" />
                            <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1057 1184)" fill="#828282" />
                            <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1057 1421)" fill="#828282" />
                            <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1237 1342)" fill="#828282" />
                            <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(1237 1263)" fill="#828282" />
                            <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1237 1184)" fill="#828282" />
                            <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(1237 1421)" fill="#828282" />
                            <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(1372 1263)" fill="#828282" />
                            <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1372 1184)" fill="#828282" />
                            <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(1372 1421)" fill="#828282" />
                            <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(1552 1342)" fill="#828282" />
                            <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(1552 1263)" fill="#828282" />
                            <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(1552 1184)" fill="#828282" />
                            <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(1552 1421)" fill="#828282" />
                            <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(1732 1342)" fill="#828282" />
                            <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(1732 1263)" fill="#828282" />
                            <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(1732 1184)" fill="#828282" />
                            <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(1732 1421)" fill="#828282" />
                            <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(922 1263)" fill="#828282" />
                            <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(922 1421)" fill="#828282" />
                            <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(1102 1342)" fill="#828282" />
                            <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(1102 1263)" fill="#828282" />
                            <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(1102 1184)" fill="#828282" />
                            <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(1102 1421)" fill="#828282" />
                            <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1282 1342)" fill="#828282" />
                            <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(1282 1184)" fill="#828282" />
                            <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1417 1342)" fill="#828282" />
                            <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(1417 1263)" fill="#828282" />
                            <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(1417 1184)" fill="#828282" />
                            <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1417 1421)" fill="#828282" />
                            <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(1597 1342)" fill="#828282" />
                            <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(1597 1263)" fill="#828282" />
                            <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(1597 1184)" fill="#828282" />
                            <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(1597 1421)" fill="#828282" />
                            <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(1912 1342)" fill="#828282" />
                            <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(2047 1342)" fill="#828282" />
                            <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(1777 1263)" fill="#828282" />
                            <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(1912 1263)" fill="#828282" />
                            <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(2047 1263)" fill="#828282" />
                            <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(1777 1184)" fill="#828282" />
                            <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(1912 1184)" fill="#828282" />
                            <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(1777 1421)" fill="#828282" />
                            <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(1912 1421)" fill="#828282" />
                            <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(2047 1421)" fill="#828282" />
                            <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(967 1342)" fill="#828282" />
                            <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(967 1263)" fill="#828282" />
                            <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(967 1421)" fill="#828282" />
                            <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1147 1342)" fill="#828282" />
                            <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(1147 1184)" fill="#828282" />
                            <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(1327 1342)" fill="#828282" />
                            <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1327 1263)" fill="#828282" />
                            <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(1327 1184)" fill="#828282" />
                            <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(1327 1421)" fill="#828282" />
                            <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(1462 1342)" fill="#828282" />
                            <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(1462 1263)" fill="#828282" />
                            <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(1462 1421)" fill="#828282" />
                            <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1642 1184)" fill="#828282" />
                            <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(1642 1421)" fill="#828282" />
                            <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(1822 1342)" fill="#828282" />
                            <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(1957 1342)" fill="#828282" />
                            <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(2092 1342)" fill="#828282" />
                            <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(1822 1263)" fill="#828282" />
                            <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(2092 1263)" fill="#828282" />
                            <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(1957 1184)" fill="#828282" />
                            <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(2092 1184)" fill="#828282" />
                            <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(1957 1421)" fill="#828282" />
                            <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(2092 1421)" fill="#828282" />
                            <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(1867 1342)" fill="#828282" />
                            <rect id="Not-Available-93" data-name="Not-Available" width="42" height="69" transform="translate(2002 1342)" fill="#828282" />
                            <rect id="Not-Available-94" data-name="Not-Available" width="42" height="69" transform="translate(1867 1263)" fill="#828282" />
                            <rect id="Not-Available-95" data-name="Not-Available" width="42" height="69" transform="translate(2002 1263)" fill="#828282" />
                            <rect id="Not-Available-96" data-name="Not-Available" width="42" height="69" transform="translate(1867 1184)" fill="#828282" />
                            <rect id="Not-Available-97" data-name="Not-Available" width="42" height="69" transform="translate(2002 1184)" fill="#828282" />
                            <rect id="Not-Available-98" data-name="Not-Available" width="42" height="69" transform="translate(2137 1184)" fill="#828282" />
                            <rect id="Not-Available-99" data-name="Not-Available" width="42" height="69" transform="translate(1867 1421)" fill="#828282" />
                            <rect id="Not-Available-100" data-name="Not-Available" width="42" height="69" transform="translate(2137 1421)" fill="#828282" />
                          </g>
                        </svg>

                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
                  <?php
                    break;
                  }
                  //Single Niche Phase 2
                case 'nphase2': {
                  ?>
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <h3>Single Niche Phase 2</h3>
                        <small><span style="color: #e15454;"><i class="fa fa-circle"></i></span> = Available | <span style="color : #828282;"><i class="fa fa-circle"></i></span> = Not Available</small>
                      </div>
                      <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1347 306">
                          <g id="Single-Niche" data-name="Single Niche Phase 2" transform="translate(-832 -1184)">
                             <!-- Available Single Niche Phase 2 - #01 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=01&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available" width="42" height="69" transform="translate(832 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #02 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=02&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-2" data-name="Available" width="42" height="69" transform="translate(1147 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #03 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=03&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-3" data-name="Available" width="42" height="69" transform="translate(1372 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #04 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=04&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-4" data-name="Available" width="42" height="69" transform="translate(1867 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #05 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=05&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-5" data-name="Available" width="42" height="69" transform="translate(2137 1184)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #06 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=06&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-6" data-name="Available" width="42" height="69" transform="translate(877 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #07 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=07&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-7" data-name="Available" width="42" height="69" transform="translate(922 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #08 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=08&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-8" data-name="Available" width="42" height="69" transform="translate(1237 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #09 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=09&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-9" data-name="Available" width="42" height="69" transform="translate(1507 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #10 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=10&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-10" data-name="Available" width="42" height="69" transform="translate(1687 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #11 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=11&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-11" data-name="Available" width="42" height="69" transform="translate(2002 1263)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #12 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=12&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-12" data-name="Available" width="42" height="69" transform="translate(922 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #13 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=13&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-13" data-name="Available" width="42" height="69" transform="translate(1012 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #14 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=14&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-14" data-name="Available" width="42" height="69" transform="translate(1147 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #15 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=15&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-15" data-name="Available" width="42" height="69" transform="translate(1417 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #16 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=16&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-16" data-name="Available" width="42" height="69" transform="translate(1507 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #17 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=17&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-17" data-name="Available" width="42" height="69" transform="translate(1822 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #18 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=18&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-18" data-name="Available" width="42" height="69" transform="translate(1867 1342)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #19 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=19&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-19" data-name="Available" width="42" height="69" transform="translate(832 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #20 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=20&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-20" data-name="Available" width="42" height="69" transform="translate(877 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #21 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=21&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-21" data-name="Available" width="42" height="69" transform="translate(1462 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #22 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=22&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-22" data-name="Available" width="42" height="69" transform="translate(1687 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #23 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=23&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-23" data-name="Available" width="42" height="69" transform="translate(2002 1421)" fill="#e15454" />
                            </a>
                             <!-- Available Single Niche Phase 2 - #24 -->
                            <a href="payments.php?auth_token=<?php echo (generate_code(420) . '&auth_code=' . $package_code . '&auth_map=24&' . generate_code(280)); ?>">
                            <rect class="shapes" id="Available-24" data-name="Available" width="42" height="69" transform="translate(2047 1421)" fill="#e15454" />
                            </a>

                            <rect id="Not-Available" width="42" height="69" transform="translate(832 1342)" fill="#828282" />
                            <rect id="Not-Available-2" data-name="Not-Available" width="42" height="69" transform="translate(832 1263)" fill="#828282" />
                            <rect id="Not-Available-3" data-name="Not-Available" width="42" height="69" transform="translate(1012 1263)" fill="#828282" />
                            <rect id="Not-Available-4" data-name="Not-Available" width="42" height="69" transform="translate(1012 1184)" fill="#828282" />
                            <rect id="Not-Available-5" data-name="Not-Available" width="42" height="69" transform="translate(1012 1421)" fill="#828282" />
                            <rect id="Not-Available-6" data-name="Not-Available" width="42" height="69" transform="translate(1192 1342)" fill="#828282" />
                            <rect id="Not-Available-7" data-name="Not-Available" width="42" height="69" transform="translate(1192 1263)" fill="#828282" />
                            <rect id="Not-Available-8" data-name="Not-Available" width="42" height="69" transform="translate(1192 1184)" fill="#828282" />
                            <rect id="Not-Available-9" data-name="Not-Available" width="42" height="69" transform="translate(1192 1421)" fill="#828282" />
                            <rect id="Not-Available-10" data-name="Not-Available" width="42" height="69" transform="translate(1327 1342)" fill="#828282" />
                            <rect id="Not-Available-11" data-name="Not-Available" width="42" height="69" transform="translate(1327 1263)" fill="#828282" />
                            <rect id="Not-Available-12" data-name="Not-Available" width="42" height="69" transform="translate(1327 1184)" fill="#828282" />
                            <rect id="Not-Available-13" data-name="Not-Available" width="42" height="69" transform="translate(1327 1421)" fill="#828282" />
                            <rect id="Not-Available-14" data-name="Not-Available" width="42" height="69" transform="translate(1507 1184)" fill="#828282" />
                            <rect id="Not-Available-15" data-name="Not-Available" width="42" height="69" transform="translate(1507 1421)" fill="#828282" />
                            <rect id="Not-Available-16" data-name="Not-Available" width="42" height="69" transform="translate(1687 1342)" fill="#828282" />
                            <rect id="Not-Available-17" data-name="Not-Available" width="42" height="69" transform="translate(1687 1184)" fill="#828282" />
                            <rect id="Not-Available-18" data-name="Not-Available" width="42" height="69" transform="translate(877 1342)" fill="#828282" />
                            <rect id="Not-Available-19" data-name="Not-Available" width="42" height="69" transform="translate(877 1184)" fill="#828282" />
                            <rect id="Not-Available-20" data-name="Not-Available" width="42" height="69" transform="translate(1057 1342)" fill="#828282" />
                            <rect id="Not-Available-21" data-name="Not-Available" width="42" height="69" transform="translate(1057 1263)" fill="#828282" />
                            <rect id="Not-Available-22" data-name="Not-Available" width="42" height="69" transform="translate(1057 1184)" fill="#828282" />
                            <rect id="Not-Available-23" data-name="Not-Available" width="42" height="69" transform="translate(1057 1421)" fill="#828282" />
                            <rect id="Not-Available-24" data-name="Not-Available" width="42" height="69" transform="translate(1237 1342)" fill="#828282" />
                            <rect id="Not-Available-25" data-name="Not-Available" width="42" height="69" transform="translate(1237 1184)" fill="#828282" />
                            <rect id="Not-Available-26" data-name="Not-Available" width="42" height="69" transform="translate(1237 1421)" fill="#828282" />
                            <rect id="Not-Available-27" data-name="Not-Available" width="42" height="69" transform="translate(1372 1342)" fill="#828282" />
                            <rect id="Not-Available-28" data-name="Not-Available" width="42" height="69" transform="translate(1372 1263)" fill="#828282" />
                            <rect id="Not-Available-29" data-name="Not-Available" width="42" height="69" transform="translate(1372 1421)" fill="#828282" />
                            <rect id="Not-Available-30" data-name="Not-Available" width="42" height="69" transform="translate(1552 1342)" fill="#828282" />
                            <rect id="Not-Available-31" data-name="Not-Available" width="42" height="69" transform="translate(1552 1263)" fill="#828282" />
                            <rect id="Not-Available-32" data-name="Not-Available" width="42" height="69" transform="translate(1552 1184)" fill="#828282" />
                            <rect id="Not-Available-33" data-name="Not-Available" width="42" height="69" transform="translate(1552 1421)" fill="#828282" />
                            <rect id="Not-Available-34" data-name="Not-Available" width="42" height="69" transform="translate(1732 1342)" fill="#828282" />
                            <rect id="Not-Available-35" data-name="Not-Available" width="42" height="69" transform="translate(1732 1263)" fill="#828282" />
                            <rect id="Not-Available-36" data-name="Not-Available" width="42" height="69" transform="translate(1732 1184)" fill="#828282" />
                            <rect id="Not-Available-37" data-name="Not-Available" width="42" height="69" transform="translate(1732 1421)" fill="#828282" />
                            <rect id="Not-Available-38" data-name="Not-Available" width="42" height="69" transform="translate(922 1184)" fill="#828282" />
                            <rect id="Not-Available-39" data-name="Not-Available" width="42" height="69" transform="translate(922 1421)" fill="#828282" />
                            <rect id="Not-Available-40" data-name="Not-Available" width="42" height="69" transform="translate(1102 1342)" fill="#828282" />
                            <rect id="Not-Available-41" data-name="Not-Available" width="42" height="69" transform="translate(1102 1263)" fill="#828282" />
                            <rect id="Not-Available-42" data-name="Not-Available" width="42" height="69" transform="translate(1102 1184)" fill="#828282" />
                            <rect id="Not-Available-43" data-name="Not-Available" width="42" height="69" transform="translate(1102 1421)" fill="#828282" />
                            <rect id="Not-Available-44" data-name="Not-Available" width="42" height="69" transform="translate(1282 1342)" fill="#828282" />
                            <rect id="Not-Available-45" data-name="Not-Available" width="42" height="69" transform="translate(1282 1263)" fill="#828282" />
                            <rect id="Not-Available-46" data-name="Not-Available" width="42" height="69" transform="translate(1282 1184)" fill="#828282" />
                            <rect id="Not-Available-47" data-name="Not-Available" width="42" height="69" transform="translate(1282 1421)" fill="#828282" />
                            <rect id="Not-Available-48" data-name="Not-Available" width="42" height="69" transform="translate(1417 1263)" fill="#828282" />
                            <rect id="Not-Available-49" data-name="Not-Available" width="42" height="69" transform="translate(1417 1184)" fill="#828282" />
                            <rect id="Not-Available-50" data-name="Not-Available" width="42" height="69" transform="translate(1417 1421)" fill="#828282" />
                            <rect id="Not-Available-51" data-name="Not-Available" width="42" height="69" transform="translate(1597 1342)" fill="#828282" />
                            <rect id="Not-Available-52" data-name="Not-Available" width="42" height="69" transform="translate(1597 1263)" fill="#828282" />
                            <rect id="Not-Available-53" data-name="Not-Available" width="42" height="69" transform="translate(1597 1184)" fill="#828282" />
                            <rect id="Not-Available-54" data-name="Not-Available" width="42" height="69" transform="translate(1597 1421)" fill="#828282" />
                            <rect id="Not-Available-55" data-name="Not-Available" width="42" height="69" transform="translate(1777 1342)" fill="#828282" />
                            <rect id="Not-Available-56" data-name="Not-Available" width="42" height="69" transform="translate(1912 1342)" fill="#828282" />
                            <rect id="Not-Available-57" data-name="Not-Available" width="42" height="69" transform="translate(2047 1342)" fill="#828282" />
                            <rect id="Not-Available-58" data-name="Not-Available" width="42" height="69" transform="translate(1777 1263)" fill="#828282" />
                            <rect id="Not-Available-59" data-name="Not-Available" width="42" height="69" transform="translate(1912 1263)" fill="#828282" />
                            <rect id="Not-Available-60" data-name="Not-Available" width="42" height="69" transform="translate(2047 1263)" fill="#828282" />
                            <rect id="Not-Available-61" data-name="Not-Available" width="42" height="69" transform="translate(1777 1184)" fill="#828282" />
                            <rect id="Not-Available-62" data-name="Not-Available" width="42" height="69" transform="translate(1912 1184)" fill="#828282" />
                            <rect id="Not-Available-63" data-name="Not-Available" width="42" height="69" transform="translate(2047 1184)" fill="#828282" />
                            <rect id="Not-Available-64" data-name="Not-Available" width="42" height="69" transform="translate(1777 1421)" fill="#828282" />
                            <rect id="Not-Available-65" data-name="Not-Available" width="42" height="69" transform="translate(1912 1421)" fill="#828282" />
                            <rect id="Not-Available-66" data-name="Not-Available" width="42" height="69" transform="translate(967 1342)" fill="#828282" />
                            <rect id="Not-Available-67" data-name="Not-Available" width="42" height="69" transform="translate(967 1263)" fill="#828282" />
                            <rect id="Not-Available-68" data-name="Not-Available" width="42" height="69" transform="translate(967 1184)" fill="#828282" />
                            <rect id="Not-Available-69" data-name="Not-Available" width="42" height="69" transform="translate(967 1421)" fill="#828282" />
                            <rect id="Not-Available-70" data-name="Not-Available" width="42" height="69" transform="translate(1147 1263)" fill="#828282" />
                            <rect id="Not-Available-71" data-name="Not-Available" width="42" height="69" transform="translate(1147 1421)" fill="#828282" />
                            <rect id="Not-Available-72" data-name="Not-Available" width="42" height="69" transform="translate(1327 1342)" fill="#828282" />
                            <rect id="Not-Available-73" data-name="Not-Available" width="42" height="69" transform="translate(1327 1263)" fill="#828282" />
                            <rect id="Not-Available-74" data-name="Not-Available" width="42" height="69" transform="translate(1327 1184)" fill="#828282" />
                            <rect id="Not-Available-75" data-name="Not-Available" width="42" height="69" transform="translate(1327 1421)" fill="#828282" />
                            <rect id="Not-Available-76" data-name="Not-Available" width="42" height="69" transform="translate(1462 1342)" fill="#828282" />
                            <rect id="Not-Available-77" data-name="Not-Available" width="42" height="69" transform="translate(1462 1263)" fill="#828282" />
                            <rect id="Not-Available-78" data-name="Not-Available" width="42" height="69" transform="translate(1462 1184)" fill="#828282" />
                            <rect id="Not-Available-79" data-name="Not-Available" width="42" height="69" transform="translate(1642 1342)" fill="#828282" />
                            <rect id="Not-Available-80" data-name="Not-Available" width="42" height="69" transform="translate(1642 1263)" fill="#828282" />
                            <rect id="Not-Available-81" data-name="Not-Available" width="42" height="69" transform="translate(1642 1184)" fill="#828282" />
                            <rect id="Not-Available-82" data-name="Not-Available" width="42" height="69" transform="translate(1642 1421)" fill="#828282" />
                            <rect id="Not-Available-83" data-name="Not-Available" width="42" height="69" transform="translate(1957 1342)" fill="#828282" />
                            <rect id="Not-Available-84" data-name="Not-Available" width="42" height="69" transform="translate(2092 1342)" fill="#828282" />
                            <rect id="Not-Available-85" data-name="Not-Available" width="42" height="69" transform="translate(1822 1263)" fill="#828282" />
                            <rect id="Not-Available-86" data-name="Not-Available" width="42" height="69" transform="translate(1957 1263)" fill="#828282" />
                            <rect id="Not-Available-87" data-name="Not-Available" width="42" height="69" transform="translate(2092 1263)" fill="#828282" />
                            <rect id="Not-Available-88" data-name="Not-Available" width="42" height="69" transform="translate(1822 1184)" fill="#828282" />
                            <rect id="Not-Available-89" data-name="Not-Available" width="42" height="69" transform="translate(1957 1184)" fill="#828282" />
                            <rect id="Not-Available-90" data-name="Not-Available" width="42" height="69" transform="translate(2092 1184)" fill="#828282" />
                            <rect id="Not-Available-91" data-name="Not-Available" width="42" height="69" transform="translate(1822 1421)" fill="#828282" />
                            <rect id="Not-Available-92" data-name="Not-Available" width="42" height="69" transform="translate(1957 1421)" fill="#828282" />
                            <rect id="Not-Available-93" data-name="Not-Available" width="42" height="69" transform="translate(2092 1421)" fill="#828282" />
                            <rect id="Not-Available-94" data-name="Not-Available" width="42" height="69" transform="translate(2002 1342)" fill="#828282" />
                            <rect id="Not-Available-95" data-name="Not-Available" width="42" height="69" transform="translate(2137 1342)" fill="#828282" />
                            <rect id="Not-Available-96" data-name="Not-Available" width="42" height="69" transform="translate(1867 1263)" fill="#828282" />
                            <rect id="Not-Available-97" data-name="Not-Available" width="42" height="69" transform="translate(2137 1263)" fill="#828282" />
                            <rect id="Not-Available-98" data-name="Not-Available" width="42" height="69" transform="translate(2002 1184)" fill="#828282" />
                            <rect id="Not-Available-99" data-name="Not-Available" width="42" height="69" transform="translate(1867 1421)" fill="#828282" />
                            <rect id="Not-Available-100" data-name="Not-Available" width="42" height="69" transform="translate(2137 1421)" fill="#828282" />
                          </g>
                        </svg>

                      </div>
                      <div class="card-footer">
                        <a href="packages.php" class="btn btn-coded text-white">
                          <i class="fa fa-arrow-left"></i> Previous
                        </a>
                      </div>
                    </div>
              <?php
                    break;
                  }
                default: {
                    header("Location: packages.php");
                  }
              }
              ?>

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

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>