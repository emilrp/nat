<? include"atas.php";?>
<h2>Penilaian</h2>
<? if(empty($_GET['ed'])){ ?>
<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>NIP</td><td> : </td><td>
<? echo"<select name='nip' class=input><option value=0 selected>-Pilih Nip -</option>";
		  $d1 = mysql_query("select * from peg order by nm");
		  while ($r1 = mysql_fetch_array($d1))
		  { echo "<option value=$r1[nip]>$r1[nm] ($r1[nip])</option>"; }
		  echo "</select>";?></td></tr>
<tr><td>Tahun</td><td> : </td><td><input type='text' name='thn' maxlength=4 /></td></tr>
<tr><td>Bulan</td><td> : </td><td><input type='text' name='bln' maxlength=3 /></td></tr>
<tr><td>Jumlah Hari Kerja</td><td> : </td><td><input type='text' name='jhk' maxlength=3 /></td></tr>
<tr><td>Hadir</td><td> : </td><td><input type='text' name='h' maxlength=3 /></td></tr>
<tr><td>Izin</td><td> : </td><td><input type='text' name='i' maxlength=3 /></td></tr>
<tr><td>Sakit</td><td> : </td><td><input type='text' name='s' maxlength=11 /></td></tr>
<tr><td>Cuti</td><td> : </td><td><input type='text' name='c' maxlength=11 /></td></tr>
<tr><td>Tanpa Alasan Sah</td><td> : </td><td><input type='text' name='a' maxlength=3 /></td></tr>
<tr><td>Terlambat</td><td> : </td><td><input type='text' name='t' maxlength=3 /></td></tr>
<tr><td>Cepat Pulang</td><td> : </td><td><input type='text' name='cp' maxlength=3 /></td></tr>
<tr><td>UWAS *)</td><td> : </td><td><input type='text' name='uwas' maxlength=3 /></td></tr>
<tr><td>Upacara</td><td> : </td><td><input type='text' name='up' maxlength=3 /></td></tr>
<tr><td>Wirid</td><td> : </td><td><input type='text' name='wi' maxlength=3 /></td></tr>
<tr><td>Apel</td><td> : </td><td><input type='text' name='ap' maxlength=3 /></td></tr>
<tr><td>Senam</td><td> : </td><td><input type='text' name='se' maxlength=3 /></td></tr>
<tr><td>SKP</td><td> : </td><td><input type='text' name='skp' maxlength=3 /></td></tr>
<tr><td>Orientasi Pelayanan</td><td> : </td><td><input type='text' name='op' maxlength=3 /></td></tr>
<tr><td>Integritas</td><td> : </td><td><input type='text' name='in' maxlength=3 /></td></tr>
<tr><td>Kerja Sama</td><td> : </td><td><input type='text' name='ker' maxlength=3 /></td></tr>
<tr><td>Kepemimpinan</td><td> : </td><td><input type='text' name='kep' maxlength=3 /></td></tr>
<tr><td>LKH</td><td> : </td><td><input type='text' name='lkh' maxlength=11 /></td></tr>
<tr><td>SOP</td><td> : </td><td><input type='text' name='sop' maxlength=3 /></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Simpan' /></td></tr>
</table>
<input type='hidden' name='cek' value='e' />
</form>
<? }else{ $e=mysql_fetch_array(mysql_query("SELECT * FROM pen WHERE nip='$_GET[id]'"));
echo"<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>NIP</td><td> : </td><td>$e[nip]</td></tr>
<tr><td>Tahun</td><td> : </td><td><input type='text' name='thn' maxlength=4 value='$e[thn]'/></td></tr>
<tr><td>Bulan</td><td> : </td><td><input type='text' name='bln' maxlength=3 value='$e[bln]'/></td></tr>
<tr><td>Jumlah Hari Kerja</td><td> : </td><td><input type='text' name='jhk' maxlength=3 value='$e[jhk]'/></td></tr>
<tr><td>Hadir</td><td> : </td><td><input type='text' name='h' maxlength=3 value='$e[ha]'/></td></tr>
<tr><td>Izin</td><td> : </td><td><input type='text' name='i' maxlength=3 value='$e[iz]'/></td></tr>
<tr><td>Sakit</td><td> : </td><td><input type='text' name='s' maxlength=11 value='$e[sa]'/></td></tr>
<tr><td>Cuti</td><td> : </td><td><input type='text' name='c' maxlength=11 value='$e[cu]'/></td></tr>
<tr><td>Tanpa Alasan Sah</td><td> : </td><td><input type='text' name='a' maxlength=3 value='$e[ab]'/></td></tr>
<tr><td>Terlambat</td><td> : </td><td><input type='text' name='t' maxlength=3 value='$e[te]'/></td></tr>
<tr><td>Cepat Pulang</td><td> : </td><td><input type='text' name='cp' maxlength=3 value='$e[cp]'/></td></tr>
<tr><td>UWAS</td><td> : </td><td><input type='text' name='uwas' maxlength=3 value='$e[uwas]'/></td></tr>
<tr><td>Upacara</td><td> : </td><td><input type='text' name='up' maxlength=3 value='$e[up]'/></td></tr>
<tr><td>Wirid</td><td> : </td><td><input type='text' name='wi' maxlength=3 value='$e[wi]'/></td></tr>
<tr><td>Apel</td><td> : </td><td><input type='text' name='ap' maxlength=3 value='$e[ap]'/></td></tr>
<tr><td>Senam</td><td> : </td><td><input type='text' name='se' maxlength=3 value='$e[se]'/></td></tr>
<tr><td>SKP</td><td> : </td><td><input type='text' name='skp' maxlength=3 value='$e[skp]'/></td></tr>
<tr><td>Orientasi Pelayanan</td><td> : </td><td><input type='text' name='op' maxlength=3 value='$e[op]'/></td></tr>
<tr><td>Integritas</td><td> : </td><td><input type='text' name='in' maxlength=3 value='$e[integritas]'/></td></tr>
<tr><td>Kerja Sama</td><td> : </td><td><input type='text' name='ker' maxlength=3 value='$e[ker]'/></td></tr>
<tr><td>Kepemimpinan</td><td> : </td><td><input type='text' name='kep' maxlength=3 value='$e[kep]'/></td></tr>
<tr><td>LKH</td><td> : </td><td><input type='text' name='lkh' maxlength=11 value='$e[lkh]'/></td></tr>
<tr><td>SOP</td><td> : </td><td><input type='text' name='sop' maxlength=3 value='$e[sop]'/></td></tr>
<tr><td colspan='3' align='center'><input type='submit' value='Simpan' /></td></tr>
</table>
<input type='hidden' name='cek' value='f' />
<input type='hidden' name='id' value='$e[nip]' />
</form>";
}?>
<table align="center" id="table-a">
<tr><th>No</th><th>NIP</th><th>Nama</th><th>Tahun</th><th>Bulan</th><th>JHK</th><th>H</th><th>I</th><th>S</th><th>C</th><th>TAS</th><th>Terlambat</th><th>Cepat Pulang</th><th>UWAS</th><th>U</th><th>W</th><th>A</th><th>Senam</th><th>SKP</th><th>Orientasi Pelayanan</th><th>Integritas</th><th>Kerja Sama</th><th>Kepemimpinan</th><th>LHK</th><th>SOP</th><th>Aksi</th></tr>
<? $ro=mysql_query("SELECT * FROM pen ORDER BY nip ASC");
while($r=mysql_fetch_array($ro)){
	$p=mysql_fetch_array(mysql_query("SELECT * FROM peg WHERE nip='$r[nip]'"));
	echo"<tr><th>$n</th><td>$r[nip]</td><td>$p[nm]</td><td>$r[thn]</td><td>$r[bln]</td><td>$r[jhk]</td><td>$r[ha]</td><td>$r[iz]</td><td>$r[sa]</td><td>$r[cu]</td><td>$r[ab]</td><td>$r[te]</td><td>$r[cp]</td><td>$r[uwas]</td><td>$r[up]</td><td>$r[wi]</td><td>$r[ap]</td><td>$r[se]</td><td>$r[skp]</td><td>$r[op]</td><td>$r[integritas]</td><td>$r[ker]</td><td>$r[kep]</td><td>$r[lkh]</td><td>$r[sop]</td><td align=center>
	<a href='pen.php?id=$r[nip]&ed=ed'>Edit</a> | 
	<a href='hps.php?h=pen&id=$r[nip]' onClick=\"return confirm('Anda Yakin Ingin Menghapus Data Ini ?')\">hapus</a></td></tr>";
$n++;}?>
</table>
<? include"bawah.php";?>