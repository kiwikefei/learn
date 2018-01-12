<?php
require 'Task.php';
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
//$statement = $pdo->prepare("select * from my_todos where id>=? and id < ?");
//$statement->execute([3,4 ]);

// $id = $_GET['id'];
// $statement = $pdo->prepare('select * from tasks where id=?');
// $statement->execute([$id]);
$statement = $pdo->prepare('select * from tasks');
$statement->execute();


//$results = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//$tasks = $statement->fetchAll();
// var_dump($tasks);
require 'test6.view.php';
