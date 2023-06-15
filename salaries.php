<?php require_once(dirname(__FILE__) . '/config.php'); 
if ( !isset($_SESSION['Admin_ID']) || !isset($_SESSION['Login_Type']) ) {
   	header('location:' . BASE_URL);
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance - Payroll</title>

	<?php  require_once(dirname(__FILE__) . '/partials/hdlink.php');  ?>    
	
</head>
<body class="hold-transition sidebar-mini dark-mode">
<div class="wrapper">

		
		<?php require_once(dirname(__FILE__) . '/partials/topnav.php'); ?>

		<?php require_once(dirname(__FILE__) . '/partials/sidenav0.php'); ?>

	
	 <!-- Content Wrapper. Contains page content -->
	 	<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Starter Page</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">Home</a></li>
							<li class="breadcrumb-item active">Salaries</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card card-primary card-outline">
								<div class="card-header">
									<h5 class="m-0">Salaries Slip</h5>
								</div>
								<div class="card-body">


										<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
											<table id="admin-salary" class="table table-bordered table-stripe">
												<thead>
													<tr>
														<th>EMP CODE</th>
														<th>NAME</th>
														<th>SALARY MONTH</th>
														<th>EARNINGS</th>
														<th>DEDUCTIONS</th>
														<th>NET SALARY</th>
														<th>ACTIONS</th>
													</tr>
												</thead>
											</table>
										<?php } else { ?>
											<table id="emp-salary" class="table table-bordered table-stripe">
												<thead>
													<tr>
														<th>SALARY MONTH</th>
														<th>EARNINGS</th>
														<th>DEDUCTIONS</th>
														<th>NET SALARY</th>
														<th>ACTIONS</th>
													</tr>
												</thead>
											</table>
										<?php } ?>

								</div>
							</div>								
						</div>
					</div>

				</div><!-- /.container-fluid -->
			</div>
		</div>


		<footer class="main-footer">
		<strong> &copy; <?php echo date("Y");?> Payroll Management System | </strong> Developed By Surajit Pramanik
		</footer>
	</div>


<?php  require_once(dirname(__FILE__) . '/partials/fdlink.php');  ?>
</body>
</html>