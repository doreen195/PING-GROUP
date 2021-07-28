<?php
$host = 'localhost';
$dbname = 'hospital';
$username = 'root'
$password = '';


try {
    $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}
catch(PDOExcecption $e){
    echo $e->getMessage();
}
?>

