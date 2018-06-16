<?php
include "librari/koneksi.php";
header('Access-Control-Allow-Origin: *');
$idImage = $_GET['idImage'];
$idUser = $_GET['idUser'];
$userName = $_GET['userName'];
$userPoint = $_GET['userPoint'];
$createDate = date('Y-m-d h:m:s');

$today = date("Ymd");
$query = "SELECT max(id) AS last FROM masterpoint WHERE id LIKE '$today%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi, 8, 4);
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);


$sql=mysql_query("INSERT INTO masterpoint (id, idImage, idUser, userName, userPoint, createDate, rowstatus) values"
        . " ('$nextNoTransaksi','$idImage','$idUser', '$userName','$userPoint','$createDate', '1')") or die("SQL ERROR".mysql_error());
//echo "<script>$('#myModal').modal('show')</script>";
?>