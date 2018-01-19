<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Detail</title>
</head>
<body>
<nav>
    <a href="test8.php">All Todos</a>
    <a href="test8.insert.view.php">Add New Todo</a>
</nav>
<hr>
    <?php
        class Todo
        {
            public $id;
            public $title;
            public $description;
            public $completed;
        }
        $id = $_GET['id'];
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        // prepare
        $statement = $pdo->prepare('select * from todos where id = :id');
        // bind
        $statement->bindParam(':id', $id);
        // execute
        $statement->execute();
        // fetch
        $todo = $statement->fetchObject('Todo');
    ?>
<div>
    <h1><?=$todo->title?></h1>
    <h1></h1>
    <h2>Completed: <?=$todo->completed ? 'yes' : 'no'?></h2>
    <p><?=$todo->description?></p>
</div>
</body>
</html>