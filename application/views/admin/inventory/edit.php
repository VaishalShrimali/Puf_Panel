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
    <title> Inventory</title>
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
                    <div class="breadcrumb-title pe-3"> Inventory</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit inventory</li>

                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Edit inventory</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Inventory') ?>" class="btn btn-primary" style="float:right;">List Inventory</a>
                    </div>
                    <form action="<?php echo base_url('Inventory/update') ?>" id="inventory_form" method="post" autocomplete="off">
                        <input type="hidden" class="form-control" name="update_id" id="update_id" value="<?php echo $inventory[0]['inventory_id'];  ?>">
                        <div class="card-body">
                            <div class="col-md-12 row">

                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Raw Matrial <span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="raw_matrial" id="raw_matrial" value="<?php echo $inventory[0]['raw_matrial'];  ?>">
                                </div>

                                <div class="form-group col-md-6 p-2">
                                    <label for="role">Size <span style="color:red;font-weight:bolder">*</span></label>
                                    <input type="text" class="form-control" name="size" id="size" value="<?php echo $inventory[0]['size'];  ?>">
                                </div>

                                <div class="form-group col-md-6  p-2">
                                    <label for="role">Meters<span style="color:red;font-weight:bolder">*</span></label>
                                    <br>
                                    <input class="form-control" type="text" name="meters" id="meters" value="<?php echo $inventory[0]['meters'];  ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                </div>
                                <div class="form-group col-md-6  p-2">
                                    <label for="role">Quantity<span style="color:red;font-weight:bolder">*</span></label>
                                    <br>
                                    <input class="form-control" type="text" name="quntity" id="quantity" value="<?php echo $inventory[0]['quantity'];  ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
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
        $(document).ready(function() {
            $("#inventory_form").validate({

                rules: {
                    raw_matrial: "required",
                    size: "required",
                    meters: "required",
                    quntity: "required"
                },
                messages: {
                    raw_matrial: "Please enter  Raw Matrial",
                    size: "Please select a size",
                    quntity: "Please enter a quntity",

                },
            });
        });


        function checkdata() {
            let phone = $('#phone').val();
            // console.log(phone);
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('Booking/checkdata') ?>',
                data: {
                    phone: phone,
                    email: email
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data.email_status);
                    if (data.email_status == 'false') {
                        alert('This Email is already exits! ')
                    }

                    if (data.phone_status == 'false') {
                        alert('This Phone Number is already exits! ')
                    }
                }
            })
        }
    </script>

    <script>
        function getproducttotalprice(value) {
            let quntity = document.getElementById('quntity').value;
            console.log(quntity);
            let price = document.getElementById('price').value;
            console.log(price);
            let m = quntity * price;
            console.log(m);
            document.getElementById('t_price').value = m;
            //  m.innerHTML =  ;

            // document.getElementById('t_price').show(count.value);
            //  document.write(count);


        }
    </script>
    <script>
        function get_price() {
            let product_id = $('#product1').val();
            let size = $('#product1').val();
            let sizenumber = $('#product1').val();
            //  alert(product_id);
            $.ajax({
                url: '<?php echo base_url('inventory/get_price'); ?>',
                type: 'GET',
                data: {
                    product_id: product_id

                },
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    console.log(data[0]['product_price']);
                    var price = data[0].product_cost;
                    var price1 = data[0].size;
                    var price2 = data[0].size_number;
                    $('#price').val(price);
                    $('#size').val(price1);
                    $('#size_number').val(price2);
                    checkdata(product_id);
                }
            });

        }
    </script>

    <script>
        $.confirm({
            title: 'Encountered an error!',
            content: 'Something went downhill, this may be serious',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Try again',
                    btnClass: 'btn-red',
                    action: function() {}
                },
                close: function() {}
            }
        });
    </script>


</body>

</html>