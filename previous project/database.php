<?php

$host = 'localhost';
$port = 3306;
$dbname = 'blog';
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $pdo = new pdo($dsn,$username,$password);

    $pdo->setAttribute(pdo::ATTR_DEFAULT_FETCH_MODE,pdo::FETCH_ASSOC);

    echo 'databases connected..';
} catch(PDOException $e){
    echo 'connection failed:'. $e->getmessage();
}
?>

