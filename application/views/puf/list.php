<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo base_url('public/admin/assets/images/favicon-32x32.png') ?> " type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/plugins/notifications/css/lobibox.min.css') ?>" />
    <link href="<?php echo base_url('public/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" />
    <!-- loader-->
    <!-- <link href="<?php echo base_url('public/admin/assets/css/pace.min.css') ?>" rel="stylesheet" />
    <script src="<?php echo base_url('public/admin/assets/js/pace.min.js') ?>"></script> -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('public/admin/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/bootstrap-extended.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/app.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/icons.css') ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/dark-theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/semi-dark.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/header-colors.css') ?>" />
    <title>Puf List</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php $this->load->view('layouts/sidebar')  ?>
        <!--end sidebar wrapper -->
        <!--start header -->
        <?php $this->load->view('layouts/header')  ?>
        <div class="row"></div>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Puf</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Puf Table</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Puf List</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Puf/create') ?>" class="btn btn-primary" style="float:right;">Add Order</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Sr_No</th>
                                                    <!-- <th>Customer Name</th>
                                                    <th>panel</th>
                                                    <th>thickness</th>
                                                    <th>skin</th>
                                                    <th>measure</th>
                                                    <th>Length (MM)</th> -->

                                                    <th>Cell top</th>
                                                    <th>Guard film</th>
                                                    <th>Surface</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($puf)) {
                                                    $id = 1;
                                                    foreach ($puf as $Pufs) { ?>

                                                        <tr role="row" class="odd">

                                                            <td class="sorting_1"><?php echo $id++; ?></td>

                                                            <!-- <td><?php echo $Pufs['cname'] ?></td>
                                                            <td><?php echo $Pufs['panel_name']  ?></td>
                                                            <td><?php echo $Pufs['Thickness']  ?></td>
                                                            <td><?php echo $Pufs['Skin']  ?></td>
                                                            <td><?php echo $Pufs['measure']  ?></td>
                                                            <td><?php echo $Pufs['lwst']  ?></td> -->
                                                            <td><?php echo $Pufs['ctp']  ?></td>
                                                            <td><?php echo $Pufs['gfilm']  ?></td>
                                                            <td><?php echo $Pufs['surface']  ?></td>
                                                            <td>
                                                                <a type="button" href="<?php echo base_url('Puf/Invoice/' . $Pufs['id']) ?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Invoice"><i class="lni lni-certificate"></i>
                                                                    <a type="button" href="<?php echo base_url('Puf/edit/' . $Pufs['id']); ?>" class="btn btn-outline-primary" data-placement="top" title="Edit"><i class="bx bx-edit me-0"></i>
                                                                    </a>
                                                            </td>
                                                        </tr>
                                                <?php }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <?php $this->load->view('layouts/footer')  ?>
    </div>
    <!--end wrapper-->


    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('public/admin/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!--plugins-->
    <script src="<?php echo base_url('public/admin/assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/chartjs/js/chart.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/js/index.js') ?>"></script>
    <!--app JS-->
    <script src="<?php echo base_url('public/admin/assets/js/app.js') ?>"></script>

    <!--notification js -->
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/lobibox.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notifications.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notification-custom-script.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <!-- Js Validation -->
    <script src="<?php echo base_url('public/admin/assets/plugins/validation/jquery.validate.min.js') ?>"></script>
    <script>
        function Event() {
            if (document.getElementById('status').checked == true) {
                alert('Order Is Completed');
            } else {
                console.log('Failed');
            }

        }
    </script>

    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['excel', 'pdf']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script>
        <?php
        if (!empty($this->session->flashdata('msg'))) { ?>
            let msg = '<?php echo  $this->session->flashdata('msg'); ?>'
            let icon = '<?php echo  $this->session->flashdata('icon'); ?>'
            // alert(msg)
            // alert(icon)
            Lobibox.notify(icon, {
                pauseDelayOnHover: true,
                icon: 'bx bx-check-circle',
                continueDelayOnInactiveTab: false,
                position: 'top right',
                size: 'mini',
                msg: msg
            });
        <?php  } ?>
    </script>
</body>

</html>