<?php 

$nameOfHost="db";
$database_name="assignment1";
$username="root";
$password="root";

try{
    $database= new PDO("mysql:host=$nameOfHost;dbname=$database_name",$username,$password);

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error)
{
    echo "DB Failed Connection!" .$error->getMessage();
}

?>