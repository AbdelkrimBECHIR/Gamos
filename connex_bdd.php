<?php

// connexion bdd
$dsn= "mysql:host=localhost;dbname=db_gamos;charset=utf8mb4";
$username="root";
$password="";
$options=[
    PDO::ATTR_DEFAULT_FETCH_MODE => pdo::FETCH_ASSOC,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
    error_log($e->getMessage());
    die("une erreur s'est produite");
}