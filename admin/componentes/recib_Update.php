<?php
// Iniciar conexión a la base de datos
include('../../templates/conexion.php');
// Obtener los datos enviados a través de la formulario de actualización
$idRegistros = $_REQUEST['id'];
$titulo      = $_REQUEST['titulo'];
$cantidad 	 = $_REQUEST['cantidad'];
$stock 	 = $_REQUEST['stock'];
$idcategoria      = $_REQUEST['idcategoria'];
$idautor      = $_REQUEST['idautor'];
$ideditorial      = $_REQUEST['ideditorial'];
$imagen      = $_REQUEST['imagen'];
// Crear la consulta para actualizar los datos del libro en la base de datos
$update = ("UPDATE libro 
	SET 
	titulo  ='" .$titulo. "',
	cantidad ='" .$cantidad. "',
	stock ='" .$stock. "',
	idcategoria ='" .$idcategoria. "',
	idautor  ='" .$idautor. "',
	ideditorial ='" .$ideditorial. "',
	ideditorial ='" .$ideditorial. "'
WHERE id='" .$idRegistros. "'");
// Ejecutar la consulta de actualización
$result_update = mysqli_query($conexion, $update);
// Redirije a la pagina libros una vez terminado de correr el script
echo "<script type='text/javascript'>
        window.location='../libros.php';
    </script>";
?>
