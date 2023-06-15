<?php require_once(dirname(__FILE__) . '/config.php'); 
if ( !isset($_SESSION['Admin_ID']) || $_SESSION['Login_Type'] != 'admin' ) {
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
					<li class="breadcrumb-item active">Pay Heads</li>
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
								<h5 class=" card-title m-0">Salaries Slip</h5>								
								<div class="card-tools">
									<button type="button" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#PayheadsModal">
										<i class="fa fa-plus"></i> Add Pay Head
									</button>
								</div>

							</div>
							<div class="card-body">

								<div class="table-responsiove">

									<table id="payheads" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th>HEAD NAME</th>
												<th>DESCRIPTION</th>
												<th class="text-center">HEAD TYPE</th>
												<th class="text-center">ACTIONS</th>
											</tr>
										</thead>
									</table>
								</div>


								</div>
						</div>								
					</div>
				</div>
<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
<!-- /.content -->
	</div>
<!-- /.content-wrapper -->



		<div class="modal fade in" id="PayheadsModal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Pay Heads</h4>
					</div>
					<form method="POST" role="form" data-toggle="validator" id="payhead-form">
						<div class="modal-body">
							<div class="form-group">
								<label for="payhead_name">Pay Head Name</label>
								<input type="text" class="form-control" id="payhead_name" name="payhead_name" placeholder="Pay Head Name" required />
							</div>
							<div class="form-group">
								<label for="payhead_desc">Pay Head Description</label>
								<textarea class="form-control" id="payhead_desc" name="payhead_desc" placeholder="Pay Head Description" required></textarea>
							</div>
							<div class="form-group">
				                <label for="payhead_type">Pay Head Type:</label>
				                <select class="form-control" id="payhead_type" name="payhead_type" required>
				                	<option value="">---Select Pay Head Type---</option>
				                	<option value="earnings">Earnings</option>
				                	<option value="deductions">Deductions</option>
				                </select>
				            </div>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="payhead_id" id="payhead_id" />
							<button type="submit" name="submit" class="btn btn-primary">Save Pay Head</button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<footer class="main-footer">
		<strong> &copy; <?php echo date("Y");?> Payroll Management System | </strong> Developed By Surajit Pramanik
		</footer>
	</div>


<?php  require_once(dirname(__FILE__) . '/partials/fdlink.php');  ?>
</body>
</html>