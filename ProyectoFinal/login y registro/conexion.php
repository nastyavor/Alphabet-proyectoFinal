<?php 
/*
$dbhost="localhost";
$dbuser="root";
$dbpass="123456";
$dbase="registro";

al final va el nombre de la base de datos 
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbase);
 */
$conexion=mysqli_connect("localhost", "root", "123456","registro");
if(!$conexion){
    die("no hay conexion" .mysql_connect_error());
}

?>