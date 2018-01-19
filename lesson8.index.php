<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
</head>
<body>
<nav>
    <li><a href="lesson8.new.php">New</a></li>
</nav>
<div>
    <?php foreach ($todos as $todo) :?>
        <?php if ($todo->completed == 1) :?>
            <strike><li><?=$todo->id?>. <?= $todo->title ?></li></strike>
        <?php else :?>
            <li><?=$todo->id?>. <?= $todo->title ?></li>
        <?php endif ?>
    <?php endforeach ?>
</div>
</body>
</html>