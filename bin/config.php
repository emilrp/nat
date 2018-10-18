<?php
error_reporting(E_ALL ^ (E_NOTICE));
$s = "localhost";
$u = "root";
$p = "";
$d = "mariadb";
// Koneksi dan memilih database di server
$k = mysql_pconnect($s, $u, $p) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($d, $k);
//@mysql_connect($server,$username,$password) or die("Koneksi gagal");
//@mysql_select_db($database) or die("Database tidak bisa dibuka");

?>