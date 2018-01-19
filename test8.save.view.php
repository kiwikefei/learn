<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret');
} catch (PDOException $e) {
    die($e->getMessage());
}
$title = $_POST['title'];
$description = $_POST['description'];
$completed = (int) $_POST['completed'];
// die(var_dump($completed));
$statement = $pdo->prepare('insert into todos(title,description,completed) values(:title, :description,:completed)');
$statement->bindParam('title', $title);
$statement->bindParam('description', $description);
$statement->bindParam('completed', $completed);
$statement->execute();
header('Location: /test8.php');
