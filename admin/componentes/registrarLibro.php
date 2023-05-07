<!-- 
    Este es un formulario HTML que se utiliza para registrar un libro en una base de datos. 
    La acción del formulario es "componentes/recibLibro.php" y el método es "POST", 
    lo que significa que los datos del formulario se envían al archivo "recibLibro.php" 
    a través del método POST. Además, se establece el atributo "enctype" como "multipart/form-data" 
    para permitir el envío de archivos a través del formulario.
-->
<form name="form-data" action="componentes/recibLibro.php" method="POST" enctype="multipart/form-data">
    <!-- Contenedor para los campos de entrada del formulario -->
    <div class="row">
        <!-- Campo de entrada para el título del libro -->
        <div class="col-md-12">
            <label for="name" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" autofocus required>
        </div>
        <!-- Campo de entrada para la cantidad de libros a registrar -->
        <div class="col-md-12">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" required>
        </div>
        <!-- Campo de entrada para el stock de libros -->
        <div class="col-md-12">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" required>
        </div>
        <!-- Menú desplegable para seleccionar la categoría del libro -->
        <div class="col-md-12 mt-2">
            <label for="idcategoria" class="form-label">Categoria</label>
            <select name="idcategoria"  class="form-control" required>
                <option value="0">----</option>
                <!-- 
                Consulta a la base de datos para obtener todas las categorías 
                y agregarlas como opciones al menú desplegable
                -->
                <?php
                    $sqlCategoria   = ("SELECT * FROM categoria ORDER BY id DESC ");
                    $queryCategoria = mysqli_query($conexion, $sqlCategoria);
                    while ($dataCategoria = mysqli_fetch_array($queryCategoria)) { ?>
                    <option value="<?php echo $dataCategoria['id'] ?>">
                        <?php echo $dataCategoria['nombre'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <!-- Menú desplegable para seleccionar el autor del libro -->
        <div class="col-md-12 mt-2">
            <label for="idautor" class="form-label">Autor</label>
            <select name="idautor"  class="form-control">
                <option value="0">-----</option>
                <!-- 
                Consulta a la base de datos para obtener todos los autores 
                y agregarlos como opciones al menú desplegable
                -->
                <?php
                    $sqlAutor   = ("SELECT * FROM autor ORDER BY id DESC ");
                    $queryAutor = mysqli_query($conexion, $sqlAutor);
                    while ($dataautor = mysqli_fetch_array($queryAutor)) { ?>
                    <option required value="<?php echo $dataautor['id'] ?>">
                        <?php echo $dataautor['nombre'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <!-- Menú desplegable para seleccionar el autor del libro -->
        <div class="col-md-12 mt-2">
            <label for="ideditorial" class="form-label">Editorial</label>
            <select name="ideditorial" class="form-control">
                <option value="0">----</option>
                <!-- 
                Consulta a la base de datos para obtener todas las editoriales 
                y agregarlas como opciones al menú desplegable
                -->
                <?php
                    $sqlEditorial   = ("SELECT * FROM editorial ORDER BY id DESC ");
                    $queryEditorial = mysqli_query($conexion, $sqlEditorial);
                    while ($dataEditorial = mysqli_fetch_array($queryEditorial)) { ?>
                    <option value="<?php echo $dataEditorial['id'] ?>">
                        <?php echo $dataEditorial['nombre'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <!-- Campo de entrada para subir la imagen del libro -->
        <div class="col-md-12 mt-2">
            <label for="imagen" class="form-label">Seleccionar imagen</label>
            <input type="file" class="form-control" name="imagen" >
        </div>
        </div>
        <div class="row justify-content-start text-center mt-5">
            <div class="col-12">
                <button class="btn btn-primary btn-block" id="btnEnviar">
                    Registrar Libro
                </button>
            </div>
    </div>
</form>
