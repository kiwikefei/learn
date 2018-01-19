<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All my todos</title>
</head>
<body>
<nav>
<a href="test8.php">All Todos</a>
<a href="test8.insert.view.php">Add New Todo</a>
    <form action="test8.search.view.php" method="GET">
        keyword: <input type="text" name="keyword">
        <button type="submit">Search</button>
    </form>
</nav>
<hr>
    <ol>
    <?php foreach ($todos as $todo) :?> 
    <li>
        <a href="test8.show.view.php?id=<?=$todo->id?>">
                <?php if ($todo->completed != true) :?>
                    <?= $todo->title?>
                <?php else :?>
                    <strike><?= $todo->title?></strike>
                <?php endif ?>
        </a>
    </li>
    <?php endforeach ?> 
    </ol>
</body>
</html>