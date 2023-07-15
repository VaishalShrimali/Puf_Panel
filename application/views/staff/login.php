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
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">

									<div class="mb-3 text-center">
										<img src="<?php echo base_url('public/admin/assets/images/logo/logo.png') ?>" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Staff Login</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action="<?php echo base_url('Staff/authenticate') ?>" method="post">

											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="jhon@example.com" value="<?php echo set_value('email') ?>">
												<span style="color:red;"><?php echo form_error('email'); ?></span>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" name="password" value="<?php echo set_value('email') ?>" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
												<span style="color:red;"><?php echo form_error('password'); ?></span>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end"> <a href="<?php echo base_url('Staff/forgot_password') ?>">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											<!-- <div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div> -->
										</form>
									</div>



								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
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
	<!--Password show & hide js -->
	<script>
		$(document).ready(function() {
			$("#show_hide_password a").on('click', function(event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="<?php echo base_url('public/admin/assets/js/app.js') ?>"></script>
	<!--notification js -->
	<script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/lobibox.min.js') ?>"></script>
	<script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notifications.min.js') ?>"></script>
	<script src="<?php echo base_url('public/admin/assets/plugins/notifications/js/notification-custom-script.js') ?>"></script>

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