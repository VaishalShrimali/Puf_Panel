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
    <title>Leads</title>
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
                                <li class="breadcrumb-item active" aria-current="page"> Leads
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->


                <h6 class="mb-0 text-uppercase">add leads</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Puf/product_list') ?>" class="btn btn-primary" style="float:right;">List Leads</a>
                    </div>
                    <form action="<?php echo base_url('Inventory/insert');  ?> " id="inventory_form" method="post" autocomplete="off">
                        <div class="card-body">
                            <div class="col-md-12 row">

                                <div class="form-group col-md-3 p-2">
                                    <label for="role"> NAME<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="lname" id="lname" value="">
                                    <div class=text-danger><?php echo form_error('lname'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role"> EMAIL<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="lemail" id="lemail" value="">
                                    <div class=text-danger><?php echo form_error('lemail'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role"> PHONE NO<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="lphone" id="lphone" value="">
                                    <div class=text-danger><?php echo form_error('lphone'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">ADDRESS<span style="color:red;font-weight:bolder">*</span></label>
                                    <textarea name="address" id="address" cols="5" rows="4" class="form-control"></textarea>
                                    <div class=text-danger><?php echo form_error('address'); ?></div>
                                </div>

                                <div class="form-group col-md-3 p-2">
                                    <label for="role"> GST IN<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="gst" id="gst" value="">
                                    <div class=text-danger><?php echo form_error('gst'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">PRODUCTS<span style="color:red;font-weight:bolder">*</span></label>
                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                    <select name="lproducts" id="lproducts" class="form-select">
                                        <option selected="" disabled="">--Select--</option>
                                    </select>
                                    <div class=text-danger><?php echo form_error('lporducts'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">ASSIGN TO <span style="color:red;font-weight:bolder">*</span></label>
                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                    <select name="assign" id="assign" class="form-select">
                                        <option selected="" disabled="">--Select--</option>
                                    </select>
                                    <div class=text-danger><?php echo form_error('assign'); ?></div>
                                </div>

                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">TOTAL COST<span style="color:red;font-weight:bolder">*</span></label>
                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                    <input type="text" class="form-control" name="tcost" id="tcost" value="">
                                    <div class=text-danger><?php echo form_error('tcost'); ?></div>
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