<?php
header('Access-Control-Allow-Origin: *');
// variabel koneksi
$db_name  = 'bukafest';
$hostname = 'localhost';
$username = 'root';
$password = '';

$idImage = $_GET['id'];
// koneksi ke database
$dbh = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
// query untuk menampilkan data
$sql = 'SELECT * FROM image WHERE id '+$idImage;
$stmt = $dbh->prepare($sql);
// execute the query
$stmt->execute();
// pecah hasilnya ke dalam bentuk array
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
// konversi ke JSON
$json = json_encode( $result );
echo $json;
?>