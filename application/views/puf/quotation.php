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
    <title> Quotation</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Quotation
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <h6 class="mb-0 text-uppercase">Quotation</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table  table-bordered dataTable" role="grid" aria-describedby="example2_info">
                                            <tr>
                                                <td colspan="10" style="text-align:center">Signature</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <p>UMA SIGNATURE PUF PANEL LLP</p>
                                                    <p>SURVEY NO:158/1,AT:-DHANORA,MANGLEJ-NARESHWAR ROAD,</p>
                                                    <p>TA:-KARJAN,VADODARA:-391210,GUJARAT</p>
                                                </td>
                                                <td colspan="5">
                                                    <p>EMAIL:info@signaturepufpanel.com</p>
                                                    <p>umapufpanel@gmail.com</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><b><u>GSTIN:-24AAFFU905MIZS</u></b></td>
                                                <td colspan="5"><b><u>AN ISO 9001:2015 COMPANY</u></b></td>
                                            </tr>
                                            <tr>
                                                <td colspan="10" style="text-align:center"><b>QUOTATION</b></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4"></td>
                                                <td rowspan="2"><b>SRIBAL CONSTRUCTION COMPANY</b></td>
                                                <td><b>DATE</b></td>
                                                <td colspan="7"><b>13/05/23</b></td>
                                            </tr>
                                            <tr>
                                                <td><b>REF NO</b></td>
                                                <td colspan="7"><b>SRIBAC</b></td>
                                            </tr>
                                            <tr>
                                                <td>COPERATION NAME</td>
                                                <td rowspan="2">PFI NO</td>
                                                <td rowspan="2" colspan="7"></td>
                                            </tr>
                                            <tr>
                                                <td>+91-9428334581</td>
                                            </tr>
                                            <tr>
                                                <td><b><u>GSTIN</u></b></td>
                                                <td colspan="7"></td>
                                                <td colspan="3"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="9"></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2"><b>Sr.NO</b></td>
                                                <td rowspan="2"><b>Description of the items</b></td>
                                                <td rowspan="2"><b>PRODUCT IMAGE</b> </td>
                                                <td rowspan="2"><b>APPROX QTY</b></td>
                                                <td rowspan="2"><b>U.M.</b></td>
                                                <td colspan="3">Nett Rate</td>
                                                <td colspan="3">Total Amt</td>
                                            </tr>
                                            <tr>
                                                <td>Rs.</td>
                                                <td>Ps.</td>
                                                <td>Rs.</td>
                                                <td colspan="2">Ps.</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6">1</td>
                                                <td>
                                                    <p>SUPPLY OF SIGNATURE MAKE CONTINOUS LINE</p>
                                                    <p>R PIR PANEL ROOF OF 30 MM THICK </p>
                                                </td>
                                                <td rowspan="2">
                                                    some image
                                                </td>
                                                <td rowspan="6">598.00</td>
                                                <td rowspan="6">SQM</td>
                                                <td rowspan="6">1050</td>
                                                <td rowspan="6">00</td>
                                                <td rowspan="6">627900</td>
                                                <td rowspan="6">00</td>
                                            </tr>
                                            <tr>
                                                <td> PIR DENSITY:-45(+/-2)KG/C.M3</td>
                                            </tr>
                                            <tr>
                                                <td>TOP SKIN :</td>
                                                <td rowspan="4">HSN CODE 3925910</td>
                                            </tr>

                                            <tr>
                                                <td> BOTTOM SKIN</td>
                                            </tr>
                                            <tr>
                                                <td> SIZE </td>
                                            </tr>
                                            <tr>
                                                <td>AS PER BAQ</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6">2</td>
                                                <td>
                                                    <p>SUPPLY OF SIGNATURE MAKE CONTINOUS LINE</p>
                                                    <p>R PIR PANEL ROOF OF 30 MM THICK </p>
                                                </td>
                                                <td rowspan="2">
                                                    some image
                                                </td>
                                                <td rowspan="6">598.00</td>
                                                <td rowspan="6">SQM</td>
                                                <td rowspan="6">1050</td>
                                                <td rowspan="6">00</td>
                                                <td rowspan="6">627900</td>
                                                <td rowspan="6">00</td>

                                            </tr>
                                            <tr>
                                                <td> PIR DENSITY:-45(+/-2)KG/C.M3</td>
                                            </tr>
                                            <tr>
                                                <td>TOP SKIN :</td>
                                                <td rowspan="4">HSN CODE 3925910</td>
                                            </tr>

                                            <tr>
                                                <td> BOTTOM SKIN</td>
                                            </tr>
                                            <tr>
                                                <td> SIZE </td>
                                            </tr>
                                            <tr>
                                                <td>AS PER BAQ</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>GI ACCESSORIES / FLASHING</td>
                                                <td></td>
                                                <td>1099.60</td>
                                                <td>SQM</td>
                                                <td>150</td>
                                                <td>00</td>
                                                <td>16494</td>
                                                <td>00</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>INSTALLATION(INCLUDING SILICON AND SQREW)</td>
                                                <td></td>
                                                <td>1099.60</td>
                                                <td>SQM</td>
                                                <td>150</td>
                                                <td>00</td>
                                                <td>16494</td>
                                                <td>00</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td colspan="3">TOTAL</td>
                                                <td>172778</td>
                                                <td>00</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="5">TRANSPORTATION EXTRA</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="5">GST@18%</td>
                                                <td>310991</td>
                                                <td>00</td>
                                            </tr>
                                            <tr>
                                                <td>PTO</td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="4">GRAND TOTAL</td>
                                                <td>2038719</td>
                                                <td>00</td>
                                            </tr>
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