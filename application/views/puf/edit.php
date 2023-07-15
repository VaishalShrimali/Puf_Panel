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
    <title> Puf Add</title>
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
                <!-- breadcrumb
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3"> Puf</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Order</li>
                            </ol>
                        </nav>
                    </div>

                </div> -->
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">BOQ SHEET</h6>
                <hr>
                <form action="<?php echo base_url('Puf/update');  ?> " id="inventory_form" method="post" autocomplete="off">
                    <input type="hidden" name="update_id" id="update_id" value="<?php echo $puf[0]['id'] ?>">
                    <div class="table-responsive">
                        <table style="background-color: white;">
                            <table class="table  mb-0" style="">
                                <thead>
                                    <tr class="col-md-12">
                                        <th class="col-md-2" style="text-align: center;">
                                            <img src="<?php echo base_url('public/admin/assets/images/logo-icon.png') ?>" alt="" srcset="" height="50px">
                                        </th>
                                        <th class="col-md-5" style="text-align: center;font-family:Times New Roman, Times, serif;">
                                            <h3>BOQ</h3>
                                        </th>
                                        <th class="col-md-5" style="text-align: center;" scope="col">
                                            <h3><?php echo $puf[0]['boq_date'] ?></h3>
                                        </th>

                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-3" style="text-align: center;">
                                            <h3>SCP125648</h3>
                                        </td>
                                        <td class="col-md-9" width="10%" style="text-align: center;" colspan="2">
                                            <div class="row col-md-12">
                                                <div class="col-md-6">
                                                    <div class="row col-sm-12">

                                                        <div class="form-group col-md-8">
                                                            <label for="role">Customer<span style="color:red;font-weight:bolder">*</span></label>
                                                            <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                            <select name="customer" id="customer" class="form-select">
                                                                <option selected="" disabled="">--Select--</option>
                                                                <?php foreach ($customer as $cus) { ?>
                                                                    <option <?php if ($puf[0]['cname'] == $cus['id']) {
                                                                                echo 'selected';
                                                                            } ?> value="<?php echo $cus['id']; ?>"><?php echo $cus['cname']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="role"></label><br>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add Customer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row col-sm-12">
                                                        <div class="form-group col-sm-4">
                                                            <label for="role">CELLO TAP<span style="color:red;font-weight:bolder">*</span></label>
                                                            <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                            <select name="ctap" id="ctap" class="form-select">
                                                                <option selected="" disabled="">--Select--</option>
                                                                <option <?php if ($puf[0]['ctp'] == 'SIGN') {
                                                                            echo 'selected';
                                                                        } ?> value="SIGN">SIGN</option>
                                                                <option <?php if ($puf[0]['ctp'] == 'PLAIN') {
                                                                            echo 'selected';
                                                                        } ?> value="PLAIN">PLAIN</option>
                                                            </select>
                                                            <div class=text-danger><?php echo form_error('ctap'); ?></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="role">GUARD FILM<span style="color:red;font-weight:bolder">*</span></label>
                                                            <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                            <select name="gfilm" id="gfilm" class="form-select">
                                                                <option selected="" disabled="">--Select--</option>
                                                                <option <?php if ($puf[0]['gfilm'] == 'YES') {
                                                                            echo 'selected';
                                                                        } ?> value="YES">YES</option>
                                                                <option <?php if ($puf[0]['gfilm'] == 'NO') {
                                                                            echo 'selected';
                                                                        } ?> value="NO">NO</option>
                                                            </select>
                                                            <div class=text-danger><?php echo form_error('gfilm'); ?></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="role">SURFACE<span style="color:red;font-weight:bolder">*</span></label>
                                                            <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                            <select name="surface" id="surface" class="form-select">
                                                                <option selected="" disabled="">--Select--</option>
                                                                <option <?php if ($puf[0]['surface'] == 'RIBBED') {
                                                                            echo 'selected';
                                                                        } ?> value="RIBBED">RIBBED</option>
                                                                <option <?php if ($puf[0]['surface'] == 'PLAIN') {
                                                                            echo 'selected';
                                                                        } ?> value="PLAIN">PLAIN</option>
                                                            </select>
                                                            <div class=text-danger><?php echo form_error('ribb'); ?></div>
                                                        </div>

                                                    </div>



                                                </div>




                                            </div>

                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <table style="width: 100%" id="tableID" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr role="row">


                                                        <th>Puf Panel</th>
                                                        <th>PUf Thickness</th>
                                                        <th>Top Skin</th>
                                                        <th>Bottom Skin</th>
                                                        <th>Length(MM)</th>
                                                        <th>Width(MM)</th>
                                                        <th>SQM</th>
                                                        <th>Nos</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($lwst != '') {
                                                        $id = 1;
                                                        for ($i = 0; $i < count($lwst); $i++) { ?>
                                                            <tr id="row1">

                                                                <td>
                                                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                    <select name="puf_panel1" id="puf_panel1" class="form-select" onchange="get_thickness(1);">
                                                                        <!-- <input type="hidden" name="len_row[]" value="1"> -->
                                                                        <option selected="" disabled="">Select Puf Panel
                                                                        </option>
                                                                        <?php foreach ($panel as $p) { ?>
                                                                            <option <?php if ($lwst[$i]['puf_panel'] == $p['panel_id']) {
                                                                                        echo 'selected';
                                                                                    } ?> value="<?php echo $p['panel_id']; ?>">
                                                                                <?php echo $p['panel_name']; ?>
                                                                            </option>
                                                                        <?php }  ?>
                                                                    </select>

                                                                    <div class=text-danger>
                                                                        <?php echo form_error('puf_panel'); ?>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                    <select name="puf_thickness1" id="puf_thickness1" class="form-select">
                                                                        <option selected="" disabled="">Select Puf Panel
                                                                        </option>
                                                                        <?php foreach ($thick as $p) { ?>
                                                                            <option <?php if ($lwst[$i]['puf_thickness'] == $p['Thickness_id']) {
                                                                                        echo 'selected';
                                                                                    }  ?> value="<?php echo $p['Thickness_id']; ?>">
                                                                                <?php echo $p['Thickness']; ?>
                                                                            </option>

                                                                        <?php }  ?>

                                                                    </select>
                                                                    <div class=text-danger>
                                                                        <?php echo form_error('puf_thickness'); ?>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                    <select name="puf_skin1" id="puf_skin1" class="form-select">
                                                                        <option selected="" disabled="">Select Top Skin
                                                                        </option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.3mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.3mm PPGI SHEET">0.3mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.35mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.35mm PPGI SHEET"> 0.35mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.40mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.40mm PPGI SHEET">0.40mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.45mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.45mm PPGI SHEET">0.45mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.50mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.50mm PPGI SHEET">0.50mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.60mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.60mm PPGI SHEET">0.60mm PPGI SHEET,</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == 'ALUMINIUM FOIL') {
                                                                                    echo 'selected';
                                                                                } ?> value="ALUMINIUM FOIL">ALUMINIUM FOIL</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == 'LDPE PLASTIC') {
                                                                                    echo 'selected';
                                                                                } ?> value="LDPE PLASTIC">LDPE PLASTIC</option>

                                                                    </select>
                                                                    <div class=text-danger>
                                                                        <?php echo form_error('puf_skin'); ?>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                    <select name="puf_measure1" id="puf_measure1" class="form-select">
                                                                        <option selected="" disabled="">Select Bottom skin
                                                                        </option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.3mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.3mm PPGI SHEET">0.3mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.35mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.35mm PPGI SHEET"> 0.35mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.40mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.40mm PPGI SHEET">0.40mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.45mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.45mm PPGI SHEET">0.45mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.50mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.50mm PPGI SHEET">0.50mm PPGI SHEET</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == '0.60mm PPGI SHEET') {
                                                                                    echo 'selected';
                                                                                } ?> value="0.60mm PPGI SHEET">0.60mm PPGI SHEET,</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == 'ALUMINIUM FOIL') {
                                                                                    echo 'selected';
                                                                                } ?> value="ALUMINIUM FOIL">ALUMINIUM FOIL</option>
                                                                        <option <?php if ($lwst[$i]['puf_skin'] == 'LDPE PLASTIC') {
                                                                                    echo 'selected';
                                                                                } ?> value="LDPE PLASTIC">LDPE PLASTIC</option>
                                                                    </select>
                                                                    <div class=text-danger>
                                                                        <?php echo form_error('puf_measure'); ?>
                                                                    </div>
                                                                </td>
                                                                <td> <input type="text" class="form-control" name="length(mm)<?= $id ?>" id="length(mm)<?= $id ?>" value="<?= $lwst[$i]['length'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <input type="hidden" name="row[]" id="row" value="<?= $id ?>">
                                                                    <div class=text-danger><?php echo form_error('length(mm)'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="width(mm)<?= $id ?>" id="width(mm)<?= $id ?>" value="1000" readonly>
                                                                    <div class=text-danger><?php echo form_error('length(mm)'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="sqm(mm)<?= $id ?>" id="sqm(mm)<?= $id ?>" value="<?= $lwst[$i]['sqm'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <div class=text-danger><?php echo form_error('sqm(mm)'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="total_panel<?= $id ?>" id="total_panel<?= $id ?>" value="<?= $lwst[$i]['nospanel'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <div class=text-danger><?php echo form_error('total_panel'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" style="display: <?php $id == 1 ?  print('block') : print('none');   ?>;" class="btn btn-primary" onclick="addschedule()">
                                                                        Add
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" onclick="removeschedule(<?= $id ?>)">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                    <?php $id++;
                                                        }
                                                    } ?>

                                                </tbody>

                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <table style="width: 100%" id="tableID2" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>C_Channel(M)</th>
                                                        <th>L_Inner(M)</th>
                                                        <th>L_Outer(M)</th>
                                                        <th>Other Items</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($coio != '') {
                                                        $id = 1;
                                                        for ($i = 0; $i < count($coio); $i++) { ?>
                                                            <tr id="c_panel_row1">
                                                                <td>
                                                                    <input type="text" class="form-control" name="c_channel<?= $id ?>" id="c_channel<?= $id ?>" value="<?= $coio[$i]['channel'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <input type="hidden" name="c_panel_row[]" value="1">
                                                                    <div class=text-danger><?php echo form_error('c_channel'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="l_inner<?= $id ?>" id="l_inner<?= $id ?>" value="<?= $coio[$i]['inner'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <div class=text-danger><?php echo form_error('l_inner'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="l_outer<?= $id ?>" id="l_outer<?= $id ?>" value="<?= $coio[$i]['outer'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <div class=text-danger><?php echo form_error('l_outer'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control" name="other_items<?= $id ?>" id="other_items<?= $id ?>" value="<?= $coio[$i]['other'] ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                    <div class=text-danger><?php echo form_error('other_items'); ?></div>
                                                                </td>
                                                                <td>
                                                                    <button type="button" style="display: <?php $id == 1 ?  print('block') : print('none');   ?>;" class="btn btn-primary" onclick="add_measure()">
                                                                        Add
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" onclick="removespanel(<?= $id ?>)">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                    <?php $id++;
                                                        }
                                                    } ?>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-9" width="10%" style="text-align: center;" colspan="4">
                                            <div class="row col-sm-12">

                                                <div class="form-group col-sm-2">
                                                    <label for="role">Transporter Name<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="transporter_name" id="transporter_name" value="<?php echo $puf[0]['transporter_name']; ?>">
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label for="role">Vehicle No<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="vehicle_no" id="vehicle_no" value="<?php echo $puf[0]['vehicle_no']; ?>">
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label for="role">Mobile No<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="<?php echo $puf[0]['mobile_no']; ?>" onkeypress="return /[0-9.]/i.test(event.key)">
                                                </div>
                                                <div class="form-group col-sm-1">
                                                    <label for="role">Dispath By<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="dispatch_by" id="dispatch_by" value="<?php echo $puf[0]['dispath_by']; ?>">
                                                </div>
                                                <div class="form-group col-sm-1">
                                                    <label for="role">Time<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="dispatch_time" id="dispatch_time" value="<?php echo $puf[0]['dispath_time']; ?>">
                                                </div>

                                                <div class="form-group col-sm-2">
                                                    <label for="role">Dispath Date<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="date" class="form-control" name="dispatch_date" id="dispatch_date" value="<?php echo $puf[0]['dispath_date']; ?>">
                                                </div>
                                                <div class="form-group col-sm-1">
                                                    <label for="role">Total Panel<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="grand_total_panel" id="grand_total_panel" value="<?php echo $puf[0]['total_panel']; ?>" onclick="gettotalpanel()">
                                                </div>
                                                <div class="form-group col-sm-1">
                                                    <label for="role">Total SQM<span style="color:red;font-weight:bolder">*</span></label>
                                                    <input type="text" class="form-control" name="total_sqm" id="total_sqm" value="<?php echo $puf[0]['total_sqm']; ?>">
                                                </div>
                                            </div>
                                        </td>
                                        <!-- <td class="col-md-2" style="text-align: center;">

                                        </td>
                                        <td class="col-md-2" style="text-align: center;">

                                        </td> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr> -->
                                </tbody>
                            </table>
                        </table>
                    </div>
                    <div class="footer">

                        <button type="submit" id="submit" class="btn btn-primary ">Submit</button>

                    </div>

                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="" id="customer_form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Customer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="">Name <span style="color : red;">*</span></label>
                                                        <input type="text" name="customer_name" id="customer_name" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">Email</label>
                                                        <input type="email" name="customer_email" id="customer_email" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="">Phone Number <span style="color : red;">*</span></label>
                                                        <input type="text" name="customer_phone_no" id="customer_phone_no" value="" class="form-control" onkeypress="return /[0-9.]/i.test(event.key)">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">Address</label>
                                                        <textarea name="customer_address" id="customer_address" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="add_customer">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>








                </form>
                <!-- <div class="card">
                    <div class="card-header text-left">
                        <a href="<?php echo base_url('Puf/list') ?>" class="btn btn-primary" style="float:right;">List Puf</a>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div> -->
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
        $('#add_customer').on('click', function() {
            let name = $('#customer_name').val();
            let email = $('#customer_email').val();
            let phone = $('#customer_phone_no').val();
            let address = $('#customer_address').val();

            $.ajax({
                url: '<?php echo base_url('Puf/add_customer') ?>',
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#exampleVerticallycenteredModal').modal('toggle');
                    $('#customer_name').val('');
                    $('#customer_email').val('');
                    $('#customer_phone_no').val('');
                    $('#customer_address').val('');
                    if (data.msg['icon'] == 'success') {

                        let length = data.customer_data.length;
                        var html = '';
                        html += `<option value="">Select Customer</option>`;
                        for (i = 0; i < length; i++) {
                            html += `<option value="${data.customer_data[i]['id']}">${data.customer_data[i]['cname']}</option>`;
                        }

                        $('#customer').html(html);
                        Lobibox.notify(data.msg['icon'], {
                            pauseDelayOnHover: true,
                            icon: 'bx bx-check-circle',
                            continueDelayOnInactiveTab: false,
                            position: 'top right',
                            size: 'mini',
                            msg: data.msg['msg']
                        });

                    }
                }

            });
        })

        function get_thickness(id) {
            let puf_panel = $('#puf_panel' + id).val();
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

                    $('#puf_thickness' + id).html(html);
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

        function addschedule() {
            let table = document.getElementById('tableID');
            let table_lenth = (table.rows.length);
            let id = parseInt(table_lenth);

            var div = `
            
            
                                                            
                                                            <td>
                                                                <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                <select name="puf_panel${id}" id="puf_panel${id}" class="form-select" onchange="get_thickness(${id});get_measure();">
                                            
                                                                    <option selected="" disabled="">Select Puf Panel</option>
                                                                    <?php foreach ($panel as $p) { ?>
                                                                        <option value="<?php echo $p['panel_id']; ?>"><?php echo $p['panel_name']; ?></option>
                                                                    <?php }  ?>
                                                                </select>
                                                                <div class=text-danger><?php echo form_error('puf_panel'); ?></div>
                                                            </td>
                                                            <td> 
                                                                <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                <select name="puf_thickness${id}" id="puf_thickness${id}" class="form-select">
                                                                    <option selected="" disabled="">Select Puf Panel</option>
                                                                   
                                                                </select>
                                                                <div class=text-danger><?php echo form_error('puf_thickness'); ?></div>
                                                            </td>
                                                            <td>
                                                                <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                <select name="puf_skin${id}" id="puf_skin${id}" class="form-select">
                                                                    <option selected="" disabled="">Select Top Skin</option>
                                                                    <option value="0.3mm PPGI SHEET">0.3mm PPGI SHEET</option>
                                                                    <option value=" 0.35mm PPGI SHEET"> 0.35mm PPGI SHEET</option>
                                                                    <option value="0.40mm PPGI SHEET">0.40mm PPGI SHEET</option>
                                                                    <option value="0.45mm PPGI SHEET">0.45mm PPGI SHEET</option>
                                                                    <option value="0.50mm PPGI SHEET">0.50mm PPGI SHEET</option>
                                                                    <option value="0.60mm PPGI SHEET,">0.60mm PPGI SHEET,</option>
                                                                    <option value="ALUMINIUM FOIL">ALUMINIUM FOIL</option>
                                                                    <option value="LDPE PLASTIC">LDPE PLASTIC</option>
                                                                </select>
                                                                <div class=text-danger><?php echo form_error('puf_skin'); ?></div>
                                                            </td>
                                                            <td>
                                                                <!--  <input type="text" class="form-control" name="name" id="name" value=""> -->
                                                                <select name="puf_measure${id}" id="puf_measure${id}" class="form-select">
                                                                    <option selected="" disabled="">Select Bottom skin</option>
                                                                    <option value="0.3mm PPGI SHEET">0.3mm PPGI SHEET</option>
                                                                    <option value=" 0.35mm PPGI SHEET"> 0.35mm PPGI SHEET</option>
                                                                    <option value="0.40mm PPGI SHEET">0.40mm PPGI SHEET</option>
                                                                    <option value="0.45mm PPGI SHEET">0.45mm PPGI SHEET</option>
                                                                    <option value="0.50mm PPGI SHEET">0.50mm PPGI SHEET</option>
                                                                    <option value="0.60mm PPGI SHEET,">0.60mm PPGI SHEET,</option>
                                                                    <option value="ALUMINIUM FOIL">ALUMINIUM FOIL</option>
                                                                    <option value="LDPE PLASTIC">LDPE PLASTIC</option>
                                                                </select>
                                                                <div class=text-danger><?php echo form_error('puf_measure'); ?></div>
                                                            </td>
                                                            <td> <input type="text" class="form-control" name="length(mm)${id}" id="length(mm)${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
            <input type="hidden" name="row[]" id="row${id}" value="${id}"> <div class=text-danger><?php echo form_error('length(mm)'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="width(mm)${id}" id="width(mm)${id}" value="1000" readonly>
                                                                <div class=text-danger><?php echo form_error('length(mm)'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="sqm(mm)${id}" id="sqm(mm)${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <div class=text-danger><?php echo form_error('sqm(mm)'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="total_panel${id}" id="total_panel${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <div class=text-danger><?php echo form_error('total_panel'); ?></div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" onclick="removeschedule(${id})">
                                                                    Delete
                                                                </button>
                                                            </td>
                                                            
                           
                                                            `;

            var row = table.insertRow(table_lenth).outerHTML = '<tr id="row' + id + '" >' + div + '</tr>'


        }

        function add_measure() {
            let table = document.getElementById('tableID2');
            let table_lenth = (table.rows.length);
            let id = parseInt(table_lenth);

            var div = `
            
            <td> 
                                                                <input type="text" class="form-control" name="c_channel${id}" id="c_channel${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <input type="hidden" name="c_panel_row[]" value="${id}"><div class=text-danger><?php echo form_error('c_channel'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="l_inner${id}" id="l_inner${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <div class=text-danger><?php echo form_error('l_inner'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="l_outer${id}" id="l_outer${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <div class=text-danger><?php echo form_error('l_outer'); ?></div>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" name="other_items${id}" id="other_items${id}" value="" onkeypress="return /[0-9.]/i.test(event.key)">
                                                                <div class=text-danger><?php echo form_error('other_items'); ?></div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" onclick="removespanel(${id})">
                                                                    Delete
                                                                </button>
                                                            </td>
                                        
                                                

                                               
                                                `;
            var row = table.insertRow(table_lenth).outerHTML = '<tr id="c_panel_row' + id + '" >' + div + '</tr>'
        }

        function removeschedule(id) {
            //alert(id)
            let table = document.getElementById('tableID');
            let row_count = (table.rows.length);
            $('#row' + id + '').html("");
        }

        function removespanel(id) {
            //alert(id)
            let table = document.getElementById('tableID2');
            let row_count = (table.rows.length);
            $('#c_panel_row' + id + '').html("");
        }

        function gettotalpanel() {
            var rows = $("#tableID tbody");
            var last_tr = rows.find('tr:last');
            console.log(last_tr[0]);
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