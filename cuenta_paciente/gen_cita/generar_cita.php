<?php
session_start();
if($_SESSION['idPaciente']){
    $cedula = $_SESSION['idPaciente'];
}
$policlinica = $_POST['policlinica'];
$especialidad = $_POST['especialidad'];
$fechaCita = $_POST['fechaCita'];
$horaCita = $_POST['horaCita'];

include("../../connect.php");

$sql = "insert into Citas (policlinica, especialidad, fechaCita, horaCita, idPaciente) values ('$policlinica', '$especialidad', '$fechaCita', '$horaCita', '$cedula')";
$stmt = mysqli_query($conn, $sql);

if($stmt){
    header("Location: ../cuenta.php");
}
else{
    echo "Su cita no ha podido ser programada. Seleccione otra fecha u hora";
    header("refresh:5; url:generar_cita.html");
}
?>