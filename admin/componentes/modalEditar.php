<!-- Modal para editar la información de un libro-->
<div class="modal fade" id="editChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Actualizar Información del libro
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulario para editar la información del libro -->
      <!--Al ehacer submit ejecuta script de recib_Update-->
      <form method="POST" action="componentes/recib_Update.php">
        <!-- Campo oculto para enviar el ID del libro -->
        <input type="hidden" name="id" value="<?php echo $dataLibro['id']; ?>">
            <!-- Cuerpo del modal -->
            <div class="modal-body" id="cont_modal">
                <!-- Campo para el título del libro -->
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Titulo del Libro:</label>
                  <input type="text" name="titulo" class="form-control" value="<?php echo $dataLibro['titulo']; ?>" required="true" autofocus>
                </div>
                <!-- Campo para la cantidad de libros -->
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cantidad:</label>
                  <input type="number" name="cantidad" class="form-control" value="<?php echo $dataLibro['cantidad']; ?>" required="true">
                </div>
                <!-- Campo para el stock de libros -->
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Stock:</label>
                  <input type="number" name="stock" class="form-control" value="<?php echo $dataLibro['stock']; ?>" required="true">
                </div>
                <!-- Selector de categoría -->
                <div class="col-md-12 mt-2">
                    <label for="idcategoria" class="form-label">Categoria</label>
                    <select name="idcategoria" require id="selCat" class="form-control"> 
                      <option value="0">----</option>
                        <?php
                          // Consultar todas las categorías en la base de datos
                          $sqlCategoria   = ("SELECT * FROM categoria ORDER BY id DESC ");
                          $queryCategoria = mysqli_query($conexion, $sqlCategoria);
                          while ($dataLibro = mysqli_fetch_array($queryCategoria)) { 
                        ?>
                        <!-- Llama datos de categoria previamente asignada para este id 
                        y habilita deplegable para poder seleccionar otra categoria de las 
                        ya creadas-->
                          <option value="<?php echo $dataLibro['id'] ?>">
                              <?php echo $dataLibro['nombre'] ?>
                          </option>
                        <?php } ?>
                  </select>
                </div>
                <!-- Selector de autor -->
                <div class="col-md-12 mt-2">
                    <label for="idautor" class="form-label">Autor</label>
                    <select name="idautor" require id="selAut" class="form-control"> 
                      <option value="0">----</option>
                      <?php
                        // Consultar todos los autores en la base de datos
                        $sqlAutor   = ("SELECT * FROM autor ORDER BY id DESC ");
                        $queryAutor = mysqli_query($conexion, $sqlAutor);
                        while ($dataLibro = mysqli_fetch_array($queryAutor)) { ?>
                        <!-- Llama datos de autor previamente asignado para este id 
                        y habilita deplegable para poder seleccionar otro autor de los 
                        ya creados-->
                        <option value="<?php echo $dataLibro['id'] ?>">
                            <?php echo $dataLibro['nombre'] ?>
                        </option>
                      <?php } ?>
                  </select>
                </div>
                <!-- Selector de editorial -->
                <div class="col-md-12 mt-2">
                    <label for="ideditorial" class="form-label">Editorial</label>
                    <select name="ideditorial" require id="selEdit" class="form-control"> 
                      <option value="0">----</option>
                      <?php
                        // Consultar todos los editoriales en la base de datos
                        $sqlEditorial   = ("SELECT * FROM editorial ORDER BY id DESC ");
                        $queryEditorial = mysqli_query($conexion, $sqlEditorial);
                        while ($dataLibro = mysqli_fetch_array($queryEditorial)) { ?>
                        <!-- Llama datos de editorial previamente asignado para este id 
                        y habilita deplegable para poder seleccionar otro editorial de los 
                        ya creados-->
                        <option value="<?php echo $dataLibro['id'] ?>">
                            <?php echo $dataLibro['nombre'] ?>
                        </option>
                      <?php } ?>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
                <!--Cerrar modal -->
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!--Guardar cambios -->
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>
    </div>
  </div>
</div>
<!---fin ventana Update --->
