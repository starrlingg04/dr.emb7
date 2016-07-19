<?php
	include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
	include "head.php";
	include "notification.php";
	include "menu.php";


	function proponentsForm()
	{

		echo"<div class='form-group'>
				<label class='control-label col-lg-3'>Subject Type<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<select class='form-control chzn-select'>";

							$sql_subj = mysql_query("SELECT * FROM subject");
							while ($fetch_subj = mysql_fetch_assoc($sql_subj)) {
								echo "<option>".$fetch_subj['subject']."</option>";
							}
												
		echo"			</select>
					</div>
			</div>

			<div class='form-group'>
				<label class='control-label col-lg-3'>Proponent Name<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='text' class='form-control input-sm' data-required='true' placeholder='Required Field'>
							<div class='seperator'></div>
					</div>
			</div>";
	}
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
					<div class="col-md-12">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" id="basic-constraint" data-validate="parsley" novalidate>
								<div class="panel-heading">
									Proponents Information
								</div>
								<div class="panel-body">
								<?php
									proponentsForm();
								?>
								
									
									<div class="form-group">
										<label class="control-label col-lg-3">Min Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-minlength="6" placeholder="minlenght = 6">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Max Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-maxlength="6" placeholder="maxlenght = 6">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Range Length</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-rangelength="[5,10]" placeholder="rangelength = [5,10]">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Min (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-min="6" placeholder="Min = 6">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Max (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-max="100" placeholder="Max = 100">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Range (number)</label>
										<div class="col-lg-9">
											<input type="text" class="form-control input-sm" data-range="[6, 100]" placeholder="range = [6,100]">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3">Equal To</label>
										<div class="col-lg-9">
											<input type="password" placeholder="Password" class="form-control input-sm" id="textbox1">
											<div class="seperator"></div>
											<input type="password" placeholder="Confirm Password" class="form-control input-sm" data-equalto="#textbox1">
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
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
	
	<!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
	<!-- Chosen -->
	<script src='js/chosen.jquery.min.js'></script>	

	<!-- Mask-input -->
	<script src='js/jquery.maskedinput.min.js'></script>	

	<!-- Datepicker -->
	<script src='js/bootstrap-datepicker.min.js'></script>	

	<!-- Timepicker -->
	<script src='js/bootstrap-timepicker.min.js'></script>	
	
	<!-- Slider -->
	<script src='js/bootstrap-slider.min.js'></script>	
	
	<!-- Tag input -->
	<script src='js/jquery.tagsinput.min.js'></script>	

	<!-- WYSIHTML5 -->
	<script src='js/wysihtml5-0.3.0.min.js'></script>	
	<script src='js/uncompressed/bootstrap-wysihtml5.js'></script>	

	<!-- Dropzone -->
	<script src='js/dropzone.min.js'></script>	
	
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
	<script src="js/endless/endless_form.js"></script>
	<script src="js/endless/endless.js"></script>
	
  </body>
</html>
