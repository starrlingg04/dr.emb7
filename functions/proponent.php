<?php
	function proponentsForm()
	{

		echo"<div class='form-group'>
				<label class='control-label col-lg-3'>Subject Type<font color='red'>*</font></label>
					<div class='col-lg-9'>";
						$proptype = mysql_query("SELECT * FROM proponent_type");
						while ($fetch_proptype = mysql_fetch_assoc($proptype)) {
							echo"<label class='label-radio'>
										<input type='radio' name='proptype' value='".$fetch_proptype['proponent_type']."'>
										<span class='custom-radio'></span>
										".$fetch_proptype['proponent_type']."
								</label>";
						}								
		echo"		</div>
			</div>

			<div class='form-group'>
				<label class='control-label col-lg-3'>Proponent Name<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='text' name='propname' class='form-control input-sm' data-required='true' placeholder='Proponent Name'>
							<div class='seperator'></div>
					</div>
			</div>";
		echo"<div class='form-group'>
				<label class='control-label col-lg-3'>Address<font color='red'>*</font></label>
					<div class='col-lg-2'>
						<select class='form-control chzn-select' name='prop_prov'>
							<option>---Province---</option>";
							$sql_prov = mysql_query("SELECT * FROM location");
							while ($fetch_prov=mysql_fetch_assoc($sql_prov)) {
								echo"<option>".$fetch_prov['location']."</option>";
							}
										
		echo"			</select>
					</div>";
		echo"		<div class='col-lg-2'>
						<select class='form-control chzn-select' name='prop_city'>
							<option>---City---</option>";
							$sql_city = mysql_query("SELECT * FROM location_details");
							while ($fetch_city=mysql_fetch_assoc($sql_city)) {
								echo"<option>".$fetch_city['city']."</option>";
							}
										
		echo"			</select>
					</div>";
		echo"		<div class='col-lg-2'>
						<select class='form-control chzn-select' name='prop_brgy'>
							<option>---Brgy---</option>";
							$sql_city = mysql_query("SELECT * FROM location_details");
							while ($fetch_city=mysql_fetch_assoc($sql_city)) {
								echo"<option>".$fetch_city['brgy']."</option>";
							}
										
		echo"			</select>
					</div>";
		echo"		<div class='col-lg-2'>
						<select class='form-control chzn-select' name='prop_street'>
							<option>---Street---</option>";
							$sql_city = mysql_query("SELECT * FROM location_details");
							while ($fetch_city=mysql_fetch_assoc($sql_city)) {
								echo"<option>".$fetch_city['street']."</option>";
							}
										
		echo"			</select>
					</div>
			</div>";

		echo"<div class='form-group'>
				<label class='control-label col-lg-3'>Contact Number<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='text' name='prop_contnum' class='form-control input-sm' data-required='true' placeholder='Required Field'>
							<div class='seperator'></div>
					</div>
			</div>
			<div class='form-group'>
				<label class='control-label col-lg-3'>Email<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='email' name='prop_email' class='form-control input-sm' data-required='true' placeholder='Required Field'>
							<div class='seperator'></div>
					</div>
			</div>
			<div class='form-group'>
				<label class='control-label col-lg-3'>Managing Head<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='text' name='prop_managinghead' class='form-control input-sm' data-required='true' placeholder='Required Field'>
							<div class='seperator'></div>
					</div>
			</div>
			<div class='form-group'>
				<label class='control-label col-lg-3'>Pollution Control Officer<font color='red'>*</font></label>
					<div class='col-lg-9'>
						<input type='text' name='prop_pco' class='form-control input-sm' data-required='true' placeholder='Required Field'>
							<div class='seperator'></div>
					</div>
			</div>";
		echo"<center><div class='panel-footer'>
				<button type='submit' name='propsave' class='btn btn-success'>Submit</button>
				<button type='reset' class='btn btn-warning'>Reset</button>
			</div></center>";


		if(isset($_POST["propsave"]))
		{
			
		}
	}

?>