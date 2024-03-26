<nav id="sidebar" class="sidebar js-sidebar collapsed"> 
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="../home/">
					<span class="sidebar-brand-text align-middle">
					
						<!-- AdminKit
						<sup><small class="badge bg-primary text-uppercase">Pro</small></sup> -->
					</span>
					<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
						<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
						<path d="M20 12L12 16L4 12"></path>
						<path d="M20 16L12 20L4 16"></path>
					</svg>
				</a>
				<input type="hidden" id="useridx" value="<?php echo $_SESSION["usu_Id"] ?>">
				
				<div class="sidebar-user">
					<div class="d-flex justify-content-center">
						<div class="flex-shrink-0">
							<img src="../../public/img/avatars/usuario.png" class="avatar img-fluid rounded me-1" alt="Charles Hall">
						</div>
						<div class="flex-grow-1 ps-2">
							<a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
							<?php echo $_SESSION["usu_NomApe"] ?>
							</a>
							<div class="dropdown-menu dropdown-menu-start">
								<!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
									Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a> -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../Logout/logout.php">Log out</a>
							</div>

							<!-- <div class="sidebar-user-subtitle">Designer</div> -->
						</div>
					</div>
				</div>
				<?php
 if(($_SESSION["usu_Rol"]==2)){
        ?>
			<ul class="sidebar-nav">
					<li class="sidebar-header">
						Mantenimiento
					</li>
					<li class="sidebar-item active">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
							<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Generales</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<!-- <li class="sidebar-item "><a class="sidebar-link" href="../clientes/">Registro Clientes</a></li> -->
							<li class="sidebar-item "><a class="sidebar-link" href="../usuarios/">Registro Usuarios <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
						</ul>
					</li>
			</ul>
		 <?php
    }
?>
				<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Weekly Sales Report</strong>
						<div class="mb-3 text-sm">
							Your weekly sales report is ready for download!
						</div>

						<div class="d-grid">
							<a href="index-1.htm" class="btn btn-outline-primary" target="_blank">Download</a>
						</div>
					</div>
				</div> -->
			</div>
		</nav>