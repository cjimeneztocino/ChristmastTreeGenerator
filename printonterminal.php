<?php

require_once('src/Class/ShapeBasicOnTerminal.php');
$shape = new ShapeBasicOnTerminal();
$rand = random_int(5, 21);
while ($rand % 2 == 0) {
    $rand = random_int(5, 21);
}
$shape->setSize($rand);
$shape->printShapeOnTerminal();
