<? //profile matching
include "bin/config.php";
$h=$_POST['cek'];
	
	if ($h=='a'){
	mysql_query("INSERT INTO tpp (id, gol, tpp) 
	VALUES ('', '$_POST[gol]', '$_POST[tpp]')");
  	header('location:gol.php'); }
	
	if ($h=='b'){
	mysql_query("UPDATE tpp SET gol='$_POST[gol]', tpp='$_POST[tpp]' WHERE id='$_POST[id]'");
  	header('location:gol.php'); }
	
	if ($h=='c'){
	mysql_query("INSERT INTO peg (nip, nm, gol, jab) 
	VALUES ('$_POST[nip]', '$_POST[nm]', '$_POST[gol]', '$_POST[jab]')");
  	header('location:peg.php'); }
	
	if ($h=='d'){
	mysql_query("UPDATE peg SET nm='$_POST[nm]', gol='$_POST[gol]', jab='$_POST[jab]' WHERE nip='$_POST[id]'");
  	header('location:peg.php'); }
	
	if ($h=='e'){
	mysql_query("INSERT INTO pen (nip, thn, bln, jhk, ha, iz, sa, cu, ab, te, cp, up, wi, ap, se, skp, op, integritas, ker, kep, lkh, sop) 
	VALUES ('$_POST[nip]', '$_POST[thn]', '$_POST[bln]', '$_POST[jhk]', '$_POST[h]', '$_POST[i]', '$_POST[s]', '$_POST[c]', '$_POST[a]', '$_POST[t]', '$_POST[cp]', '$_POST[up]', '$_POST[wi]', '$_POST[ap]', '$_POST[se]', '$_POST[skp]', '$_POST[op]', '$_POST[in]', '$_POST[ker]', '$_POST[kep]', '$_POST[lkh]', '$_POST[sop]')");
	 header('location:pen.php'); }
	
	if ($h=='f'){
	mysql_query("UPDATE pen SET thn='$_POST[thn]', bln='$_POST[bln]', jhk='$_POST[jhk]', ha='$_POST[h]', iz='$_POST[i]', sa='$_POST[s]', cu='$_POST[c]', ab='$_POST[a]', te='$_POST[t]', cp='$_POST[cp]', up='$_POST[up]', wi='$_POST[wi]', ap='$_POST[ap]', se='$_POST[se]', skp='$_POST[skp]', op='$_POST[op]', in='$_POST[in]', ker='$_POST[ker]', kep='$_POST[kep]', lkh='$_POST[lkh]', sop='$_POST[sop]' WHERE nip='$_POST[id]'");
  	header('location:pen.php'); }
	
?>