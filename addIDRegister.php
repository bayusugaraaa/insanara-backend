<?php
include "librari/koneksi.php";
//$idImage = $_REQUEST['idImage'];

for ($i = 1; $i<=300; $i++ ){
	$createDate = date('Y-m-d h:m:s');

	$today = date("Ymd");
	$query = "SELECT max(id) AS last FROM register WHERE id LIKE '$today%'";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$lastNoTransaksi = $data['last'];
	$lastNoUrut = substr($lastNoTransaksi, 8, 6);
	$nextNoUrut = $lastNoUrut + 1;
	$nextNoTransaksi = $today.sprintf('%06s', $nextNoUrut);


	$sql=mysql_query("INSERT INTO register (id, createDate, rowstatus) values"
	        . " ('$nextNoTransaksi','$createDate', '1')") or die("SQL ERROR".mysql_error());
	//echo "<script>$('#myModal').modal('show')</script>";
}

?>