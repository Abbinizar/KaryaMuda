<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
extract($_POST);
$nama = $_POST['nama'];
$pj = $_POST['pj'];
$tgl = $_POST['tgl'];
$prov = $_POST['namaprovinsi'];
$kab = $_POST['kabupaten'];
$email = $_POST['email'];
$pass= $_POST['pass'];


$query2="INSERT into user VALUES (null,'$email','$pass','komunitas')";
$connect->query($query2);
// $hasil2 = mysqli_query($connect,$query2);
$iduser = mysqli_insert_id($connect);

$query="INSERT INTO komunitas VALUES (null,'$nama','$pj','$tgl','". $prov ."',
'". $kab ."','$email','$pass','". $iduser ."')" ;

$connect->query($query);
if($connect)
{
echo "insert tabel pertama berhasil ...<br/> ";
}
else
{
echo "Gagal insert ... ";
}

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else {
 <meta http-equiv='refresh' content='2; url= form_komunitas.php'/> ";
}

?>