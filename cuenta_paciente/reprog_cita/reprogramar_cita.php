<?php
session_start();

$idCita = $_POST['idCita'];
$fechaCita = $_POST['fechaCita'];
$horaCita = $_POST['horaCita'];

include("../../connect.php");

$sql = "update Citas set fechaCita = '$fechaCita' or horaCita = '$horaCita' where idCita = '$idCita'";
$stmt = sqlsrv_query($conn, $sql);

if($stmt){
    header("Location: ../cuenta.php");
}
else{
    echo "Su cita no ha podido ser reprogramada. Intentelo nuevamente.";
    header("Refresh:5;url:reprogramar_cita.html");
}
?>