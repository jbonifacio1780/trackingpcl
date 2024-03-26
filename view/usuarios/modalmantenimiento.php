<div class="modal fade" id="modalmantenimiento" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content" style="background-color: #f0f0f5">
    
		<div class="modal-header" style="background:linear-gradient(135deg, #2359a8, #266fd9 100%, #2359a8)">
			<h5 class="modal-title" id="modaltitulo" style="color:white">Mantenimiento de Servicio</h5>
			<button type="button" style="color: white" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
        <div class="modal-body m-3">
        <form method="post" id="usuarios_form" >
            <input type="hidden" name="modo" id="modo"/> 
            <input type="hidden" name="usu_Estado" id="usu_Estado"/> 
            <div class="mb-3 row">
                 <label Id="mbl" name="mbl" class="col-form-label col-sm-4 text-sm-start"><strong>Id</strong></label>
                 <div class="col-sm-8">   
                     <input type="text" class="form-control" name="usu_Id" id="usu_Id" value="" placeholder="" readonly>
                 </div>
            </div>
            <div class="mb-3 row"> 
                 <label class="col-form-label col-sm-4 text-sm-start"><strong>RucEmpresa</strong></label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="usu_RucEmpr" id="usu_RucEmpr" value="" placeholder="" required>
                 </div> 
             </div>
            <div class="mb-3 row"> 
                 <label class="col-form-label col-sm-4 text-sm-start"><strong>Nombre Completo</strong></label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="usu_NomApe" id="usu_NomApe" value="" placeholder="" required>
                 </div> 
             </div>
             <div class="mb-3 row"> 
                 <label class="col-form-label col-sm-4 text-sm-start"><strong>Correo</strong></label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="usu_correo" id="usu_correo" value="" placeholder="" required>
                 </div> 
             </div>
             
             <div class="mb-3 row"> 
                 <label class="col-form-label col-sm-4 text-sm-start"><strong>Password</strong></label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control" name="usu_Passw" id="usu_Passw" value="" placeholder="" required>
                 </div> 
             </div>
             <div class="mb-3 row"> 
                 <label class="col-form-label col-sm-4 text-sm-start"><strong>Rol</strong></label>
                 <div class="col-sm-8">
                     <!-- <input type="text" class="form-control" name="usu_Rol" id="usu_Rol" value="" placeholder="" > -->
                     <select name="usu_Rol" id="usu_Rol" class="form-control" required>
                        <option value="0">--Seleccione--</option>
                        <option value="1">Usuario</option>
                        <option value="2">Admin</option>
                       
                    </select>
                 </div> 
             </div>
             <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Guardar</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
			</div>
        </form>
        </div>
	</div>
</div>
</div>