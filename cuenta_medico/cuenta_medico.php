<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cuenta médico</title>
</head>
<body>
    <table>
        <tr>
        <th>No. de Cita</th>
        <th>Fecha</th>
        <th>Hora</th>
        </tr>
        <?php
            include("../connect.php");
        
            $sql = "select Citas.idCita, Citas.fechaCita, Citas.horaCita from Citas, Medico where fechaCita = cast(getdate() as date) and Citas.especialidad = Medico.Cargo";
            $stmt = sqlsrv_query($conn, $sql);

            while($show = sqlsrv_fetch_array($stmt)){
        ?>
        <tr>
            <td><?= $show['idCita'] ?></td>
            <td><?= $show['fechaCita'] -> format('d/m/Y') ?></td>
            <td><?= $show['horaCita'] -> format('H:i') ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>