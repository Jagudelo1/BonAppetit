
<!--ventana para Update--->
<div class="modal fade" id="editarreserva<?php echo $row['id_cliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="update.php">
        <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Documento:</label>
                  <input type="number" disabled name="Documento" id="Documento" class="form-control" value="<?php echo $row['Documento']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres:</label>
                  <input type="text" name="Nombres" id="Nombres" class="form-control" value="<?php echo $row['Nombres']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellidos:</label>
                  <input type="text" name="Apellidos" id="Apellidos" class="form-control" value="<?php echo $row['Apellidos']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Celular:</label>
                  <input type="number" name="DescrCelularipcion" id="Celular" class="form-control" value="<?php echo $row['Celular']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha:</label>
                  <input type="date" name="Fecha" id="Fecha" class="form-control" value="<?php echo $row['Fecha']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                  <input type="text" name="Usuario" id="Usuario" class="form-control" value="<?php echo $row['Usuario']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Contraseña:</label>
                  <input type="text" name="Contrasena" id="Contrasena" class="form-control" value="<?php echo $row['Contrasena']; ?>" required="true">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
