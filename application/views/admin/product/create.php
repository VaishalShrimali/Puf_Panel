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
                    <div class="breadcrumb-title pe-3"> Product</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>

                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Add Product</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Product') ?>" class="btn btn-primary" style="float:right;">List Product</a>
                    </div>
                    <form action="<?php echo base_url('Product/insert') ?>" id="product_form" method="post" autocomplete="off">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Product</label>
                                    <select name="product" id="product" class="form-select">
                                        <option value="">Select Product</option>
                                        <?php if ($product != '') {
                                            foreach ($product as $val) { ?>
                                                <option value="<?= $val['panel_id']; ?>"><?= $val['panel_name']; ?></option>
                                        <?php    }
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 pt-4">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#product_add_form">Add Product</button>
                                    <!-- Modal -->
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="form-group col-md-4">
                                    <label for="">Raw Matrial</label>
                                    <select name="inventory" id="inventory" class="form-select" onchange="get_raw_matrial()">
                                        <option value="">Select Raw Matrial</option>
                                        <?php if ($inventory != '') {
                                            foreach ($inventory as $val) { ?>
                                                <option value="<?= $val['inventory_id']; ?>"><?= $val['raw_matrial']; ?></option>
                                        <?php    }
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header text-left">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table style="width: 100%" id="tableID" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                                        <thead>
                                                            <tr role="row">

                                                                <th>Raw Matrial</th>
                                                                <th>Required Qty</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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



    <div class="row row-cols-auto g-3">

        <div class="col">

            <div class="modal fade" id="product_add_form" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="product_modal_form" method="post" action="">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group  col-md-12">
                                        <label for="">Product Name <span style="color: red;">*</span></label>
                                        <input type="text" name="modal_product_name" id="modal_product_name" class="form-control" value="">
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="modal_submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
            $("#product_form").validate({

                rules: {
                    product: "required",

                },
                messages: {
                    product: "Please select Product",

                },
            });
        });

        $('#modal_submit').on('click', function() {
            let product_name = $('#modal_product_name').val();
            $.ajax({
                url: '<?php echo base_url('Product/add_product') ?>',
                type: 'POST',
                data: {
                    product_name: product_name
                },
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    $('#product_add_form').modal('toggle');
                    let length = data.product.length;
                    var html = '';
                    html += `<option value="">Select Product</option>`;
                    for (i = 0; i < length; i++) {
                        html += `<option value="${data.product[i]['panel_id']}">${data.product[i]['panel_name']}</option>`;
                    }
                    $('#product').html(html);
                    Lobibox.notify(data.message['icon'], {
                        pauseDelayOnHover: true,
                        icon: 'bx bx-check-circle',
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        size: 'mini',
                        msg: data.message['msg']
                    });
                }

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

        function get_raw_matrial() {
            let raw_matrial = $('#inventory').val();
            //alert(product_cost);

            $.ajax({
                type: 'GET',
                url: '<?php echo base_url('Product/get_raw_matrial'); ?>',
                data: {
                    raw_matrial: raw_matrial
                },
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    let table = document.getElementById('tableID');
                    let table_lenth = (table.rows.length);
                    // console.log(table_lenth);
                    let id = parseInt(table_lenth);
                    var div =
                        `
                        <td> <input type="hidden" name="row[]" id="row${id}" value="${id}">
                        <input type="hidden" readonly name="raw_matrial_id${id}" id="raw_matrial_id${id}" class="form-control" placeholder="product name" value="${data[0]['inventory_id']}" required>
                        <input type="text" readonly name="product_name${id}" id="product_name${id}" class="form-control" placeholder="product name" value="${data[0]['raw_matrial']}" required> </td>
                        <td>  <input type="text"  class="form-control" name="product_qty${id}" id="product_qty${id}" value="" required placeholder="Product Cost" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                        <td>  <button type="button" onclick="deleterow(${id})" class="btn btn-outline-danger" onclick="return confirm('Do you want delete this record?')"><i class="bx bx-trash me-0"></i></button> </td>
                        `;

                    var row = table.insertRow(table_lenth).outerHTML = '<tr id="row' + id + '" >' + div + '</tr>';
                }
            })
        }

        function deleterow(id) {
            let table = document.getElementById('tableID');
            let row_count = (table.rows.length);
            $('#row' + id + '').html("");
        }
    </script>


</body>

</html>