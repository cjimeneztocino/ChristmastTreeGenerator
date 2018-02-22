<?php
require_once('src/Class/ShapeBasicOnTerminal.php');
require_once('src/Class/TreeGenerator.php');

$rand = random_int(5, 21);
while ($rand % 2 == 0) {
    $rand = random_int(5, 21);
}

$shape = new ShapeBasicOnTerminal($rand);
$shape->printShapeOnTerminal();
