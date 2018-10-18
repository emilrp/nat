<? include"bin/config.php";
$a=$_GET['h'];
if($a=='gol'){
	mysql_query("delete from tpp where id='$_GET[id]'");
	header("Location: gol.php");	
}

if($a=='peg'){
	mysql_query("delete from peg where nip='$_GET[id]'");
	header("Location: peg.php");	
}

if($a=='pen'){
	mysql_query("delete from pen where nip='$_GET[id]'");
	header("Location: pen.php");	
}
?>