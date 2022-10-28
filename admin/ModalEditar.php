
<!--ventana para Update--->
<div class="modal fade" id="editarreserva<?php echo $row['id_reserva']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <input type="hidden" name="id_reserva" value="<?php echo $row['id_reserva']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de la reserva:</label>
                  <input type="date" name="Fecha" class="form-control" value="<?php echo $row['Fecha']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Hora de la reserva:</label>
                  <input type="time" name="Hora" class="form-control" value="<?php echo $row['Hora']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Mesa:</label>
                  <input type="number" name="Mesa" class="form-control" value="<?php echo $row['Mesa']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Descripción:</label>
                  <input type="text" name="Descripcion" class="form-control" value="<?php echo $row['Descripcion']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Celular:</label>
                  <input type="number" name="Telefono" class="form-control" value="<?php echo $row['Telefono']; ?>" required="true">
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
