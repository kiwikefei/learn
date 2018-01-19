<?php
require 'lesson8.function.php';
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret', []);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
$title = $_POST['title'];
$description = $_POST['description'];
$completed = (int) $_POST['completed'];

$sql = 'insert into todos(title, description, completed) values(:title, :description, :completed)';
$statement = $pdo->prepare($sql);
$statement->bindParam('title', $title);
$statement->bindParam('description', $description);
$statement->bindParam('completed', $completed);
$statement->execute();
header('Location: /lesson8.php');
