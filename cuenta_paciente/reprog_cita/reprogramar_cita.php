<?php
session_start();

$idCita = $_POST['idCita'];
$fechaCita = $_POST['fechaCita'];
$horaCita = $_POST['horaCita'];

include("../../connect.php");

if(isset($_POST['fechaCita'])){
    $sql = "update Citas set fechaCita = '$fechaCita' where idCita = '$idCita'";
    $stmt = sqlsrv_query($conn, $sql);
}
if (isset($_POST['horaCita'])){
    $sql2 = "update Citas set horaCita = '$horaCita' where idCita = '$idCita'";
    $stmt2 = sqlsrv_query($conn, $sql2);
}

if($stmt || $stmt2){
    header("Location: ../cuenta.php");
}
else{
    echo "Su cita no ha podido ser reprogramada. Intentelo nuevamente.";
    header("Refresh:5;url:reprogramar_cita.html");
}
?>