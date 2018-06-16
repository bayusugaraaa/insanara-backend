<?php
include "librari/koneksi.php";
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$idImage = $_GET['id'];

$sqlUpdate=mysql_query("select * FROM image WHERE id = '$idImage'") or die("SQL ERROR".mysql_error());
$data=mysql_fetch_array($sqlUpdate);
echo json_encode($data);
?>