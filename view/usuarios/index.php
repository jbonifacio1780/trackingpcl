<?php
  require_once("../../config/Conexion.php"); 
  if(isset($_SESSION["usu_Id"])){ 
?>
<!DOCTYPE html>
<html lang="es">

<head>
<style>
    body {
        zoom: 100%;
		/* font-size: 12px; */
    }
	table.dataTable td {
			font-size: 0.9em;
		}
	table.dataTable thead {
			background-color: #0C6293;
			color: white;
			font-size: 0.9em;
		}

		/* .pagination>li>a, .pagination>li>span{
  border:1px solid red !important;
} */
    </style>


	<?php require_once("../mainhead/head.php"); ?> 
	<title>SERMAR - Mantenedor de usuarios</title>
</head>

<body data-theme="colored" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
	<div class="wrapper">	
			<?php require_once("../mainNav/mainnav.php"); ?>
		<div class="main">		
			<?php require_once("../mainNavbar/navbar.php"); ?>
			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
								<h3><strong>Listado de</strong> Usuarios</h3>
						</div>
						<div class="col-sm-12" style="text-align: right !important;">
							<button class="btn btn-primary" type="button"  id="btnnuevo">Nuevo</button>
						</div>
						<!-- <div class="col-auto ms-auto text-end mt-n1">
								<a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a> 
								 <button class="btn btn-primary btn-block" type="button"  id="btnnuevo">Nuevo</button>
						</div> -->
					</div>

					<div class="row">
						<div  class="col-12">
							<div class="card flex-fill w-100">
									<!-- <div class="card-header">
										<div class="card-actions float-end">
											<div class="dropdown show">
												<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
													<i class="align-middle" data-feather="more-horizontal"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
												</div>
											</div>
										</div>
										<h5 class="card-title mb-0">Real-Time</h5>
									</div> -->
								<div class="card-body px-4">
									<div  style="height:350px;">
										<div class="panel-body">
												<table id="usuarios_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
														<thead>
														<tr>
														<th>Id</th>
															<th>Nombre</th>
															<th>Correo</th>
															<th>RucEmpresa</th>
															<th>Password</th>
															<th>ROL</th>
															<th>Estado</th>
															<th>Opciones</th>
														</tr>
														</thead>
														<tbody>
															<tr>
																<td></td>
															</tr>
														</tbody>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php 
				require_once("modalmantenimiento.php");
				require_once("../mainfooter/footer.php");
			?>
				
		</div>
	</div>
			<?php require_once("../MainJs/mainjs.php");?>
    		<script src="mntusuario.js" type="text/javascript"></script>
</body>

</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>