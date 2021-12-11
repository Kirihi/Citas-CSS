<?php
$serverName = "localhost\sqlexpress";

$connectionInfo = array( "Database"=>"Citas-CSS");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
?>