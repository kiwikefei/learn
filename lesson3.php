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
function drawChristmasTree($height, $trunkHeight)
{
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= ($height - $i); $j++) {
            echo ' ';
        }
        for ($k = 1; $k <= $i * 2 - 1 ; $k++) {
            echo '*';
        }
        echo "\n";
    }
    for ($i = 1; $i <= $trunkHeight; $i++) {
        for ($j = 2; $j <= ($height - 1); $j++) {
            echo ' ';
        }
        echo "***\n";
    }
}

// drawSquare(10);
// drawLine(10);
// drawRectangle(10, 20);
drawChristmasTree(20, 4);
