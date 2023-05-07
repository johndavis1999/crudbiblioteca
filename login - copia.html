<?php
    // Datos para conectar a la base de datos.
    include "templates/conexion.php";
    if($_POST){
        session_start();
        // Obtengo los datos cargados en el formulario de login.
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        // Consulta segura para evitar inyecciones SQL.
        //$sql = sprintf("SELECT * FROM persona WHERE usuario='%s' AND clave = %s", mysql_real_escape_string($usuario), mysql_real_escape_string($clave));
        $sql = "select * from persona where usuario='$usuario' and clave = '$clave'";
        $resultado = $conexion->query($sql);
        $array = mysqli_fetch_array($resultado);
        // Verificando si el usuario existe en la base de datos.
        if($array){
          // Guardo en la sesión el usuario del usuario.
          $_SESSION['usuario'] = $array;
           print_r($array); 
          if($array["es_admin"]==1) {
            // Redirecciono al usuario a la página principal del sitio.
            header("Location: admin/libros.php");
          } else {
            // Redirecciono al usuario a la página principal del sitio.
            header("Location: home.php");
          }
        }else{
          echo 'El usuario o clave es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <?php include "templates/cabeceralogin.php";?>
    <div class ="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="body">
                    <div class="row clearfix">
                        <div class="img col-sm-6">
                            <img class="img" src="assets/silueta.png" alt="silueta">
                        </div>
                        <div class="form col-sm-6">
                            <div class="row">
                                <div class="col-md-12 p-2">
                                    <div class="table-responsive">
                                        <form action="login.php" method="post" class="form-signin">
                                            <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
                                            <div class="mb-3">
                                            <input type="text" id="inputusuario" name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
                                            </div> 
                                            <div class="mb-3">
                                            <input type="clave" id="inputClave" name="clave" class="form-control" placeholder="Clave" required="">
                                            </div> 
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesion</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>