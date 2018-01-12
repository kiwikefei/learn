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
<!--<ul>-->
<!--    <li>Task: --><?php //echo $task['title']?><!--</li>-->
<!--    <li>Due date:--><?php //echo $task['due']?><!--</li>-->
<!--    <li>Person Responsible: --><?php //echo $task['assign_to']?><!--</li>-->
<!--    <li>Status:--><?php //echo $task['completed']?"&#9989":'&#x274E'?><!--</li>-->
<!--</ul>-->
<!--<ul>-->
<!--    <li>Task: --><?//= $task['title']?><!--</li>-->
<!--    <li>Due date:--><?//= $task['due']?><!--</li>-->
<!--    <li>Person Responsible: --><?//= $task['assign_to']?><!--</li>-->
<!--    <li>Status:-->
<!--        --><?php //if($task['completed']) :?>
<!--            &#9989-->
<!--        --><?php //else :?>
<!--            &#x274E-->
<!--        --><?php //endif ?>
<!--    </li>-->
<!--</ul>-->
<ul>
    <?php foreach($tasks as $task) :?>
        <li>
            <?php if($task->completed) :?>
                <strike>
                    <?=$task->title?>
                </strike>
            <?php else :?>
                <?=$task->title?>
            <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>
</body>
</html>

