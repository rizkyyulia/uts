<?php
include "koneksi.php";
$tampil_data=mysql_query($input,"select *from cuti");
?>
<from action="" method="POST">
<table border="1" cellpadding="6" cellspacing="6">
<tr> 
<th>nik</th>
<th>nama</th>
<th>jabatan</th>
<th>hakcuti</th>
</tr>
<?php while($data=mysql_fetch_array($tampil_data)){?>
<tr>
<td ><?php echo $data["nik"];?></td>
<td ><?php echo $data["nama"];?></td>
<td ><?php echo $data["jabatan"];?></td>
<td ><?php echo $data["hakcuti"];?></td>
</td>
</tr>
<?php } ?>
</table>
