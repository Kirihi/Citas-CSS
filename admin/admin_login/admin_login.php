<?php
$username = $_POST['userAdmin'];
$pass = $_POST['admin_pass'];

include("../../connect.php");

$sql = "select userAdmin, passAdmin from [Admin] where userAdmin = '$username' and passAdmin = '$pass'";
$stmt = sqlsrv_query($conn, $sql);

session_start();
if (isset($_POST['userAdmin'])){
    $_SESSION['userAdmin'] = $_POST['userAdmin'];
}
if($stmt){
    header("Location: ../cuenta_admin.php");
}
else{
    header("Location: admin_login.html");
}
?>