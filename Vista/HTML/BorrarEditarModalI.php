<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['codigo_producto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form  method="POST" action="EditarRegistroI.php?id=<?php echo $row['codigo_producto']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Producto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre_producto" value="<?php echo $row['nombre_del_producto']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Tipo de producto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_producto" value="<?php echo $row['tipo_de_producto']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;">Estado del producto:</label>
				      <select type="text" class="form-control" name="Estado" value="<?php echo $row['estado']; ?>">
						<option value="">-- Selecciona --</option>
				      	<option value="1">Disponible</option>
				      	<option value="2">No disponible</option>
				      </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="precio" value="<?php echo $row['precio']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Stock:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Stock" value="<?php echo $row['stock_producto']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Descripcion" value="<?php echo $row['descripcion']; ?>">
					</div>
					
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['codigo_producto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Empleado</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h3 class="text-center"><?php echo $row['nombre_del_producto'].' '.$row['precio']; ?></h3>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="BorrarRegistroI.php?id=<?php echo $row['codigo_producto']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Aceptar</a>
            </div>

        </div>
    </div>
</div>