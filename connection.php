<?php

function connect()
{
$host="localhost";
$user="root";
$pass="";
$database="cc";
$con=mysqli_connect($host,$user,$pass,$database);
return $con;
}
?>