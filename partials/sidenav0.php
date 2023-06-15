<?php
$page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');

global $userData;
$attendanceSQL = mysqli_query($db, "SELECT * FROM `" . DB_PREFIX . "attendance` WHERE `emp_code` = '" . $userData['emp_code'] . "' AND `attendance_date` = '" . date('Y-m-d') . "'");
if ( $attendanceSQL ) {
	$attendanceROW = mysqli_num_rows($attendanceSQL);
	if ( $attendanceROW == 0 ) {
		$action_name = 'Punch In';
	} else {
		$attendanceDATA = mysqli_fetch_assoc($attendanceSQL);
		if ( $attendanceDATA['action_name'] == 'punchin' ) {
			$action_name = 'Punch Out';
		} else {
			$action_name = 'Punch In';
		}
	}
} else {
	$attendanceROW = 0;
	$action_name = 'Punch In';
} ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo BASE_URL; ?>dist0/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
				<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
					<img src="<?php echo BASE_URL; ?>dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
				<?php } else { ?>
					<img src="<?php echo REG_URL; ?>photos/<?php echo $userData['photo']; ?>" class="img-circle elevation-2" alt="User Image">
				<?php } ?>
          
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>   
			<li class="nav-item <?php echo $page_name == "attendance" ? 'active' : ''; ?>  ">
				<a  class="nav-link <?php echo $page_name == "attendance" ? 'active' : ''; ?>">
				<i class=" nav-icon far fa-calendar-alt"></i>
				<p>
					Attendance
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>attendance/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View List</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $page_name == "employees" ? 'active' : ''; ?>  ">
				<a class="nav-link <?php echo $page_name == "employees" ? 'active' : ''; ?>">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Employee Section
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>employees/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $page_name == "salaries" ? 'active' : ''; ?>  ">
				<a   class="nav-link <?php echo $page_name == "salaries" ? 'active' : ''; ?>">
				<i class="nav-icon  fa fa-solid fa-money-bill-wave"></i>
				<p>
					Salary Slips
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>salaries/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $page_name == "leaves" ? 'active' : ''; ?>  ">
				<a   class="nav-link <?php echo $page_name == "leaves" ? 'active' : ''; ?>">				
				<i class=" nav-icon  fas fa-walking"></i>
				<p>
					Leave Management
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>leaves/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $page_name == "payheads" ? 'active' : ''; ?>  ">
				<a   class="nav-link  <?php echo $page_name == "payheads" ? 'active' : ''; ?> ">
				<i class=" nav-icon  fas fa-file-invoice"></i>
				<p>
					Pay Head
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>payheads/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			<li class="nav-item <?php echo $page_name == "holidays" ? 'active' : ''; ?>  ">
				<a   class="nav-link <?php echo $page_name == "holidays" ? 'active' : ''; ?>">
				<i class=" nav-icon  far fa-calendar-times"></i>
				<p>
					List of Holidays
					<i class="right fas fa-angle-left"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?php echo BASE_URL; ?>holidays/" class="nav-link active">
					<i class="far fa-circle nav-icon"></i>
					<p>View</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Inactive Page</p>
					</a>
				</li>
				</ul>
			</li>

			


		<?php }else{ ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

		<?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>