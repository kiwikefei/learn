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

// drawSquare(6);
// drawLine(20);
// drawRectangle(10, 20);
drawChristmasTree(10, 6);
