<?php
include "librari/koneksi.php";
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$idRegister = $_GET['id'];

$sqlUpdate=mysql_query("select * FROM register WHERE id = '$idRegister'") or die("SQL ERROR".mysql_error());
$data=mysql_fetch_array($sqlUpdate);
echo json_encode($data);
?>