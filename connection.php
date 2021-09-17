<?php
$host = 'localhost';
$user = 'root';
$password ='';
$database = 'dbuser';

$con = mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_error()){
    echo mysqli_connect_error();
}

?>