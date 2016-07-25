<?php
	include "conn.php";
	include "functions/proponent.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
	include "head.php";
	include "notification.php";
	include "menu.php";



?>
		

	<div id="main-container">
		<div id="breadcrumb">
			<ul class="breadcrumb">
				 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
				 <li class="active">Blank page</li>	 
			</ul>
		</div>

		<div class="padding-md">
				<div class="row">
					<div class="col-md-10">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" id="basic-constraint" data-validate="parsley" novalidate>
								<div class="panel-heading">
									Proponents Information
								</div>
								<div class="panel-body">
								<?php
									proponentsForm();
								?>
							</form>
						</div>
					</div>

				</div>
			</div>
	</div>


</div>

<a href="#" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>


<div class="custom-popup width-100" id="logoutConfirm">
	<div class="padding-md">
		<h4 class="m-top-none"> Do you want to logout?</h4>
	</div>

	<div class="text-center">
		<a class="btn btn-success m-right-sm" href="login.html">Logout</a>
		<a class="btn btn-danger logoutConfirm_close">Cancel</a>
	</div>
</div>
	


	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src='js/chosen.jquery.min.js'></script>	
	<script src='js/jquery.maskedinput.min.js'></script>	
	<script src='js/bootstrap-datepicker.min.js'></script>	
	<script src='js/bootstrap-timepicker.min.js'></script>	
	<script src='js/bootstrap-slider.min.js'></script>	
	<script src='js/jquery.tagsinput.min.js'></script>	
	<script src='js/wysihtml5-0.3.0.min.js'></script>	
	<script src='js/uncompressed/bootstrap-wysihtml5.js'></script>	
	<script src='js/dropzone.min.js'></script>	
	<script src='js/modernizr.min.js'></script>
	<script src='js/pace.min.js'></script>
	<script src='js/jquery.popupoverlay.min.js'></script>
	<script src='js/jquery.slimscroll.min.js'></script>
	<script src='js/jquery.cookie.min.js'></script>
	<script src="js/endless/endless_form.js"></script>
	<script src="js/endless/endless.js"></script>
	
  </body>
</html>
