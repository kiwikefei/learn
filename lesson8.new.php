<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New</title>
</head>
<body>
   <form action="lesson8.save.php" method="POST">
    <p>
        Title:<input type="text" name="title" placeholder="please input title">
    </p>
    <p>
        Description: <textarea name="description" placeholder="say sth." cols="80" rows="5"></textarea>
    </p>
    <p>
        Completed?: <select name="completed">
            <option value=1>Yes</option>
            <option value=0>No</option>
        </select>
    </p>
    <p>
        <button type=submit>Save New todo</button>
        <button type=reset>reset</button>
    </p>
   </form> 
</body>
</html>