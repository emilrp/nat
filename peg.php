<? include"atas.php";?>
<h2>Pegawai</h2>
<? if(empty($_GET['ed'])){ ?>
<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>NIP</td><td> : </td><td><input type='text' name='nip' maxlength=16 /></td></tr>
<tr><td>Nama</td><td> : </td><td><input type='text' name='nm' /></td></tr>
<tr><td>Golongan</td><td> : </td><td>
<? echo"<select name='gol' class=input><option value=0 selected>-Pilih Golongan -</option>";
		  $d1 = mysql_query("select * from tpp order by id");
		  while ($r1 = mysql_fetch_array($d1))
		  { echo "<option value=$r1[id]>$r1[gol]</option>"; }
		  echo "</select>";?></td></tr>
<tr><td>Jabatan</td><td> : </td><td><input type='text' name='jab' /></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Simpan' /></td></tr>
</table>
<input type='hidden' name='cek' value='c' />
</form>
<? }else{ $e=mysql_fetch_array(mysql_query("SELECT * FROM peg WHERE nip='$_GET[id]'"));
echo"<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>NIP</td><td> : </td><td><input type='text' name='nip' value='$e[nip]' /></td></tr>
<tr><td>Nama</td><td> : </td><td><input type='text' name='nm' value='$e[nm]' /></td></tr>
<tr><td>Golongan</td><td> : </td><td>";
echo"<select name='gol'>";
          $t1=mysql_query("SELECT * FROM tpp");
          if ($e['gol']==0){
            echo "<option value=0 selected>- Pilih Golongan -</option>";} 
          while($w1=mysql_fetch_array($t1)){
            if ($e['gol']==$w1['id']){
              echo "<option value=$w1[id] selected>$w1[gol]</option>";}
            else{echo "<option value=$w1[id]>$w1[gol]</option>";}
          }echo "</select></td></tr>
<tr><td>Jabatan</td><td> : </td><td><input type='text' name='jab' value='$e[jab]' /></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Update' /></td></tr>
</table>
<input type='hidden' name='cek' value='d' />
<input type='hidden' name='id' value='$e[nip]' />
</form>";
}?>
<table align="center" id="table-a">
<tr><th>No</th><th>NIP</th><th>Nama</th><th>Golongan</th><th>Jabatan</th><th>Aksi</th></tr>
<? $ro=mysql_query("SELECT * FROM peg ORDER BY nip ASC");
while($r=mysql_fetch_array($ro)){
	$p=mysql_fetch_array(mysql_query("SELECT * FROM tpp WHERE id='$r[gol]'"));
	echo"<tr><th>$n</th><td>$r[nip]</td><td>$r[nm]</td><td>$p[gol]</td><td>$r[jab]</td><td align=center>
	<a href='peg.php?id=$r[nip]&ed=ed'>Edit</a> | 
	<a href='hps.php?h=peg&id=$r[nip]' onClick=\"return confirm('Anda Yakin Ingin Menghapus Data Ini ?')\">hapus</a></td></tr>";
$n++;}?>
</table>
<? include"bawah.php";?>