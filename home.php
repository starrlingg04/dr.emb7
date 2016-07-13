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
	</div><!-- /theme-setting -->

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
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
					 <li class="active">Dashboard</li>	 
				</ul>
			</div>
			<div class="padding-md">
				<div class="row">
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<span class="pull-left"><i class="fa fa-bar-chart-o fa-lg"></i> Website Traffic</span>
								<ul class="tool-bar">
									<li><a href="#" class="refresh-widget" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
								</ul>
							</div>
							<div class="panel-body" id="trafficWidget">
								<div id="placeholder" class="graph" style="height:250px"></div>
							</div>
							<div class="panel-footer">
								<div class="row row-merge">
									<div class="col-xs-3 text-center border-right">
										<h4 class="no-margin">1232</h4>
										<small class="text-muted">Visitors</small>
									</div>
									<div class="col-xs-3 text-center border-right">
										<h4 class="no-margin">5421</h4>
										<small class="text-muted">Orders</small>
									</div>
									<div class="col-xs-3 text-center border-right">
										<h4 class="no-margin">3021</h4>
										<small class="text-muted">Tickets</small>
									</div>
									<div class="col-xs-3 text-center">
										<h4 class="no-margin">7098</h4>
										<small class="text-muted">Customers</small>
									</div>
								</div><!-- ./row -->
							</div>
							<div class="loading-overlay">
								<i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
							</div>
						</div><!-- /panel -->
								
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat1 bg-success">
									<div class="panel-body">
										<div class="value">99</div>
										<div class="title">
											<i class="fa fa-usd"></i>
											<span class="m-left-xs">Documents</span>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-warning">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-bar-chart-o"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">58</div>
											<div class="title">Events</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-info">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-envelope"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">41</div>
											<div class="title">Proponents</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						
					
					</div><!-- /.col -->
					<div class="col-lg-4">
						<div class="panel bg-info fadeInDown animation-delay4" style="display:none;">
							<div class="panel-body">
								<div id="lineChart" style="height: 150px;"></div>
								<div class="pull-right text-right">
									<strong class="font-14">Balance $3210</strong><br/>
									<span><i class="fa fa-shopping-cart"></i> Total Sales 867</span>
									<div class="seperator"></div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-4">
										Sales in June
										<strong class="block">$664</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in July
										<strong class="block">$731</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in August
										<strong class="block">$912</strong>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						<div class="panel bg-success fadeInDown animation-delay5" style="display:none;">
							<div class="panel-body">
								<div id="barChart" style="height: 150px;"></div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
										<h4 class="no-margin">Total Earnings</h4>
									</div><!-- /.col -->
									<div class="col-xs-6 text-right">
										<h4 class="no-margin">$17,531</h4>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						
						<div class="panel panel-default">
							<div class="panel-body">
								<div id="donutChart" style="height: 250px;"></div>
								<div class="panel-group" id="accordion">
									
								</div><!-- panel-group -->
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
		<!-- Footer
		================================================== -->
		<?php
			include "footer_name.php";
		?>
		
		
		<!--Modal-->
		<div class="modal fade" id="newFolder">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Create new folder</h4>
      				</div>
				    <div class="modal-body">
				        <form>
							<div class="form-group">
								<label for="folderName">Folder Name</label>
								<input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
							</div>
						</form>
				    </div>
				    <div class="modal-footer">
				        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
						<a href="#" class="btn btn-danger btn-sm">Save changes</a>
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
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
</body>
<?php
 include "footer.php";
?>
</html>
