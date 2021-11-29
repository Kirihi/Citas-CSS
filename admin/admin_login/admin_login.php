<?php
$email = $_POST['admin_email'];
$pass = $_POST['admin_pass'];

include("../../connect.php");

$sql = "select emailAdmin, passAdmin from [Admin] where emailAdmin = '$email' and passAdmin = '$pass'";
$stmt = sqlsrv_query($conn, $sql);

session_start();
if (isset($_POST['admin_email'])){
    $_SESSION['admin_email'] = $_POST['admin_email'];
}
if($stmt){
    header("Location: ../cuenta_admin.php");
}
else{
    header("Location: admin_login.html");
}
?>