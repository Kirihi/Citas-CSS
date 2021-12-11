<?php
session_start();
if (isset($_SESSION['userAdmin'])){
    $username = $_SESSION['userAdmin'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cuenta de Administrador</title>
    <nav class="menu">
        <a href="signup_medico/signup_medico.html">Registro de médico</a>
    </nav>
    <a href="cerrar_sesion.php" class="enlaces">Cerrar sesión</a>
</head>
<body>
    <?php
    include("../connect.php");

    $sql = "select nombreAdmin from [Admin] where userAdmin = '$username'";
    $stmt = sqlsrv_query($conn, $sql);

    while($show = sqlsrv_fetch_array($stmt)){
    ?>
    <center><h2>Bienvenido, <?= $show['nombreAdmin']?></h2></center>
    <?php
    }
    ?>
</body>
</html>