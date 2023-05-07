<?php
    // Datos para conectar a la base de datos.
include "templates/conexion.php";

    if($_GET){
    }else if($_POST){
        //recibe datos ingresado por el form y los envia por como consulta a la base de datos
        $nombre = $_POST["nombre"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $cedula = $_POST["cedula"];
        $correo = $_POST["correo"];
        $es_admin = $_POST["es_admin"];
        $insert = "insert into persona( nombre, usuario, clave, cedula, correo, es_admin) values('{$nombre}','{$usuario}','{$clave}','{$cedula}', '{$correo}', '{$es_admin}')";
        //ejecuta query para enviar informacion a la db
        $cone =$conexion ->query($insert);
        //redireccion a la pantalla de login
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/cargando.css">
        <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
        <style>
            body{
                background-image: url("assets/fondo2.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%; 
            }
            .container {
                margin-top: 10%;
            }
            .img {
                width: 80%;
            }
            @media (max-width: 550px) {
                .img {
                    display: none;
                }
            }
        </style>
    </head>
<body id="library">
<?php include "templates/cabeceraregistro.php";?>
<div class ="container">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="body">
            <div class="row clearfix">
                <div class="img col-sm-6">
                    <img class="img" src="assets/silueta.png" alt="sign up">
                </div>
        <div class="form col-sm-6">
            <div class="row">
                <div class="col-md-12 p-2">
                    <div class="table-responsive">
                        <form action="registro.php" method="post" class="form-signin">
                            <h1 class="h3 mb-3 font-weight-normal">Crear cuenta</h1>
                            <div class="mb-3">
                                <input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Nombre" autofocus="" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" id="inputUsuario" name="usuario" class="form-control" placeholder="Usuario" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" id="inputClave" name="clave" class="form-control" placeholder="Clave" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" id="inputCedula" name="cedula" class="form-control" placeholder="Cedula" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" id="inputAdmin" name="es_admin" class="form-control" placeholder="Admin" value="0" hidden>
                            </div>
                            <div class="mb-3">
                                <input type="mail" id="inputCorreo" name="correo" class="form-control" placeholder="Correo" required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Crear cuenta</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>