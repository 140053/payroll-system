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
								
									<h5 class="card-title m-0">List of Holidays</h5>
									<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
										<div class="card-tools">
											<button type="button" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#HolidayModal">
												<i class="fa fa-plus"></i> Add Holiday
											</button>
										</div>
									<?php } ?>
								
							</div>
							<div class="card-body">

								<div class="table-responsiove">
									<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
										<table id="holidays" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="text-center">HOLIDAY #</th>
													<th>HOLIDAY TITLE</th>
													<th>HOLIDAY DESCRIPTION</th>
													<th class="text-center">HOLIDAY DATE</th>
													<th class="text-center">HOLIDAY TYPE</th>
													<th class="text-center">ACTION</th>
												</tr>
											</thead>
										</table>
									<?php } else { ?>
										<table id="empholidays" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th class="text-center">HOLIDAY #</th>
													<th>HOLIDAY TITLE</th>
													<th>HOLIDAY DESCRIPTION</th>
													<th class="text-center">HOLIDAY DATE</th>
													<th class="text-center">HOLIDAY TYPE</th>
												</tr>
											</thead>
										</table>
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

		<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
			<div class="modal fade in" id="HolidayModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Holidays</h4>
						</div>
						<form method="post" role="form" data-toggle="validator" id="holiday-form">
							<div class="modal-body">
								<div class="form-group">
									<label for="holiday_title">Holiday Title</label>
									<input type="text" class="form-control" id="holiday_title" name="holiday_title" placeholder="Holiday Title" required />
								</div>
								<div class="form-group">
									<label for="holiday_desc">Description</label>
									<textarea class="form-control" id="holiday_desc" name="holiday_desc" placeholder="Holiday Description" required></textarea>
								</div>
								<div class="form-group">
					                <label for="holiday_date">Holiday Date (MM/DD/YYYY)</label>
					                <div class="input-group date">
					                  	<div class="input-group-addon">
					                    	<i class="fa fa-calendar"></i>
					                  	</div>
					                  	<input type="text" class="form-control datepicker pull-right" id="holiday_date" name="holiday_date" required />
					                </div>
					            </div>
					            <div class="row">
					            	<div class="col-sm-6">
							            <div class="form-group">
											<label for="compulsory_holiday">
												<input type="radio" value="compulsory" id="compulsory_holiday" name="holiday_type" class="minimal" checked /> Compulsory Holiday
											</label>
										</div>
									</div>
									<div class="col-sm-6">
							            <div class="form-group">
											<label for="restricted_holiday">
												<input type="radio" value="restricted" id="restricted_holiday" name="holiday_type" class="minimal" /> Restricted Holiday
											</label>
										</div>
									</div>
					            </div>
							</div>
							<div class="modal-footer">
								<input type="hidden" name="holiday_id" id="holiday_id" />
								<button type="submit" name="submit" class="btn btn-primary">Save Holiday</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php } ?>

			<footer class="main-footer">
		<strong> &copy; <?php echo date("Y");?> Payroll Management System | </strong> Developed By Surajit Pramanik
		</footer>
	</div>


<?php  require_once(dirname(__FILE__) . '/partials/fdlink.php');  ?>
</body>
</html>


<div class="box-header">
								<h3 class="box-title">List of Holidays</h3>
								<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
									<button type="button" class="btn btn-xs btn-primary pull-right" data-toggle="modal" data-target="#HolidayModal">
										<i class="fa fa-plus"></i> Add Holiday
									</button>
								<?php } ?>
							</div>