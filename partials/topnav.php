<!--
<header class="main-header">
	<a href="<?php echo BASE_URL; ?>" class="logo">
		<span class="logo-mini"><b>P</b>M S</span>
		<span class="logo-lg"><b>Payroll</b> M S</span>
	</a>
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
							<img src="<?php echo BASE_URL; ?>dist/img/admin-bg.png" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $userData['admin_name']; ?></span>
						<?php } else { ?>
							<img src="<?php echo REG_URL; ?>photos/<?php echo $userData['photo']; ?>" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $userData['first_name']; ?> <?php echo $userData['last_name']; ?></span>
						<?php } ?>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
								<img src="<?php echo BASE_URL; ?>dist/img/admin-bg.png" class="img-circle" alt="User Image">
							<?php } else { ?>
								<img src="<?php echo REG_URL; ?>photos/<?php echo $userData['photo']; ?>" class="img-circle" alt="User Image">
							<?php } ?>
							<p>
								<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
									Administrator
								<?php } else { ?>
									Employee
								<?php } ?>
								<small><?php echo COMPANY_NAME; ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo BASE_URL; ?>profile/" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo BASE_URL; ?>logout/" class="btn btn-default btn-flat">Logout</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
								-->

	<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo BASE_URL; ?>" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

	  <li class="nav-litem">
	  	<div class="nav-link navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
							<img src="<?php echo BASE_URL; ?>dist/img/admin-bg.png" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $userData['admin_name']; ?></span>
						<?php } else { ?>
							<img src="<?php echo REG_URL; ?>photos/<?php echo $userData['photo']; ?>" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $userData['first_name']; ?> <?php echo $userData['last_name']; ?></span>
						<?php } ?>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
								<img src="<?php echo BASE_URL; ?>dist0/img/admin-bg.png" class="img-circle" alt="User Image">
							<?php } else { ?>
								<img src="<?php echo REG_URL; ?>photos/<?php echo $userData['photo']; ?>" class="img-circle" alt="User Image">
							<?php } ?>
							<p>
								<?php if ( $_SESSION['Login_Type'] == 'admin' ) { ?>
									Administrator
								<?php } else { ?>
									<?php echo $userData['first_name']; ?> <?php echo $userData['last_name']; ?>
									<small>Employee</small>
								<?php } ?>
								<small><?php echo COMPANY_NAME; ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="float-left">
								<a href="<?php echo BASE_URL; ?>profile/" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="float-right">
								<a href="<?php echo BASE_URL; ?>logout/" class="btn btn-default btn-flat">Logout</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	  </li>
     

      

    </ul>
  </nav>
  <!-- /.navbar -->