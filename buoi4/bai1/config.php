<?php
$user='scott';
$pass='tiger';
$db='(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT = 1521)) (CONNECT_DATA=(SERVER=DEDICATED)(SERVICE_NAME= orcl.168.1.10)))';
$link=oci_connect($user,$pas,ORCL');
if(!$link){
	$error=oci_error();
	echo $error['message'];
	exit();
}
?>