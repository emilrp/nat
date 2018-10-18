<? include"atas.php";?>
<h2>Golongan</h2>
<? if(empty($_GET['ed'])){ ?>
<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>Pangkat / Golongan Ruang</td><td> : </td><td><input type='text' name='gol' /></td></tr>
<tr><td>TPP Maximal</td><td> : </td><td><input type='text' name='tpp' /></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Simpan' /></td></tr>
</table>
<input type='hidden' name='cek' value='a' />
</form>
<? }else{ $e=mysql_fetch_array(mysql_query("SELECT * FROM tpp WHERE id='$_GET[id]'"));
echo"<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>Pangkat / Golongan Ruang</td><td> : </td><td><input type='text' name='gol' value='$e[gol]' /></td></tr>
<tr><td>TPP Maximal</td><td> : </td><td><input type='text' name='tpp' value='$e[tpp]' /></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Update' /></td></tr>
</table>
<input type='hidden' name='cek' value='b' />
<input type='hidden' name='id' value='$e[id]' />
</form>";
}?>
<table align="center" id="table-a">
<tr><th>No</th><th>Pangkat / Golongan Ruang</th><th>TPP Maximal</th><th>Aksi</th></tr>
<? $ro=mysql_query("SELECT * FROM tpp ORDER BY id ASC");
while($r=mysql_fetch_array($ro)){
	echo"<tr><th>$n</th><td>$r[gol]</td><td>$r[tpp]</td><td align=center>
	<a href='gol.php?id=$r[id]&ed=ed'>Edit</a> | 
	<a href='hps.php?h=gol&id=$r[id]' onClick=\"return confirm('Anda Yakin Ingin Menghapus Data Ini ?')\">hapus</a></td></tr>";
$n++;}?>
</table>
<? include"bawah.php";?>