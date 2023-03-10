<!--Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevoI.php">
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Nombre del producto:</label>
					</div>
					<div class="col-sm-10">
					     <input type="text" class="form-control" name="nombre_del_producto">	
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
				      <select class="form-control" name="tipo_de_producto">
				      	<option value="">-- Selecciona --</option>
				      	<option value="1">Juguetes</option>
				      	<option value="2">Comida</option>
						  <option value="3">Ropa</option>
						  <option value="4">Hogar</option>
						  <option value="5">Belleza</option>
						  <option value="6">Cocina</option>
						  <option value="7">Entretenimiento</option>
						  <option value="8">Salud</option>
						  <option value="9">Electronica</option>
						  <option value="9">Transporte</option>
						  <option value="10">Otros..</option>
				      </select>
				    </div>
	        </div>

			<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Estado del producto:</label>
				      <select class="form-control" name="estado">
				      	<option value="">-- Selecciona --</option>
				      	<option value="1">Disponible</option>
				      	<option value="2">No disponible</option>
				      </select>
				    </div>
	        </div>

			<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Precio:</label>
				      <input type="number" class="form-control" name="precio">
				    </div>
	        </div>

			<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Stock:</label>
				      <input type="number" class="form-control"  placeholder="Cantidad disponible.." name="stock_producto">
				    </div>
	        </div>

			<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Descripción:</label>
				      <input type="text" class="form-control" placeholder="describe tu producto.." name="descripcion">
				    </div>
                </div> 
			</div>
            </div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove"></i> Cerrar</button>        
			<button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
		</form>
        </div>
		
    </div>
</div>