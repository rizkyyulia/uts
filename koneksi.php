<?php
$user="root";
$server="localhost";
$password="";
$database="db_pt_sukses_jaya";

$conn=mysql_connect($server,$user,$password);
if($conn){
	echo 'Ok ';
}else{
	echo 'Cek Lagi';
}

$db=mysql_select_db($database);
if($db){
	echo 'Database Berhasil Terhubung ';
}else{
	echo 'cek lagi';
}
?>