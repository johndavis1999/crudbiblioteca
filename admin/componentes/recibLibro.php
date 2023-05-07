<?php
// llama la conexión a la base de datos
include('../../templates/conexion.php');
// Recibir los datos del formulario
$titulo      = $_REQUEST['titulo'];
$cantidad 	 = $_REQUEST['cantidad'];
$stock 	 = $_REQUEST['stock'];
$idcategoria      = $_REQUEST['idcategoria'];
$idautor      = $_REQUEST['idautor'];
$ideditorial      = $_REQUEST['ideditorial'];
// Recibir la imagen del formulario
$nombreimg = $_FILES['imagen']['name']; // obtener el nombre del archivo
$archivo = $_FILES['imagen']['tmp_name']; // obtener el archivo temporal
// Crear la ruta donde se guardará la imagen
$ruta = "img/libros";
$ruta = $ruta."/".$nombreimg; 
// Mover el archivo temporal a la ruta especificada
$move = move_uploaded_file($archivo, $ruta);
// Crear la consulta SQL para insertar los datos del libro en la tabla "libro"
$inserLibro = "insert into libro( titulo, cantidad, stock, idcategoria, idautor, 
    ideditorial, imagen) 
    values('{$titulo}','{$cantidad}','{$stock}','{$idcategoria}', '{$idautor}', '{$ideditorial}', '{$ruta}')";
// Ejecutar la consulta    
$cone = $conexion ->query($inserLibro);
// Redirigir al usuario a la página de libros
header("location: ../libros.php");
?>
