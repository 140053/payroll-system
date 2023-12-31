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
					<li class="breadcrumb-item active">Leaves</li>
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
								<h5 class="m-0">Leaves</h5>
							</div>
							<div class="card-body">

				<div class="row">
					<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">All Leaves</h3>
								</div>
								<div class="box-body">
									<table id="allleaves" class="table table-bordered table-stripe">
										<thead>
											<tr>
												<th>#</th>
												<th>EMP CODE</th>
												<th>SUBJECT</th>
												<th>DATES</th>
												<th>MESSAGE</th>
												<th>TYPE</th>
												<th>STATUS</th>
												<th>ACTIONS</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="col-lg-4">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Apply for Leave</h3>
								</div>
								<div class="box-body">
									<form method="post" role="form" data-toggle="validator" id="leave-form">
										<div class="form-group">
											<label for="leave_subject">Leave Subject</label>
											<input type="text" class="form-control" name="leave_subject" id="leave_subject" required />
										</div>
										<div class="form-group">
											<label for="leave_dates">Leave Dates (MM/DD/YYYY)</label>
											<input type="text" class="form-control multidatepicker" name="leave_dates" id="leave_dates" required />
											<small class="text-muted">You can select multiple dates separated by comma.</small>
										</div>
										<div class="form-group">
											<label for="leave_message">Leave Message</label>
											<textarea class="form-control" name="leave_message" id="leave_message" rows="10" required></textarea>
										</div>
										<div class="form-group">
											<label for="leave_type">Leave Type</label>
											<select class="form-control" name="leave_type" id="leave_type" required>
												<option value="">Please make a choice</option>
												<option value="Casual Leave">Casual Leave</option>
												<option value="Earned Leave">Privileged / Earned Leave</option>
												<option value="Sick Leave">Medical / Sick Leave</option>
												<option value="Maternity Leave">Maternity Leave</option>
												<option value="Leave Without Pay">Leave Without Pay</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Apply for Leave</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">My Leaves</h3>
								</div>
								<div class="box-body">
									<table id="myleaves" class="table table-bordered table-stripe">
										<thead>
											<tr>
												<th>#</th>
												<th>SUBJECT</th>
												<th>DATES</th>
												<th>MESSAGE</th>
												<th>TYPE</th>
												<th>STATUS</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					<?php } ?>
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

		<footer class="main-footer">
		<strong> &copy; <?php echo date("Y");?> Payroll Management System | </strong> Developed By Surajit Pramanik
		</footer>
	</div>


<?php  require_once(dirname(__FILE__) . '/partials/fdlink.php');  ?>
</body>
</html>