<?php

$host = '127.0.0.1';
$user = 'root';
$senha = '';
$database = 'listatarefas';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $senha, $options);

?>
