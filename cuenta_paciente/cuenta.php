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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cuenta</title>
    <nav class="menu">
        <a href="gen_cita/generar_cita.html">Generar cita</a>
        <a href="reprog_cita/reprogramar_cita.html">Reprogramar cita</a>
        <a href="cancel_cita/cancelar_cita.html">Cancelar cita</a>
    </nav>
    <a href="../index.html" class="enlaces">Cerrar sesión</a>
</head>
<body>
<br>
<br>
    <table class="container">
    <tr>
    <th>No. de Cita</th>
    <th>Policlinica</th>
    <th>Especialidad</th>
    <th>Fecha</th>
    <th>Hora</th>
    </tr>
        <?php
            include("../connect.php");
        
            $sql = "select * from Citas where idPaciente = '$cedula'";
            $stmt = sqlsrv_query($conn, $sql);

            while($show = sqlsrv_fetch_array($stmt)){
        ?>
        <tr>
            <td><?= $show['idCita'] ?></td>
            <td><?= $show['policlinica'] ?></td>
            <td><?= $show['especialidad'] ?></td>
            <td><?= $show['fechaCita'] -> format('d/m/Y') ?></td>
            <td><?= $show['horaCita'] -> format('H:i') ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>
