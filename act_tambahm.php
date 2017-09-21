<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
extract($_POST);
$nim = $_POST['NIM'];
$nama = $_POST['name'];
$tgl = $_POST['tgl'];
$jenkel = $_POST['jenkel'];
$univ = $_POST['univ'];
$kom = $_POST['komunitas'];
$email = $_POST['email'];
$pass= $_POST['pass'];

$query2="INSERT into user VALUES (null,'$email','$pass','mahasiswa')";
$connect->query($query2);
// $hasil2 = mysqli_query($connect,$query2);
$iduser = mysqli_insert_id($connect);

$query="INSERT INTO mahasiswa VALUES (null,'$nim','$nama','$tgl','$jenkel',". $univ .",
". $kom .",". $iduser .")" ;

$connect->query($query);
if($connect)
{
echo "insert tabel pertama berhasil ...<br/> ";
}
else
{
echo "Gagal insert ... ";
}

if ($connect){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal disimpan 
 <meta http-equiv='refresh' content='2; url= form_mahasiswa.php'/> ";
}

?>