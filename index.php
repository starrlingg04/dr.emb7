<!DOCTYPE html>
<html lang="en">
<?php
	include "head.php";
?>
<body>
<form method="POST">
<div class="login-wrapper">
	<div class="text-center">
		<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
			<span class="text-success">EMB VII</span> <span style="color:#ccc; text-shadow:0 1px #fff">Document Routing</span>
		</h2>
		</div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left">
						<i class="fa fa-lock fa-lg"></i> Login
					</div>
				</div>
				<div class="panel-body">
					<form class="form-login">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
						</div>
						<hr/>
						<a class="btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right" href="index.html"><i class="fa fa-sign-in"></i> Sign in</a>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	include "footer.php";
?>
  </body>
</html>
