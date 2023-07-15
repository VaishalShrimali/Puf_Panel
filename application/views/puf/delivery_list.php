<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo base_url('public/admin/assets/images/favicon-32x32.png') ?>" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/plugins/notifications/css/lobibox.min.css') ?>" />
    <link href="<?php echo base_url('public/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" />
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
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/dark-theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/semi-dark.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/header-colors.css') ?>" />
    <title> Delivery</title>
</head>

<body>
    <div class="wrapper">
        <?php $this->load->view('layouts/sidebar')  ?>
        <!--end sidebar wrapper -->
        <!--start header -->
        <?php $this->load->view('layouts/header')  ?>
        <div class="row"></div>
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"> Puf</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Delivery
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Delivery</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table  table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <th>Sr_no</th>
                                                <th>Quotation</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Quotation 1 </td>
                                                    <td> <a type="button" href="<?php echo base_url('Puf/Deleivery') ?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Invoice"><i class="lni lni-certificate"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Quotation 2 </td>
                                                    <td> <a type="button" href="<?php echo base_url('Puf/Deleivery') ?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Invoice"><i class="lni lni-certificate"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Quotation 3 </td>
                                                    <td> <a type="button" href="<?php echo base_url('Puf/Deleivery') ?>" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Invoice"><i class="lni lni-certificate"></i>
                                                    </td>
                                                </tr>

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
</body>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2022. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
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

<!-- Js Validation -->
<script src="<?php echo base_url('public/admin/assets/plugins/validation/jquery.validate.min.js') ?>"></script>

</html>