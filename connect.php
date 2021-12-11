<?php
$serverName = "localhost\sqlexpress";

$connectionInfo = array( "Database"=>"Citas_CSS");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
?>