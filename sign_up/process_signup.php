<?php
include("../connect.php");

$nombre_paciente = $_POST['nombre_paciente'];
$idPaciente = $_POST['idPaciente'];
$passPaciente = $_POST['passPaciente'];
$telefono_paciente = $_POST['telefono_paciente'];
$poliza_seg = $_POST['poliza_seg'];
$correo_paciente = $_POST['correo_paciente'];
$fecha_nacto = $_POST['fecha_nacto'];

$sql = "insert into Pacientes values ('$idPaciente', '$passPaciente', '$nombre_paciente', '$telefono_paciente', '$poliza_seg', '$correo_paciente', '$fecha_nacto')";
$stmt = sqlsrv_query($conn, $sql);

if($stmt){
    header("Location: ../log_in/login_paciente.html");
}
else{
    header("Location: ../sign_up/signup_paciente.html");
}
?>