<?php
	include "conn.php";
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
					<div class="col-md-12">
						<div class="panel panel-default">
							<form class="form-horizontal form-border no-margin" id="basic-constraint" data-validate="parsley" novalidate>
								<div class="panel-heading">
									<h4>List of Proponents</h4>
								</div>
								<div class="panel-body">
								<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						<span class="pull-right">
							<a href="addproponent.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Proponent</a>
						</span>
					</div>
					<div class="padding-md clearfix">
						<table class="table table-striped" id="dataTable">
							<thead>
								<tr>
									<th>Proponent's Name</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Location</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php
										$propsql = mysql_query("SELECT master_proponent.*,location.*,location_details.* 
																FROM master_proponent INNER JOIN location_details
																ON master_proponent.prop_loc_id = location_details.locdet_id
																INNER JOIN location
																ON location_details.locationID = location.location_id")
																or die (mysql_error());
										$fetch_propsql = mysql_fetch_assoc($propsql);
									 do
									 {
									 	printf("<tr>");
									 	printf("<td>%s</td>",$fetch_propsql['prop_name']);
									 	printf("<td>%s</td>",$fetch_propsql['prop_contactnum']);
									 	printf("<td>%s</td>",$fetch_propsql['prop_email']);
									 	printf("<td>%s</td>",$fetch_propsql['street']." ".$fetch_propsql['brgy']." ".$fetch_propsql['city']);
									 	printf("<td>
									 			<a class='btn btn-primary'><i class='fa fa-share-square-o'></i> Gen. Info.</a>
									 			<a class='btn btn-primary'>Documents <i class='fa fa-chevron-right'></i></a>
									 		  </td>");
									 }while($fetch_propsql=mysql_fetch_assoc($propsql));

									?>
								</tr>
							</tbody>
						</table>
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
 	<script src='js/jquery.dataTables.min.js'></script>	
	<script src='js/modernizr.min.js'></script>
	<script src='js/pace.min.js'></script>
	<script src='js/jquery.popupoverlay.min.js'></script>
	<script src='js/jquery.slimscroll.min.js'></script>
	<script src='js/jquery.cookie.min.js'></script>
	<script src="js/endless/endless.js"></script>
	
	<script>
		$(function	()	{
			$('#dataTable').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			});
			
			$('#chk-all').click(function()	{
				if($(this).is(':checked'))	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked', true);
						$(this).parent().parent().parent().addClass('selected');
					});
				}
				else	{
					$('#responsiveTable').find('.chk-row').each(function()	{
						$(this).prop('checked' , false);
						$(this).parent().parent().parent().removeClass('selected');
					});
				}
			});
		});
	</script>
	
  </body>
</html>
