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
    <title>Staff Edit</title>
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
                    <div class="breadcrumb-title pe-3">Staff</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Staff</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Edit Staff</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Role/staff_list') ?>" class="btn btn-primary" style="float:right;">List Staff</a>
                    </div>
                    <form action="<?php echo base_url('Role/staff_update') ?>" id="staff_form" method="post" autocomplete="off">
                        <input type="hidden" name="update_id" id="update_id" value="<?php echo $staff[0]['staff_id']; ?>">
                        <div class="card-body">
                            <div class="col-md-12 row">

                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Name <span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $staff[0]['name'];  ?>">
                                </div>

                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Role <span style="color:red;font-weight:bolder">*</span></label>
                                    <select name="role" id="role" class="form-select" required="">
                                        <option selected="" disabled="">Select Role</option>
                                        <?php foreach ($roles as $role) { ?>
                                            <option <?php if ($staff[0]['role_id'] == $role['role_id']) {
                                                        echo 'selected';
                                                    } ?> value="<?php echo $role['role_id']; ?>"><?php echo $role['role']; ?></option>
                                        <?php }  ?>
                                    </select>
                                </div>


                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Email <span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $staff[0]['email'];  ?>">
                                </div>


                                <!-- <div class="form-group col-md-6 p-2">
                                    <label for="role">Password <span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" value="">
                                </div> -->
                                <div class="form-group col-md-6  p-2">
                                    <label for="role">Phone <span style="color:red;font-weight:bolder">*</span></label>
                                    <br>
                                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $staff[0]['phone'];  ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="11" maxlength="10">

                                </div>

                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Gender <span style="color:red;font-weight:bolder">*</span></label>
                                    <br>
                                    <input class="form-check-input" <?php if ($staff[0]['gender'] == 'Male') {
                                                                        echo 'checked';
                                                                    } ?> type="radio" name="gender" value="Male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                    <input class="form-check-input" <?php if ($staff[0]['gender'] == 'Female') {
                                                                        echo 'checked';
                                                                    } ?> type="radio" name="gender" value="Female">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>

                                <div class="form-group col-md-12 p-2">
                                    <label for="role">Address <span style="color:red;font-weight:bolder">*</span></label>
                                    <textarea name="address" id="address" cols="30" rows="4" class="form-control"><?php echo $staff[0]['address']; ?></textarea>
                                </div>

                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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

    <!-- Js Validation -->
    <script src="<?php echo base_url('public/admin/assets/plugins/validation/jquery.validate.min.js')  ?>"></script>
    <script>
        // $.validator.setDefaults({
        //     submitHandler: function() {
        //         alert("submitted!");
        //     }
        // });

        $(document).ready(function() {
            $("#staff_form").validate({
                rules: {
                    name: "required",
                    role: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    // password: {
                    //     required: true,
                    //     minlength: 5
                    // },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    gender: "required",
                    address: "required",
                },
                messages: {
                    name: "Please enter your your name",
                    role: "Please select a Role",
                    email: "Please enter a valid email address",
                    // password: {
                    //     required: "Please provide a password",
                    //     minlength: "Your password must be at least 5 characters long"
                    // },
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Your phone number  must be at least 10 digits",
                        minlength: "Your phone number  greated than 10 digits",
                    },
                    gender: 'Please select Gender',
                    address: "Please type your message",
                },
            });
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