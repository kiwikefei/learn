<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a New Todo</title>
</head>
<body>
<nav>
    <a href="test8.php">All Todos</a>
    <a href="test8.insert.view.php">Add New Todo</a>
</nav>
<hr>
<div>
    <form action="test8.save.view.php" method = "POST">
        <p>
            title: <input type="text" name="title">
        </p>
        <p>
            description: <textarea name="description" cols="20" rows="4"></textarea>
        </p>
        <p>
            completed?:
            <select name="completed" id="">
                <option value=1>Yes</option>
                <option value=0 selected>No</option>
            </select>
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</div>
</body>
</html>