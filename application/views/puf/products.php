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
    <title> Product Add</title>
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
                    <div class="breadcrumb-title pe-3"> Puf</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Products</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Add Products</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Puf/product_list') ?>" class="btn btn-primary" style="float:right;">List Products</a>
                    </div>
                    <form action="<?php echo base_url('Inventory/insert');  ?> " id="inventory_form" method="post" autocomplete="off">
                        <div class="card-body">
                            <div class="col-md-12 row">

                                <div class="form-group col-md-3 p-2">
                                    <label for="role">PROUDCT NAME<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="pname" id="pname" value="">
                                    <div class=text-danger><?php echo form_error('pname'); ?></div>
                                </div>

                                <div class="form-group col-md-3 p-2">
                                    <label for="role">TYPE<span style="color:red;font-weight:bolder">*</span></label>
                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                    <select name="ptype" id="ptype" class="form-select">
                                        <option selected="" disabled="">--Select--</option>
                                    </select>
                                    <div class=text-danger><?php echo form_error('ptype'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">QUANTITY<span style="color:red;font-weight:bolder">*</span></label>
                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                    <select name="pquantity" id="pquantity" class="form-select">
                                        <option selected="" disabled="">--Select--</option>
                                    </select>
                                    <div class=text-danger><?php echo form_error('pquantity'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">SIZE<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="height" id="height" value="" placeholder="Height">
                                    <div class=text-danger><?php echo form_error('height'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role"><span style="color:red;font-weight:bolder"></span></label>
                                    <input type="text" class="form-control" name="width" id="width" value="" placeholder="Width">
                                    <div class=text-danger><?php echo form_error('width'); ?></div>
                                </div>
                                <div class="form-group col-md-3 p-2">
                                    <label for="role"><span style="color:red;font-weight:bolder"></span></label>
                                    <input type="text" class="form-control" name="sqm" id="sqm" value="" placeholder="Sqm">
                                    <div class=text-danger><?php echo form_error('sqm'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-3 p-2">
                                    <label for="role">IMAGE<span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="file" class="form-control" name="file" id="file" value="" multiple accept="image/*">
                                    <div class=text-danger><?php echo form_error('height'); ?></div>
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

    <!-- Js Validation -->
    <script src="<?php echo base_url('public/admin/assets/plugins/validation/jquery.validate.min.js') ?>"></script>
    <script>
        function get_thickness() {
            let puf_panel = $('#puf_panel').val();
            // alert(puf_panel);
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('Puf/get_thickness'); ?>',
                data: {
                    puf_panel: puf_panel
                },
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var i;
                    html = '<option value="" >Select Puf Thickness*</option>'
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].panel_id + '">' + data[i].Thickness + '</option>'
                    }

                    $('#puf_thickness').html(html);
                }
            })
        }

        function get_measure() {
            let puf_thickness = $('#puf_panel').val();
            // alert(puf_thickness);
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('Puf/get_measure'); ?>',
                data: {
                    puf_panel: puf_thickness
                },
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var i;
                    html = '<option value="" >Select Bottom Skin*</option>'
                    html2 = '<option value="" >Select Top Skin*</option>'
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].panel_id + '">' + data[i].measure + '</option>'
                    }
                    for (i = 0; i < data.length; i++) {
                        html2 += '<option value="' + data[i].panel_id + '">' + data[i].measure + '</option>'
                    }

                    $('#puf_measure').html(html);
                    $('#puf_skin').html(html2);
                }
            })
        }

        $(document).ready(function() {
            $("#inventory_form").validate({

                rules: {
                    name: "required",
                    size: "required",
                    quntity: "required",
                    gender: "required",
                    address: "required",
                    price: "required",
                },
                messages: {
                    name: "Please enter  product name",
                    size: "Please select a size",
                    quntity: "Please enter a quntity",

                    ///  },

                    gender: "Please select Gender",
                    // address : "Please type your message",
                    price: "Please enter a  product price",
                },
            });
        });
    </script>

</body>

</html>