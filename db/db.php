<?php


$server='localhost';
$user='root';
$pass='';
$db='pro';




$conn = new mysqli($server,$user,$pass,$db);

// echo var_dump($conn);

if($conn->connect_error)
{
    echo 'Erro';
}

echo 'connected succcess';



?>