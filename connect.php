<?php
$serverName = "20.120.6.3\sqlexpress";

$connectionInfo = array("Database"=>"Citas_CSS", "UID"=>"sa", "PWD"=>"Kirigaya4");
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>