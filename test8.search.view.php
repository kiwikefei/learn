<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=learn', 'homestead', 'secret');
} catch (PDOException $e) {
    die($e->getMessage());
}
$keyword= $_GET['keyword'];
//$statement = $pdo->prepare("select * from todos where title like ?");
//$statement->bindValue(1, "%{$keyword}%", PDO::PARAM_STR);
$statement = $pdo->prepare("select * from todos where title like :keyword");
$statement->execute([
    'keyword'   => '%'. $keyword .'%'
]);
    class Todo
    {
        public $id;
        public $title;
        public $description;
        public $completed;
    }
    // 3.2 fetch data and hydrate it to class Todo
    $todos = $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
    // var_dump($todos);
// 4. Show List (index.view.php)
    include 'test8.index.view.php';
?>
</body>
</html>