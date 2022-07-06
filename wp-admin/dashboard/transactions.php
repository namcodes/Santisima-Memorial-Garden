<?php
include_once('../php/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Santisima | Transactions</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../wp-plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
    <link rel="shortcut icon" href="../../wp-resources/icon.png" type="image/x-icon" />
    <!-- Sweet Alert 2-->
    <script src="../../wp-plugins/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../wp-plugins/sweetalert2/sweetalert2.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../../wp-plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../wp-plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../wp-plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" href="../php/logout.php" role="button">
                        Logout
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-2">
            <!-- Brand Logo -->
            <a href="../" class="brand-link">
                <img src="../../wp-resources/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">SANTISIMA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../images/<?php echo ($avatar) ?>" class="img-circle elevation-1" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo (ucfirst($first_name) . " " . ucfirst($last_name)) ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Tools</li>
                        <li class="nav-item">
                            <a href="../" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="payments.php" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>Payment Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="transactions.php" class="nav-link active">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Transactions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="records.php" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="support.php" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Live Chat</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Transactions</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../">Home</a></li>
                                <li class="breadcrumb-item active">Transactions</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div id="table-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Reservation Records</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="white-space: nowrap">Reference</th>
                                                    <th style="white-space: nowrap">Status</th>
                                                    <th style="white-space: nowrap">Date</th>
                                                    <th style="white-space: nowrap">Name</th>
                                                    <th style="white-space: nowrap">Method</th>
                                                    <th style="white-space: nowrap">Amount</th>
                                                    <th style="white-space: nowrap">Package Name</th>
                                                    <th style="white-space: nowrap">Package Class</th>
                                                    <th style="white-space: nowrap">Map Place</th>
                                                    <th style="white-space: nowrap">Tools</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $transaction_query = $conn->query("SELECT * FROM tbl_transactions");
                                                $counter = 0;
                                                foreach ($transaction_query as $trans_row) {
                                                    ++$counter;
                                                    if ($trans_row['status'] == 'Success') {
                                                        $status = "badge badge-success";
                                                    } elseif ($trans_row['status'] == "Pending") {
                                                        $status = "badge badge-secondary";
                                                    } else {
                                                        $status = "badge badge-danger";
                                                    }
                                                    echo ('
                                                        <tr>
                                                        <td style="white-space: nowrap;">' . $counter . '</td>
                                                        <td style="white-space: nowrap;">#' . $trans_row['reference'] . '</td>
                                                        <td style="white-space: nowrap;"><span class="' . $status . '">' . $trans_row['status'] . '</span></td>
                                                        <td style="white-space: nowrap;">' . $trans_row['date'] . '</td>
                                                        <td style="white-space: nowrap;">' . $trans_row['fname'] . ' ' . $trans_row['lname'] . '</td>
                                                        <td style="white-space: nowrap;">' . $trans_row['method'] . '</td>
                                                        <td style="white-space: nowrap;">₱ ' . number_format($trans_row['amount']) . '</td>
                                                        <td style="white-space: nowrap;">' . $trans_row['package_name'] . '</td>
                                                        <td style="white-space: nowrap;">' . $trans_row['package_class'] . '</td>
                                                        <td style="white-space: nowrap;">' . $trans_row['map_place'] . '</td>
                                                        <td style="white-space: nowrap;">
                                                        <button data-id="' . $trans_row['token'] . '" class="btn btn-success btn-edit">
                                                        <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button data-id="' . $trans_row['token'] . '" class="btn btn-danger btn-delete ml-2">
                                                          <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                          </td>
                                                          </tr>
                                                    ');
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 1.0.0</div>
            <strong>Copyright &copy; 2022-2023 <a href="#">SANTISIMA</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php
    include_once('response.php');
    ?>
    <!-- Modal Edit transactions -->
    <div class="modal fade" id="edit-transaction" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="php/edit.php" method="post">
                    <input type="text" class="token" name="token" hidden />
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="" selected disabled>SELECT</option>
                                <option value="Success">Success (Paid)</option>
                                <option value="Pending">Pending</option>
                                <option value="Refunded">Refunded</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="edit-transaction" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- jQuery -->
    <script src="../../wp-plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../wp-plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../wp-plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../wp-plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../wp-plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../wp-plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../wp-plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../wp-plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../wp-plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../wp-plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../wp-plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../wp-plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="../../wp-plugins/jszip/jszip.min.js"></script>
    <script src="../../wp-plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../wp-plugins/pdfmake/vfs_fonts.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });

        //Data Tables Initialize

        $("#table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'csv',
                    title: "Santisima Transaction Records",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excel',
                    title: "Santisima Transaction Records",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'pdf',
                    title: "Santisima Transaction Records",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'print',
                    title: "<center>Santisima Transaction Records</center>",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                    }
                },
                'colvis'
        ]
        }).buttons().container().appendTo('#table-card .col-md-6:eq(0)');

        $('#table-search').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $(document).on('click', '.btn-edit', function() {
            let token = $(this).data("id");
            $(".token").val(token);
            $("#edit-transaction").modal('show');
        });

        $(document).on('click', '.btn-delete', function(e) {
            e.preventDefault();
            let id = $(this).data("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Success!',
                        text: "Successfully Deleted!",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    setTimeout(function() {
                        window.location.href = "php/delete.php?delete_transaction=" + id;
                    }, 1500);
                }
            })
        });
    </script>
</body>

</html>