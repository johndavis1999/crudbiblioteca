
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Biblioteca</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/cargando.css">
  <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
  <link rel="stylesheet" href="css/estilosnav.css">
  <!--Cabecera Vista Admin - libros-->
</head>
<body id="library">
  <?php include "../templates/cabeceraadmin.php"; ?>
    <div class="cargando">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
  <div class="container mt-5 p-8">
  <?php
    // Incluimos la conexión a la base de datos
    include('../templates/conexion.php');
    // Creamos la consulta para obtener todos los libros de la tabla libro, 
    //incluyendo también información de las tablas de categoria, autor y editorial
    $sql='SELECT libro.id as id, libro.titulo as titulo, libro.cantidad 
    as cantidad, libro.stock as stock,  
    categoria.nombre as categoria,
    autor.nombre as autor,
    editorial.nombre as editorial,
    libro.imagen as imagen, 
    categoria.id as idcategoria,
    autor.id as idautor,
    editorial.id as ideditorial
    FROM libro 
    left join categoria on libro.idcategoria=categoria.id
    left join autor on libro.idautor=autor.id
    left join editorial on libro.ideditorial=editorial.id
    ORDER BY id DESC';
    // Ejecutamos la consulta
    $queryLibro = mysqli_query($conexion, $sql);
    // Contador del número de filas devueltas por la consulta
    $cantidad     = mysqli_num_rows($queryLibro);
  ?>
<div class="contenido">
    <div class="row text-center" >
      <div class="col-md-3"> 
        <!-- Título para el formulario de registro de libros -->
        <strong>Registrar Nuevo Libro</strong>
      </div>
      <div class="col-md-9"> 
        <!-- Título para la tabla de libros -->
        <strong>Lista de Libros <span style="color: crimson">  ( <?php echo $cantidad; ?> )</span> </strong>
      </div>
    </div>
    <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="body">
          <div class="row clearfix">

            <div class="col-sm-3">
            <!--- Formulario para registrar Libro --->
            <?php include('componentes/registrarLibro.php');  ?>

            </div>  
              <div class="col-sm-9">
                  <div class="row">
                    <div class="col-md-12 p-2"> 
                    <!-- Creamos una tabla para mostrar la información de los libros -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <!-- Cabecera de la tabla -->
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Editorial</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <!-- Cuerpo de la tabla -->
                            <tbody>
                            <?php
                                while ($dataLibro = mysqli_fetch_array($queryLibro)) { ?>
                            <tr>
                              <!-- Columna ID -->
                              <td><?php echo $dataLibro['id']; ?></td>
                              <!-- Columna Titulo -->
                              <td><?php echo $dataLibro['titulo']; ?></td>
                              <!-- Columna Cantidad -->
                              <td><?php echo $dataLibro['cantidad']; ?></td>
                              <!-- Columna Stock -->
                              <td><?php echo $dataLibro['stock']; ?></td>
                              <!-- Columna Categoria -->
                              <td><?php echo $dataLibro['categoria']; ?></td>
                              <!-- Columna Autor -->
                              <td><?php echo $dataLibro['autor']; ?></td>
                              <!-- Columna Editorial -->
                              <td><?php echo $dataLibro['editorial']; ?></td>
                              <!-- Columna Imagen -->
                              <td>
                                <!-- Validacion para mostrar imagen -->
                                <!--Si no hay imagen cargada en el libro indicado se muestra el texto no imagen disp-->
                                <!--se habilita un enlace que redirecciona a una imagen indicando que no hay img disp-->
                                <?php 
                                  if($dataLibro['imagen'] != "img/libros/")
                                  {
                                ?>
                                  <a href="componentes/<?php echo $dataLibro['imagen']; ?>">Ver</a>
                                <?php 
                                  } else {
                                ?>
                                  <a href="componentes/img/libros/no_image.webp">No hay imagen disponible</a>
                                <?php 
                                  }
                                ?>
                    
                              </td>
                              <td> 
                                  <!--Boton modal eliminar-->
                                  <button type="button" class="btn btn-danger" data-toggle="modal" 
                                    data-target="#deleteChildresn<?php echo $dataLibro['id']; ?>">
                                      Eliminar
                                  </button>
                                  <!--Boton modal editar-->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" 
                                    data-target="#editChildresn" onclick= 
                                    "editar('<?php echo $dataLibro['titulo']; ?>', '<?php echo $dataLibro['idcategoria']; ?>', '<?php echo $dataLibro['idautor']; ?>','<?php echo $dataLibro['ideditorial']; ?>')">
                                      Editar
                                  </button>
                              </td>
                            </tr>
                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('componentes/ModalEliminar.php'); ?>
                            <!--Ventana Modal para Actualizar--->
                            <?php include('componentes/modalEditar.php');?>
                          <?php } ?>
                      </table>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JQUERY para manipular datos en modal editar y ejecutar script de eliminar-->
<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });
        //captura los datos del id libro para visualizarlos en el modal
        //editar, se implemento precisamente para poder copiar en los 
        //selectores los valores previamente asignados
        editar=function(titulo,categoria,autor,editorial){
          $("#selCat").val(categoria)
          $("#selAut").val(autor)
          $("#selEdit").val(editorial)
          console.log(titulo, categoria)
        }
        //Ocultar mensaje
        setTimeout(function () {
            $("#contenMsjs").fadeOut(1000);
        }, 3000);
        $('.btnBorrar').click(function(e){
            e.preventDefault();
            var id = $(this).attr("id");

            var dataString = 'id='+ id;
            url = "componentes/recib_Delete.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data)
                    {
                      window.location.href="libros.php";
                      $('#respuesta').html(data);
                    }
                });
        return false;
    });
});
</script>

</body>
</html>