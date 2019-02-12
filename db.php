<?php
$dbUsername = 'root';
$dbPassword = '';

try {
    $dbcon = new PDO('mysql:host=localhost;dbname=inn-ogrn', $dbUsername, $dbPassword);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}