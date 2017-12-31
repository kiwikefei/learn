<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>display my tasks</title>
</head>
<body>
    <h1>These are my today's tasks</h1>
    <ol>
    <?php
    foreach ($tasks as $task) {
        if ($task['completed']) {
            echo '<li>' . $task['title'] . '&#9989;</li>';
        } else {
            echo '<li>' . $task['title'] . '&#10060</li>';
        }
        // echo '<li>' . $task . '</li>';
    }
    ?>
    </ol>
</body>
</html>
