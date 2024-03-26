<div class="modal fade" id="modalmantenimiento" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content" style="background-color: #f0f0f5">
    
		<div class="modal-header" style="background:linear-gradient(135deg, #2359a8, #266fd9 100%, #2359a8)">
			<h5 class="modal-title" id="modaltitulo" style="color:white">Mantenimiento de Servicio</h5>
			<button type="button" style="color: white" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
        <form method="post" id="servicio_form" >
            <div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab" role="tab">Detalle</a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-2" data-bs-toggle="tab" role="tab">Contenedores</a></li>
									<li class="nav-item"><a class="nav-link" href="#tab-3" data-bs-toggle="tab" role="tab">Servicios</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab-1" role="tabpanel">
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Referencia</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="0" name="vch_Num_Ref" id="vch_Num_Ref" readonly >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Shipper</strong></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="Shipper" id="Shipper" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Consignee</strong></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="Consignee" id="Consignee" readonly>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Notify</strong></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Notify" id="Notify" value="" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label Id="linea" name="linea" class="col-form-label col-sm-2 text-sm-start"></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="Linea" id="Linea" value="" placeholder="" readonly>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label Id="mbl" name="mbl" class="col-form-label col-sm-2 text-sm-start"></label>
                                            <div class="col-sm-4">   
                                                <input type="text" class="form-control" name="MBLAWB" id="MBLAWB" value="" placeholder="" readonly>
                                            </div> 
                                        
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>BL Hijo</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="BLHijo" id="BLHijo" value="" placeholder="" readonly>
                                            </div> 
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Booking</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="Bookin" id="Bookin" value="" placeholder="" readonly>
                                            </div> 
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Nave y Viaje</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="Nave" id="Nave" value="" placeholder="" readonly>
                                            </div>  
                                        </div>

                                        <div class="mb-3 row">
                                            <label Id="pol" name="pol" class="col-form-label col-sm-2 text-sm-start"></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="PODAOL" id="PODAOL" value="" placeholder="" readonly>
                                            </div> 
                                            <label Id="pod" name="pod" class="col-form-label col-sm-2 text-sm-start"></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="PODAOD" id="PODAOD" value="" placeholder="" readonly>
                                            </div> 
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>ETA</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="ETA" id="ETA" value="" placeholder="" readonly>
                                            </div> 
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>ETD</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="ETD" id="ETD" value="" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Peso</strong></label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="Peso" id="Peso" value="" placeholder="" readonly>
                                            </div> 
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Volumen</strong></label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="Volumen" id="Volumen" value="" placeholder="" readonly>
                                            </div> 
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Bultos</strong></label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="Bulto" id="Bulto" value="" placeholder="" readonly>
                                            </div>
                                        </div>
									    <div class="row">
                                            
                                            <label class="col-form-label col-sm-2 text-sm-start"><strong>Descripción</strong></label>
                                            <div class="col-sm-10">   
                                                <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3" readonly></textarea> 
                                            </div>
                                        </div> 
            
									</div>
									<div class="tab-pane" id="tab-2" role="tabpanel">
										<h4 class="tab-title"> </h4>
										<div class="panel-body">
                                            <div class="col-sm-6">
                                                <table id="contenedores_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Núm contenedor</th>
                                                            <th>Tipo Contenedor</th>
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
									<div class="tab-pane" id="tab-3" role="tabpanel">
										<h4 class="tab-title"></h4>
										<div class="panel-body">
											<table id="serviciosDetalle_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
													<tr>
														<th>Servicio</th>
														<th>Mon.</th>
														<th>Venta</th>
														<th>IGV</th>
														<th>Neto</th>
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
        <!-- <input type="hidden" name="SER_UsuCrea" id="SER_UsuCrea"/> 
        <input type="hidden" name="SER_Est" id="SER_Est"/> 
        <input type="hidden" name="Tipo" id="Tipo"/> 
        <input type="hidden" name="SER_AfecDetraccion" id="SER_AfecDetraccion"/> 
        <div class="modal-body m-3">
            <div class="row">
            <div class="mb-3 col-md-3">
                <label class="form-label" for="SER_IdServicio">Id</label>
                <input type="text" class="form-control" name="vch_Num_Ref" id="vch_Num_Ref" value="0" placeholder="">
            </div> 
            <div class="mb-3 col-md-12">
                <label class="form-label" for="SER_Descripcion_EN">Desc.EN</label>
                <input type="text" class="form-control" name="SER_Descripcion_EN" id="SER_Descripcion_EN" placeholder="Ingrese el nombre del servicio en Ingles" required>
                
            </div> 
            <div class="mb-3 col-md-12">
                <label class="form-label" for="SER_Descripcion_ES">Desc.ES</label>
                <input type="text" class="form-control" name="SER_Descripcion_ES" id="SER_Descripcion_ES" placeholder="Ingrese el nombre del servicio en Español">
            </div> 
            </div>  
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="SER_IdCategoria">Categ.</label>
                    <select data-placeholder="--Seleccione--" id="SER_IdCategoria" name="SER_IdCategoria" class="form-control select2-show-search" style="width:100%" required>
                                <option label="--Seleccione--"></option>
                                <option value="1">Port Expenses</option>
                                <option value="0">Agency Expenses</option>
                            </select>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="SER_CtaContable">Cta.Contable</label>
                    <input type="text" class="form-control" name="SER_CtaContable" id="SER_CtaContable" placeholder="Ingrese cuenta contable">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="SER_CodInterface">Cod.Interface</label>
                    <input type="number" class="form-control" name="SER_CodInterface" id="SER_CodInterface" placeholder="Código para interface">
                </div>
            </div>
            <div class="row">
			<div class="mb-3 col-md-3">
				<label class="form-label" for="SER_AfecDetraccion">Detracción.</label>
				
                <div class="form-check form-switch">
                     
                        <input class="form-check-input" type="checkbox"  value="0" onchange="habilitarCheck()" id="cf_check" autocomplete="off" />
                </div>
			</div>
			<div class="mb-3 col-md-3">
				<label class="form-label" for="SER_CodDet">Codigo Detrac.</label>
				<input type="text" class="form-control" name="SER_CodDet" id="SER_CodDet" placeholder="Ingrese Codigo">
			</div>
            <div class="mb-3 col-md-3">
				<label class="form-label" for="SER_PorcDet">% Detrac.</label>
				<input type="text" class="form-control" name="SER_PorcDet" id="SER_PorcDet" placeholder="%">
			</div>
            <div class="mb-3 col-md-3">
				<label class="form-label" for="SER_MinDet">Valor Minimo.</label>
				<input type="number" class="form-control" value="0" name="SER_MinDet" id="SER_MinDet" placeholder="">
			</div>
		</div>

        </div>
       
		<div class="modal-footer">
                <button class="btn btn-primary" type="submit" name="action" value="add">Guardar</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			</div> -->
            </form>
		</div>
	</div>
</div>