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
                                <li class="breadcrumb-item active" aria-current="page">Add inventory</li>

                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Add inventory</h6>
                <hr>
                <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Inventory') ?>" class="btn btn-primary" style="float:right;">List Inventory</a>
                    </div>
                    <form action="<?php echo base_url('Inventory/insert') ?>" id="inventory_form" method="post" autocomplete="off">
                        <div class="card-body">
                            <table style="width: 100%" id="tableID" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">

                                        <th>Iteam</th>
                                        <th>Unit</th>
                                        <th>Length</th>
                                        <th>Width</th>
                                        <th>Nos</th>
                                        <th>SQM</th>
                                        <th>Colour</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <input type="hidden" name="row[]" id="row1" value="1">
                                            <select name="item_name1" id="item_name1" class="form-select">
                                                <option value="">Select Product</option>
                                                <option value="R PUF PANEL SIGNATURE ROOF">R PUF PANEL SIGNATURE ROOF</option>
                                                <option value="R PUF PANEL SIGNATURE WALL">R PUF PANEL SIGNATURE WALL</option>
                                                <option value="R PUF SIGNATURE COOL ROOF">R PUF SIGNATURE COOL ROOF</option>
                                            </select>
                                        </td>
                                        <td> <select name="unit1" id="unit1" class="form-select">
                                                <option value="">Select Product</option>
                                                <option value="SQM">SQM</option>
                                                <option value="NOS">NOS</option>
                                                <option value="kg">kg</option>
                                                <option value="Meter">Meter</option>
                                            </select> </td>
                                        <td> <input type="text" class="form-control" name="length1" id="length1" value="" required placeholder="Length" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <input type="text" class="form-control" readonly name="width1" id="width1" value="1000" required placeholder="Width" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <input type="text" class="form-control" name="nos1" id="nos1" value="" required placeholder="Nos" onkeypress="return /[0-9.]/i.test(event.key)" onkeyup="get_sqm(1)"> </td>
                                        <td> <input type="text" readonly class="form-control" name="sqm1" id="sqm1" value="" required placeholder="SQM" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <input type="text" class="form-control" name="colour1" id="colour1" value="" required placeholder="Colour" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <button type="button" class="btn btn-sm btn-primary" type="button" id="add_more"><i class="bx bx-plus me-0"></i></button> </td>
                                    </tr>

                                </tbody>
                            </table>
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
        $('#add_more').on('click', function() {
            let table = document.getElementById('tableID');
            let table_lenth = (table.rows.length);
            // console.log(table_lenth);
            let id = parseInt(table_lenth);
            var div =
                `
                <td> <input type="hidden" name="row[]" id="row${id}" value="${id}">
                                            <select name="item_name${id}" id="item_name${id}" class="form-select">
                                                <option value="">Select Product</option>
                                                <option value="R PUF PANEL SIGNATURE ROOF">R PUF PANEL SIGNATURE ROOF</option>
                                                <option value="R PUF PANEL SIGNATURE WALL">R PUF PANEL SIGNATURE WALL</option>
                                                <option value="R PUF SIGNATURE COOL ROOF">R PUF SIGNATURE COOL ROOF</option>
                                            </select>
                                        </td>
                                        <td> <select name="unit${id}" id="unit${id}" class="form-select">
                                                <option value="">Select Product</option>
                                                <option value="SQM">SQM</option>
                                                <option value="NOS">NOS</option>
                                                <option value="kg">kg</option>
                                                <option value="Meter">Meter</option>
                                            </select> </td>
                                        <td> <input type="text" class="form-control" name="length${id}" id="length${id}" value="" required placeholder="Length" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <input type="text" class="form-control" readonly name="width${id}" id="width${id}" value="1000" required placeholder="Width" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                                        <td> <input type="text" class="form-control" name="nos${id}" id="nos${id}" value="" required placeholder="Nos" onkeypress="return /[0-9.]/i.test(event.key)" onkeyup="get_sqm(${id})"> </td>
                                        <td> <input type="text" class="form-control" name="sqm${id}" id="sqm${id}" value="" required placeholder="SQM" onkeypress="return /[0-9.]/i.test(event.key)" > </td>
                                        <td> <input type="text" class="form-control" name="colour${id}" id="colour${id}" value="" required placeholder="Colour" onkeypress="return /[0-9.]/i.test(event.key)"> </td>
                        <td>  <button type="button" onclick="deleterow(${id})" class="btn btn-outline-danger" onclick="return confirm('Do you want delete this record?')"><i class="bx bx-trash me-0"></i></button> </td>
                        `;

            var row = table.insertRow(table_lenth).outerHTML = '<tr id="row' + id + '" >' + div + '</tr>';

        });

        function deleterow(id) {
            let table = document.getElementById('tableID');
            let row_count = (table.rows.length);
            $('#row' + id + '').html("");
        }

        function get_sqm(id) {
            let length = $('#length' + id).val();
            let nos = $('#nos' + id).val();
            let sqm = (parseInt(length) * parseInt(nos)) / 1000;
            $('#sqm' + id).val(sqm);
        }

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