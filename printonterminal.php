<?php 

require_once('src/Class/ShapeBasicOnTerminal.php');
$shape =  new ShapeBasicOnTerminal();
$shape->setSize(random_int(5, 31));
$shape->printShapeOnTerminal();