<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_input_cuti="insert into cuti(nik,nama,jabatan,hakcuti)values
	('".$_POST['nik']."',
	 '".$_POST['nama']."',
    '".$_POST['jabatan']."',
'".$_POST['hakcuti']."')";
	 $proses_data=mysql_query($query_input_cuti);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo mysql_error();
}
}


?>
<form method="POST" action="">
	<table>
		<tr>
			<td>Nik Karyawan</td>
			<td><input name="nik" type="text"></td>
		</tr>
	<tr>
			<td>Nama Karyawan</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>Jabatan Karyawan</td>
			<td><input name="jabatan" type="text"></td>
		</tr>
	<tr>
			<td>Hak Cuti Karyawan</td>
			<td><input name="hakCuti" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>