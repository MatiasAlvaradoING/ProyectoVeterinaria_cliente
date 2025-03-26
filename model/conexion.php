<?php
$ipaddress='10.0.0.22';
$database='PRACTICA';
$userDB='BAKAPP';
$passDB='Jalfaro2021';
#Conexion#
$con="Driver={SQL SERVER};Server=$ipaddress;Database=$database;";
$cid = odbc_connect($con,$userDB, $passDB) or die();
if(!$cid){
	echo "Problemas de Conexion";
}else{
	//echo "○";
}
?>