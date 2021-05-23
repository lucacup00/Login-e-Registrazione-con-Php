<?php
$username="root";
$server="localhost";
$db_nome="provaclasse";
$Password="";



$con=mysqli_connect($server,$username,$Password,$db_nome);

if(!$con){
    echo 'NO CONNESSO';
}
?>