<? include"atas.php";?>
<h2>Penilaian</h2>
<? if(empty($_GET['ed'])){ ?>
<? }else{ $e=mysql_fetch_array(mysql_query("SELECT * FROM pen WHERE nip='$_GET[id]'"));
$n=mysql_fetch_array(mysql_query("SELECT * FROM peg WHERE nip='$e[nip]'"));
$g=mysql_fetch_array(mysql_query("SELECT * FROM tpp WHERE id='$n[gol]'"));
$tp=fr($g[tpp]);
echo"<form action='aksi.php' method='post' enctype='multipart/form-data'>
<table border='0'>
<tr><td>NIP</td><td> : </td><td>$e[nip]</td></tr>
<tr><td>Nama</td><td> : </td><td>$n[nm]</td></tr>
<tr><td>Pangkat / Golongan</td><td> : </td><td>$g[gol]</td></tr>
<tr><td>Jabatan</td><td> : </td><td>$n[jab]</td></tr>
<tr><td>TPP Maximal</td><td> : </td><td>$tp</td></tr>
<tr><td>Tahun</td><td> : </td><td>$e[thn]</td></tr>
<tr><td>Bulan</td><td> : </td><td>$e[bln]</td></tr>
<tr><td>Jumlah Hari Kerja</td><td> : </td><td>$e[jhk]</td></tr>
<tr><td>Hadir</td><td> : </td><td>$e[ha]</td></tr>
<tr><td>Izin</td><td> : </td><td>$e[iz]</td></tr>
<tr><td>Sakit</td><td> : </td><td>$e[sa]</td></tr>
<tr><td>Cuti</td><td> : </td><td>$e[cu]</td></tr>
<tr><td>Tanpa Alasan Sah</td><td> : </td><td>$e[ab]</td></tr>
<tr><td>Terlambat</td><td> : </td><td>$e[te]</td></tr>
<tr><td>Cepat Pulang</td><td> : </td><td>$e[cp]</td></tr>
<tr><td>UWAS *)</td><td> : </td><td>$e[uwas]</td></tr>
<tr><td>Upacara</td><td> : </td><td>$e[up]</td></tr>
<tr><td>Wirid</td><td> : </td><td>$e[wi]</td></tr>
<tr><td>Apel</td><td> : </td><td>$e[ap]</td></tr>
<tr><td>Senam</td><td> : </td><td>$e[se]</td></tr>
<tr><td>SKP</td><td> : </td><td>$e[skp]</td></tr>
<tr><td>Orientasi Pelayanan</td><td> : </td><td>$e[op]</td></tr>
<tr><td>Integritas</td><td> : </td><td>$e[integritas]</td></tr>";
$kom=ceil((($e[up]+$e[wi]+$e[ap]+$e[se])/$e[uwas])*100);
$dis=ceil(($e[ha]/$e[jhk])*100);
echo";<tr><td>Komitmen</td><td> : </td><td>$kom</td></tr>
<tr><td>Disiplin</td><td> : </td><td>$dis</td></tr>
<tr><td>Kerja Sama</td><td> : </td><td>$e[ker]</td></tr>
<tr><td>Kepemimpinan</td><td> : </td><td>$e[kep]</td></tr>
<tr><td>LKH</td><td> : </td><td>$e[lkh]</td></tr>
<tr><td>SOP</td><td> : </td><td>$e[sop]</td></tr>";
$pk=((0.2*$e[op])+(0.2*$e[integritas])+(0.2*$e[ko])+(0.2*$dis)+(0.1*$e[ker])+(0.1*$e[kep]));
if($e[skp]<26){$skp=25;}elseif($e[skp]<51){$skp=50;}elseif($e[skp]<76){$skp=75;}else{$skp=100;}
$ppk=(0.6*$skp)+(0.4*$pk);
$ki=((0.7*($ppk/100))*(0.7*$g[tpp]))+(0.2*($e[lkh]/100)*(0.7*$g[tpp]))+(0.1*($e[sop]/100));
$ke=(0.3*$g[tpp])-(((0.05*$e[ab])+(0.03*$e[iz])+(0.03*(($e[te]+$e[cp])/300))*0.3*$g[tpp]));
$tpb=fr(ceil($ke+$ki));
echo">
<tr><td>TPP Bulan Ini</td><td> : </td><td>$tpb</td></tr></table>
</form>";
}?>
<table align="center" id="table-a">
<tr><th>No</th><th>NIP</th><th>Nama</th><th>Tahun</th><th>Bulan</th><th>JHK</th><th>H</th><th>I</th><th>S</th><th>C</th><th>TAS</th><th>Terlambat</th><th>Cepat Pulang</th><th>U</th><th>W</th><th>A</th><th>Senam</th><th>SKP</th><th>Orientasi Pelayanan</th><th>Integritas</th><th>Kerja Sama</th><th>Kepemimpinan</th><th>LHK</th><th>SOP</th><th>Aksi</th></tr>
<? $ro=mysql_query("SELECT * FROM pen ORDER BY nip ASC");
while($r=mysql_fetch_array($ro)){
	$p=mysql_fetch_array(mysql_query("SELECT * FROM peg WHERE nip='$r[nip]'"));
	echo"<tr><th>$n</th><td>$r[nip]</td><td>$p[nm]</td><td>$r[thn]</td><td>$r[bln]</td><td>$r[jhk]</td><td>$r[ha]</td><td>$r[iz]</td><td>$r[sa]</td><td>$r[cu]</td><td>$r[ab]</td><td>$r[te]</td><td>$r[cp]</td><td>$r[up]</td><td>$r[wi]</td><td>$r[ap]</td><td>$r[se]</td><td>$r[skp]</td><td>$r[op]</td><td>$r[integritas]</td><td>$r[ker]</td><td>$r[kep]</td><td>$r[lkh]</td><td>$r[sop]</td><td align=center>
	<a href='lap.php?id=$r[nip]&ed=ed'>Detail</a>";
$n++;}?>
</table>
<? include"bawah.php";?>