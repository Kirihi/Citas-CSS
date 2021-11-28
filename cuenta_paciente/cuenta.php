<?php
session_start();
if($_SESSION['idPaciente']){
    $cedula = $_SESSION['idPaciente'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <nav>
        <a href="#">Generar cita</a>
        <a href="#">Reprogramar cita</a>
        <a href="#">Cancelar cita</a>
    </nav>
    <a href="">Cerrar sesión</a>
</head>
<body>
    
</body>
</html>
