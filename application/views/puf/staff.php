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
    <title> Staff Add</title>
</head>

<body>
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
                <div class="breadcrumb-title pe-3"> Puf</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Staff</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <h6 class="mb-0 text-uppercase">Add Staff</h6>
            <hr>
            <div class="card">
                <div class="card-header text-left">
                    <a href="<?php echo base_url('Staff/staff_list') ?>" class="btn btn-primary" style="float:right;">List Staff</a>
                </div>
                <form action="<?php echo base_url('Staff/insert');  ?> " id="inventory_form" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="col-md-12 row">

                            <div class="form-group col-md-3 p-2">
                                <label for="role">NAME<span style="color:red;font-weight:bolder">*</span></label>
                                <input type="text" class="form-control" name="sname" id="sname" value="">
                                <div class=text-danger><?php echo form_error('sname'); ?></div>
                            </div>
                            <div class="form-group col-md-3 p-2">
                                <label for="role">EMAIL<span style="color:red;font-weight:bolder">*</span></label>
                                <input type="email" class="form-control" name="semail" id="semail" value="">
                                <div class=text-danger><?php echo form_error('semail'); ?></div>
                            </div>
                            <div class="form-group col-md-3 p-2">
                                <label for="role">PHONE<span style="color:red;font-weight:bolder">*</span></label>
                                <input type="email" class="form-control" name="sphone" id="sphone" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                <div class=text-danger><?php echo form_error('sphone'); ?></div>
                            </div>
                            <div class="form-group col-md-3 p-2">
                                <label for="role">ROLE<span style="color:red;font-weight:bolder">*</span></label>
                                <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                <select name="prole" id="prole" class="form-select">
                                    <option selected="" disabled="">--Select--</option>
                                </select>
                                <div class=text-danger><?php echo form_error('prole'); ?></div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" id="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
<div class="wrapper"></div>
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2022. All right reserved.</p>
</footer>
</div>

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

</html>

<!-- Js Validation -->
<script src="<?php echo base_url('public/admin/assets/plugins/validation/jquery.validate.min.js') ?>"></script>