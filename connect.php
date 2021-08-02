<?php
$host = 'localhost';
$dbname = 'hospital';
$user = "root";
$pass ="";

try{
    $db = new PDO("mysql:host=$host;dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"connection successful\n";

}
catch(PDOException $e){
    echo "unable to connect".$e->getMessage();

}

?>


