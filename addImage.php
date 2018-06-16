<?php
include "librari/koneksi.php";
//$idImage = $_REQUEST['idImage'];
$nameImage = $_REQUEST['nameImage'];
$createDate = date('Y-m-d h:m:s');

$today = date("Ymd");
$query = "SELECT max(id) AS last FROM image WHERE id LIKE '$today%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi, 8, 4);
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);


$sql=mysql_query("INSERT INTO image (id, nameImage, createDate, rowstatus) values"
        . " ('$nextNoTransaksi','$nameImage','$createDate', '1')") or die("SQL ERROR".mysql_error());
//echo "<script>$('#myModal').modal('show')</script>";
?>

<script>
//    $("#myModal").modal("show");
    alert('Image Berhasil Disimpan');
    window.location.href='index-image.php';
</script>