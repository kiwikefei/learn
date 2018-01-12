<?php
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos-sdf', 'root', ''); //dsn ( database source name)
    } catch (Exception $e) {
        die('database connecting fail.');
    }

$statement = $pdo->prepare('select * from tasks');
$statement->execute();
