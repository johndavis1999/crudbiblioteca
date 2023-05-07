<?php
$conexion = new mysqli("localhost", "root", "", "biblioteca");

mysqli_query($conexion,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>