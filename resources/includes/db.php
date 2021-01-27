<?php

$server = "sql209.epizy.com";
$username ="epiz_27531245";
$password = "59eDwxpOApd";
$dbname = "epiz_27531245_shaundatfpt";
$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:". mysqli_connect_error());
}
?>