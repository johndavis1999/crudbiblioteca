<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataLibro['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <!-- Contenedor del modal -->
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Encabezado del modal -->
        <div class="modal-header">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar el libro ?
            </h4>
        </div>
        <!-- Cuerpo del modal -->
        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo $dataLibro['titulo']; ?>
          </strong>
        </div>
        <!-- Pie del modal -->
        <div class="modal-footer">
          <!-- Botón para cerrar el modal -->
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <!-- Botón para eliminar el libro -->
          <button type="submit" class="btn btn-danger btnBorrar" data-dismiss="modal" id="<?php echo $dataLibro['id']; ?>">Borrar</button>
        </div>
      </div>
    </div>
</div>
<!---fin ventana eliminar--->