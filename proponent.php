<!DOCTYPE html>
<html lang="en">
<?php
	include "head.php";
?>
<body class="overflow-hidden">
	<div id="overlay" class="transparent"></div>
	<a href="#" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
			<a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
			<a class="theme-color" style="background:#495B6C" id="skin-6"></a>
		</div>
		<div class="title">
			<strong class="no-margin">Sidebar Menu</strong>
		</div>
		<div class="theme-box">
			<label class="label-checkbox">
				<input type="checkbox" checked id="fixedSidebar">
				<span class="custom-checkbox"></span>
				Fixed Sidebar
			</label>
		</div>
	</div>
	
	<div id="wrapper" class="preload">
		<div id="top-nav" class="fixed skin-6">
			<a href="#" class="brand">
				<span>EMB7</span>
				<span class="text-toggle"> Doc. Routing</span>
			</a><!-- /brand -->					
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		 <?php
		 	include "notification.php";
		 	echo"</div>";
		 	include "profile_side.php";
		 ?>

		<div id="main-container">
			<div class="padding-md">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" id="basic-constraint" data-validate="parsley" novalidate>
								<div class="panel-heading">
									Proponents Information
								</div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Proponent Name<font color='red'>*</font></label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-required="true" placeholder="Required Field">
											<div class="seperator"></div>
										</div>
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Min Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-minlength="6" placeholder="minlenght = 6">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Max Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-maxlength="6" placeholder="maxlenght = 6">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Range Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-rangelength="[5,10]" placeholder="rangelength = [5,10]">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Min (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-min="6" placeholder="Min = 6">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Max (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-max="100" placeholder="Max = 100">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Range (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-range="[6, 100]" placeholder="range = [6,100]">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Equal To</label>
										<div class="col-lg-9">
											<input type="password" placeholder="Password" class="form-control input-sm" id="textbox1">
											<div class="seperator"></div>
											<input type="password" placeholder="Confirm Password" class="form-control input-sm" data-equalto="#textbox1">
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div><!-- /.col-->
					<div class="col-md-6">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" id="type-constraint" data-validate="parsley" novalidate>
								<div class="panel-heading">
									Type Constraints
								</div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-lg-3">Email</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="email" placeholder="Email Address">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Url</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="url" placeholder="Url">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Url Strict</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="urlstrict" placeholder="http://yoursite.com/">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Digits</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="digits" placeholder="Digits">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Number</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="number" placeholder="Number">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Alphanum</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="alphanum" placeholder="alphanumeric string">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Min Words</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-minwords="6" placeholder="Min = 6 words">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Max Words</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-maxwords="6" placeholder="Max = 6 words">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Date Iso</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="dateIso" placeholder="YYYY-MM-DD">
										</div><!-- /.col -->
									</div><!-- /form-group -->
									<div class="form-group">
										<label class="control-label col-lg-3">Phone</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-type="phone" placeholder="(XXX) XXXX XXX">
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div><!-- /panel -->
					</div><!-- /.col-->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	<a href="#" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
	<!-- Logout confirmation -->
	<div class="custom-popup width-100" id="logoutConfirm">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="login.html">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div>
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<!-- Jquery -->
	<script src="js/jquery-1.10.2.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
	<!-- Parsley -->
	<script src="js/parsley.min.js"></script>
	
	<!-- Modernizr -->
	<script src='js/modernizr.min.js'></script>
	
	<!-- Pace -->
	<script src='js/pace.min.js'></script>
	
	<!-- Popup Overlay -->
	<script src='js/jquery.popupoverlay.min.js'></script>
	
	<!-- Slimscroll -->
	<script src='js/jquery.slimscroll.min.js'></script>
	
	<!-- Cookie -->
	<script src='js/jquery.cookie.min.js'></script>

	<!-- Endless -->
	<script src="js/endless/endless_wizard.js"></script>
	<script src="js/endless/endless.js"></script>
	
  </body>

<!-- Mirrored from minetheme.com/Endless1.5.1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 08:52:05 GMT -->
</html>
