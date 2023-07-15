<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo base_url('public/admin/assets/images/favicon-32x32.png') ?>" type="image/png" />
    <!--plugins-->
    <link href="<?php echo base_url('public/admin/assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('public/admin/assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo base_url('public/admin/assets/css/pace.min.css') ?>" rel="stylesheet" />
    <script src="<?php echo base_url('public/admin/assets/js/pace.min.js') ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('public/admin/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/bootstrap-extended.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/app.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/css/icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/dark-theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/semi-dark.css') ?> " />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/header-colors.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/invoice.css') ?>" />
    <title>invoice</title>
</head>

<body onload="myFunction()">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php $this->load->view('layouts/sidebar')  ?>
        <!--end sidebar wrapper -->
        <!--start header -->
        <?php $this->load->view('layouts/header')  ?>
        <div class="row"></div>
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Applications</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">

                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <div class="container bootstrap snippets bootdey">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 text-left">
                                            <h4><strong>Client</strong> Details</h4>
                                            <ul class="list-unstyled">
                                                <li><strong>First Name:</strong> <?php echo $puf[0]['cname'] ?></li>
                                                <li><strong>Country:</strong> U.S.A.</li>
                                                <li><strong>DOB:</strong> <?php echo date("Y-m-d") ?></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6 col-sm-6 text-right">
                                            <h4><strong>Payment</strong> Details</h4>
                                            <ul class="list-unstyled">
                                                <li><strong>Bank Name:</strong> 012345678901</li>
                                                <li><strong>Account Number:</strong> 012345678901</li>
                                                <li><strong>SWIFT Code:</strong> SWITCH012345678CODE</li>
                                                <li><strong>V.A.T Reg #:</strong> VAT5678901CODE</li>
                                            </ul>

                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-condensed nomargin">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Length(mm)</th>
                                                    <th>Width(mm)</th>
                                                    <th>Total(sqmm)</th>
                                                    <th>C_channel(m)</th>
                                                    <th>L_inner(m)</th>
                                                    <th>L_outer(m)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div><strong><?php echo $puf[0]['panel_name'] ?></strong></div>
                                                        <small>Thickness : <?php echo $puf[0]['Thickness'] ?> , Skin : <?php echo $puf[0]['Skin'] ?> , Measure : <?php echo $puf[0]['measure'] ?> </small>
                                                    </td>
                                                    <td><?php echo $puf[0]['Length_MM'] ?></td>
                                                    <td><?php echo $puf[0]['Width_MM'] ?></td>
                                                    <td><?php echo $puf[0]['Sqm_MM'] ?></td>
                                                    <td><?php echo $puf[0]['channel'] ?></td>
                                                    <td><?php echo $puf[0]['outer_l'] ?></td>
                                                    <td><?php echo $puf[0]['inner_l'] ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <hr class="nomargin-top">
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <h4><strong>Contact</strong> Details</h4>
                                            <p class="nomargin nopadding">
                                                <strong>Note:</strong>
                                                Lid est laborum dolo rumes fugats.
                                            </p><br><!-- no P margin for printing - use <br> instead -->

                                            <address>
                                                PO Box 21132 <br>
                                                Vivas 2355 Australia<br>
                                                Phone: 1-800-565-2390 <br>
                                                Fax: 1-800-565-2390 <br>
                                                Email:support@yourname.com
                                            </address>
                                        </div>

                                        <div class="col-sm-6 text-right">
                                            <ul class="list-unstyled">
                                                <li><strong> Total Panels:</strong> <?php echo $puf[0]['Total_Panel_Nos'] ?></li>
                                                <li><strong>Discount:</strong> 10.0%</li>
                                                <li><strong>VAT ($6):</strong> $12.0</li>
                                                <li><strong>Grand Total:</strong> $1958.0</li>
                                            </ul>
                                        </div>
                                    </div>
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
    <script src="<?php echo base_url('public/admin/assets/plugins/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') ?>"></script>

    <!--notification js -->
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/lobibox.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notifications.min.js') ?>"></script>
    <script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notification-custom-script.js') ?>"></script>

    <script>
        function myFunction() {
            if (document.getElementById('').checked == true) {
                document.getElementById('').style.display = 'block';
            } else if (document.getElementById('').checked == true) {
                document.getElementById('').style.display = 'none';
            } else {
                document.getElementById('product').style.display = 'none';
            }
        }
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