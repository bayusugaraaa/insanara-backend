<?php
include "librari/koneksi.php";
//$idImage = $_REQUEST['idImage'];
// $postdata = file_get_contents("php://input");
// $email = $request->email;
// $fullName = $request->fullName;
// $userName = $request->userName;
// $mobile = $request->mobile;
// $id = $request->id;

$userName = $_GET['userName'];
$fullName = $_GET['fullName'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$id = $_GET['id'];
$createDate = date('Y-m-d h:m:s');

$qry_em = 'select count(*) as cnt from register where email ="' . $email . '"';
$qry_res = mysql_query($qry_em);
$res = mysql_fetch_assoc($qry_res);

if($res['cnt']==0){
$qry = 'UPDATE register SET email = "'.$email.'", fullName = "'.$fullName.'",  mobile = "'.$mobile.'",  userName = "'.$userName.'", dateRegister = "'.$createDate.'" WHERE id = "'.$id.'"';
$qry_res = mysql_query($qry);
    if ($qry_res) {
        echo "1";
    } else {
        echo "2";
    }
}
else
{
    echo "0";
}

?>

<script>
</script>