<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
			<input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_Id"] ?>">
            <input type="hidden" id="usu_NomApex" value="<?php echo $_SESSION["usu_NomApe"] ?>">
            <input type="hidden" id="usu_Rolx" value="<?php echo $_SESSION["usu_Rol"] ?>">
            <input type="hidden" id="usu_correox" value="<?php echo $_SESSION["usu_correo"] ?>">
            <input type="hidden" id="usu_RucEmprx" value="<?php echo $_SESSION["usu_RucEmpr"] ?>">

				<div class="navbar-collapse collapse">
				<img src="../../public/img/avatars/logo.png" class="img-fluid me-1">
					<ul class="navbar-nav navbar-align">
					
						
						<li class="nav-item dropdown">
							<a class="nav-icon pe-md-0 dropdown-toggle"  data-bs-toggle="dropdown">
								
								<span class="sidebar-user-subtitle"><?php echo $_SESSION["usu_NomApe"] ?></span>
								<img src="../../public/img/avatars/usuario.png" class="avatar img-fluid rounded" alt="Charles Hall">
								<!-- <div class="sidebar-user-subtitle">Designer</div> -->
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!-- <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#passwModal">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Cambiar Clave
								</a> -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../Logout/logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>