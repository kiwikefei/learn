<?php
function drawSquare($width)
{
    for ($j = 1; $j <= $width; $j++) {
        for ($i = 1; $i <= $width; $i++) {
            echo ' * ';
        }
        echo "\n";
    }
}
function drawRectangle($width, $height)
{
    for ($j = 1; $j <= $width; $j++) {
        for ($i = 1; $i <= $height; $i++) {
            echo ' * ';
        }
        echo "\n";
    }
}
function drawLine($length)
{
    echo "\n";
    for ($i = 1; $i <= $length; $i++) {
        echo ' * ';
    }
    echo "\n";
}
function drawChristmasTree($level, $console)
{
    // $level = total levels

    for ($i = 1; $i <= $level; $i++) {  // $i = current level
        for ($j = 1; $j <= ($level - $i); $j++) {    //$j : current space
            if ($console) {
                echo ' ';  // space in console
            } else {
                echo '&nbsp;&nbsp;'; // space in browser
            }
        }
        for ($k = 1; $k <= $i * 2 - 1 ; $k++) {
            echo '*';
        }
        if ($console) {
            echo "\n";  // enter in console
        } else {
            echo '<br>'; // enter in browser
        }
    }
    // $i = 1; - = 4; * = 1
    // $i = 2; - = 3; * = 3
    // $i = 3; - = 2; * = 5
    // $i = 4; - = 1; * = 7

    // $level = 5
    // execute $level times
    //     echo spaceCount($i) = $level - $i spaces
    //     echo starCount($i) = $i * 2  - 1 stars
    //     echo "\n"
    // for ($i = 1; $i <= $trunkHeight; $i++) {
    //     for ($j = 2; $j <= ($height - 1); $j++) {
    //         echo ' ';
    //     }
    //     echo "***\n";
    // }
}

// drawSquare(6);
// drawLine(20);
// drawRectangle(10, 20);
// function myloop($times)
// {
//     echo $times;
//     for ($i = 1; $i <= 2; $i++) {
//         loop1();
//     }
// }
// function loop1()
// {
//     for ($j = 1; $j <= 4; $j++) {
//         echo '*';
//     }
// }

// myloop(500000000);
$isConsole = (php_sapi_name() == 'cli') ? true : false;
drawChristmasTree(40, $isConsole); // invoke call

// in browser
// \n = <br>
// ' ' = '&nbsp;'
