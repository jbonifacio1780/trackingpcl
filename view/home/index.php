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
	<title>SERMAR - Mantenedor de servicios</title>
</head>

<body data-theme="colored" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
<!-- <img src="../../public/img/avatars/logo.png" class="img-fluid me-1" style="linear-gradient(rgba(0, 0, 255, 0.5), rgba(255, 255, 0, 0.5)),">	 -->
<div class="wrapper">

		<?php require_once("../mainNav/mainnav.php"); ?>
	<div class="main">		
		<?php require_once("../mainNavbar/navbar.php"); ?>
		<main class="content">
			<div class="container-fluid p-0">

				<div class="row mb-2 mb-xl-3">
					<div class="col-6 d-none d-sm-block">
					<select data-placeholder="Seleccionar cliente" class="form-control" id="txtCliente" name="txtCliente" placeholder="Seleccione Cliente">
              		</select>
					</div>
					<div class="col-6 ms-auto text-end mt-n1"> 
					
					  <h3><strong>Listado de</strong> referencias</h3>
							<!-- <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a> -->
							<!-- <button class="btn btn-primary btn-block" type="button"  id="btnnuevo">Nuevo</button> -->
					</div>
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
											<table id="servicios_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
													<tr>
														<th>Modalidad</th>
														<th>Booking/Routing</th>
														<th>HBL</th>
														<th>Nave/Viaje</th>
														<th>POL/AOL</th>
														<th>POD/AOD</th>
														<th>ETD</th>
														<th>ETA</th>
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

		<!-- Modal Logout -->
		<div class="modal fade" id="passwModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelpassw" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelpassw">Cambiar Password!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3 row">
                        <label Id="mbl" name="mbl" class="col-form-label col-sm-4 text-sm-start"><strong>Usuario</strong></label>
                        <div class="col-sm-8">   
                        <input type="text" class="form-control" name="usuario" id="usuario" value="" placeholder="" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label Id="mbl" name="mbl" class="col-form-label col-sm-4 text-sm-start"><strong>Paswword</strong></label>
                        <div class="col-sm-8">   
                            <input type="password" class="form-control" name="pass" id="pass" value="" placeholder="">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <!-- <a href="../Logout/logout.php" class="btn btn-primary">Logout</a> -->
                    <button class="btn btn-primary" name="action" onclick="CambiarClave()" data-dismiss="modal">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          <!---Container Fluid-->

			<?php 
			require_once("modalmantenimiento.php");
			require_once("../mainfooter/footer.php");
			 ?>
	</div>
</div>

	<?php require_once("../MainJs/mainjs.php");?>
    <script src="mntServicios.js" type="text/javascript"></script>
</body>

</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>