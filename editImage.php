<?php
include "librari/koneksi.php";

$idImage = isset($_GET['id']);
$imageID = $_REQUEST['imageID'];
$nameImage = $_REQUEST['nameImage'];
$createDate = date('Y-m-d h:m:s');

$sql=mysql_query("update image set nameImage='$nameImage', createDate='$createDate'  WHERE id = '$imageID'") or die("SQL ERROR".mysql_error());
//echo "<script>$('#myModal').modal('show')</script>";
?>

<script>
//    $("#myModal").modal("show");
    alert('Image Berhasil Diupdate');
    window.location.href='index-image.php';
</script>