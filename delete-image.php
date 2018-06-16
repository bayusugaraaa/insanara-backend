<?php
include "librari/koneksi.php";

$idImage = $_REQUEST['id'];

if ($idImage != ""){
 $sql=mysql_query("UPDATE image SET rowstatus = 0 WHERE id = '$idImage'") or die("SQL ERROR".mysql_error());
   
}


//echo "<script>$('#myModal').modal('show')</script>";
?>

<script>
//    $("#myModal").modal("show");
    alert('Image Berhasil Dihapus');
    window.location.href='index-image.php';
</script>