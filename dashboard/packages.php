<?php
include_once('../wp-php/session.php');

function generate_code(int $length, string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnlopqrstuvwxyz'): string
{
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

$billing_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");
if ($billing_query->num_rows < 1) {
  header("Location: billings.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Santisima | Packages</title>

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
                <div class="card-body">
                  <div class="d-flex flex-wrap">

                    <!--Single Distinctive-->
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="../wp-assets/937.png" alt="Product Preview" />
                        <div class="card-body">
                          <h4>Single Distinctive</h4>
                          <p class="card-text">
                            Single Distinctive An above ground granite/marble
                            flat niche an idyllic resting place for your loved
                            ones max of 2 fresh bodies and 6 sets of bones on
                            a 1 meter x 2.5 meter lot.
                          </p>
                        </div>
                        <div class="card-footer">
                          <button data-toggle="modal" data-target="#single-distinctive-phase1" class="btn btn-primary float-left">
                            Phase 1
                          </button>
                          <button data-toggle="modal" data-target="#single-distinctive-phase2" class="btn btn-success text-white float-right">
                            Phase 2
                          </button>
                        </div>
                      </div>
                    </div>

                    <!--Apartment Niche-->
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="../wp-assets/654.png" alt="Product Preview" />
                        <div class="card-body">
                          <h4>Apartment Niche</h4>
                          <p class="card-text">
                            Apartment Niche An Multi-Leveled structure (A, B,
                            C & D) offering an idyllic resting place for your
                            loved ones max of 1 body or 2 sets of bone remains
                            on a 2.5 sqm lot.
                          </p>
                        </div>
                        <div class="card-footer">
                          <button data-toggle="modal" data-target="#back-view" class="btn btn-primary float-left">
                            Back View
                          </button>
                          <button data-toggle="modal" data-target="#front-view" class="btn btn-success text-white float-right">
                            Front View
                          </button>
                        </div>
                      </div>
                    </div>

                    <!--Double Distinctive-->
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="../wp-assets/577.png" alt="Product Preview" />
                        <div class="card-body">
                          <h4>Double Distinctive</h4>
                          <p class="card-text">
                            Double Distinctive An above ground granite/marble
                            flat niche an idyllic resting place for your loved
                            ones with a max of 4 fresh bodies and 12 sets of
                            bones on a 2 meters x 2.5 meters lot.
                          </p>
                        </div>
                        <div class="card-footer">
                          <button data-toggle="modal" data-target="#double-distinctive-phase1" class="btn btn-primary float-left">
                            Phase 1
                          </button>
                          <button data-toggle="modal" data-target="#double-distinctive-phase2" class="btn btn-success text-white float-right">
                            Phase 2
                          </button>
                        </div>
                      </div>
                    </div>

                    <!--Single Niche-->
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="../wp-assets/946.png" alt="Product Preview" />
                        <div class="card-body">
                          <h4>Single Niche</h4>
                          <p class="card-text">
                            Single Niche combination of above & underground
                            interments for bone and bodies an idyllic resting
                            place for your loved ones with a size of 10.5 sqm
                            lot.
                          </p>
                        </div>
                        <div class="card-footer">
                          <button data-toggle="modal" data-target="#single-niche-phase1" class="btn btn-primary float-left">
                            Phase 1
                          </button>
                          <button data-toggle="modal" data-target="#single-niche-phase2" class="btn btn-success text-white float-right">
                            Phase 2
                          </button>
                        </div>
                      </div>
                    </div>

                    <!--Lawn Lot-->
                    <div class="col-md-4">
                      <div class="card">
                        <img class="card-img-top" src="../wp-assets/123.png" alt="Product Preview" />
                        <div class="card-body">
                          <h4>Lawn Lot</h4>
                          <p class="card-text">
                            Lawn Lot An expanse field of trimmed grass
                            offfering an idyllic resting place for your loved
                            ones with a space suitable for two (2) on a 2.5
                            sqm lot.
                          </p>
                        </div>
                        <div class="card-footer">
                          <button data-toggle="modal" data-target="#lawnlot-phase1" class="btn btn-primary float-left">
                            Phase 1
                          </button>
                          <button data-toggle="modal" data-target="#lawnlot-phase2" class="btn btn-success text-white float-right">
                            Phase 2
                          </button>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <a href="billings.php" class="btn btn-secondary text-white">
                    <i class="fa fa-arrow-left"></i> Previous
                  </a>
                </div>
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

  <!-- Products Modals -->

  <!-- Single Distinctive - Phase 1 -->
  <div class="modal fade" id="single-distinctive-phase1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Single Distinctive - Phase 1</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 165,000</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 156,200</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 174,944</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 52,483.20</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 10,205.07</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=094345&auth_token=sphase1&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Single Distinctive - Phase 2 -->
  <div class="modal fade" id="single-distinctive-phase2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Single Distinctive - Phase 2</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Premier</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=094356&auth_token=sphase2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 237,600</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 204,948</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 229,541.76</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 68,862.53</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 13,389.94</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Classic</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=094357&auth_token=sphase2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 198,000</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 187,440</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 209,932.80</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 62,979.84</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 12,246.08</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Apartment Niche - Back View -->
  <div class="modal fade" id="back-view" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apartment Niche - Back View</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Level 1</td>
                <td>₱ 41,800</td>
                <td>
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=878331&auth_token=abackview&level=1&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 2</td>
                <td>₱ 41,800</td>
                <td>
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=878332&auth_token=abackview&level=2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 3</td>
                <td>₱ 41,800</td>
                <td>
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=878333&auth_token=abackview&level=3&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 4</td>
                <td>₱ 41,800</td>
                <td>
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=878334&auth_token=abackview&level=4&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Apartment Niche - Front View -->
  <div class="modal fade" id="front-view" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apartment Niche - Front View</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>Level 1</td>
                <td>₱ 49,500</td>
                <td style="white-space: nowrap;">
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=837391&auth_token=afrontview&level=1&auth_map=' . generate_code(289)); ?>" class="btn btn-warning"> SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 2</td>
                <td>₱ 49,500</td>
                <td style="white-space: nowrap;">
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=837392&auth_token=afrontview&level=2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning"> SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 3</td>
                <td>₱ 46,200</td>
                <td style="white-space: nowrap;">
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=837393&auth_token=afrontview&level=3&auth_map=' . generate_code(289)); ?>" class="btn btn-warning"> SELECT</a>
                </td>
              </tr>
              <tr>
                <td>Level 4</td>
                <td>₱ 46,200</td>
                <td style="white-space: nowrap;">
                  <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=837394&auth_token=afrontview&level=4&auth_map=' . generate_code(289)); ?>" class="btn btn-warning"> SELECT</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Double Distinctive - Phase 1 -->
  <div class="modal fade" id="double-distinctive-phase1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Double Distinctive - Phase 1</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 319,000</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 301,400</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 337,568</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 101,270.40</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 19,691.47</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=759283&auth_token=dphase1&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Double Distinctive - Phase 2 -->
  <div class="modal fade" id="double-distinctive-phase2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Double Distinctive - Phase 2</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 382,800</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 361,680</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 405,081.60</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 121,524.48</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 23,629.76</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=759286&auth_token=dphase2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Single Niche - Phase 1 -->
  <div class="modal fade" id="single-niche-phase1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Single Niche - Phase 1</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>Pre-need</td>
                <td>₱ 616,761.20</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 690,772.54</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 207,231.76</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 32,707.03</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=827842&auth_token=nphase1&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Single Niche - Phase 2 -->
  <div class="modal fade" id="single-niche-phase2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Single Niche - Phase 2</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <tbody>
              <tr>
                <td>Pre-need</td>
                <td>₱ 740,113.44</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 828.927.05</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 248,678.12</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 48,354.08</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="maps.php?<?php echo (generate_code(463) . '&auth_code=827848&auth_token=nphase2&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Lawn Lot - Phase 1 -->
  <div class="modal fade" id="lawnlot-phase1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Lawn Lot - Phase 1</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Premier</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=104787&auth_token=lphase1map&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 99, 000</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 90,200</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 101,024</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 30,307.20</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 5,893.07</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Classic</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=104768&auth_token=lphase1map&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 88, 000</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 79, 200</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 88, 704</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 26, 611.20</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 5, 174.40</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Lawn Lot - Phase 2 -->
  <div class="modal fade" id="lawnlot-phase2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Lawn Lot - Phase 2</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Premier</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=104345&auth_token=lphase2map&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 118, 800</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 108,240</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 121,228.80</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 136,369.64</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 7,071.68</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <table class="table  table-bordered table-hover text-nowrap">
            <thead>
              <tr>
                <th>Classic</th>
                <th><a href="maps.php?<?php echo (generate_code(463) . '&auth_code=124446&auth_token=lphase2map&auth_map=' . generate_code(289)); ?>" class="btn btn-warning">SELECT</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>At-need</td>
                <td>₱ 105,600</td>
              </tr>
              <tr>
                <td>Pre-need</td>
                <td>₱ 95,040</td>
              </tr>
              <tr>
                <td>Installment</td>
                <td>₱ 106,444.80</td>
              </tr>
              <tr>
                <td>Down Payment 30%</td>
                <td>₱ 31,933.44</td>
              </tr>
              <tr>
                <td>1 YEAR TERM</td>
                <td>₱ 6,209.28</td>
              </tr>
              <tr>
                <td>Reservation Fee</td>
                <td>₱ 5, 000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- ./Products Modals -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../wp-plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>