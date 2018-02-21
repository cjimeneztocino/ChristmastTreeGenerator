<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title></title>
    </head>
    <body styles="font-family: monospace;">
        <h1>Hello Kyto Christomast Tree</h1>
        <?php
        require_once('src/Class/ShapeBasic.php');
        
        $Shape = new ShapeBasic();
        $Shape->setSize(11);
        
        
        echo 'Size: '.$Shape->getSize().'<br>';
        echo 'Center: '.$Shape->getCenterPosition().'<br>';
        
        echo '<div class="bordered">';
        $Shape->PrintHeaderTree();
        $Shape->printBodyTree();
        echo '</div>';
        ?>
    </body>
</html>
