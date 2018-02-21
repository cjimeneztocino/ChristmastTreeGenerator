<?php
    require_once('src/Class/ShapeBasic.php');
?>
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
    <body>
        <h1>Hello Form</h1>
        <?php
        $shape = new ShapeBasic();
        
        (isset($_GET["sizeOption"])) ? $selected = $_GET["sizeOption"] : $selected=5;
        ?>
        <form action="formPage.php" method="get">
            <select name="sizeOption">
                <option value="5" <?php if($selected == 5) echo 'selected'?> >Size S</option>
                <option value="7" <?php if($selected == 7) echo 'selected'?> >Size M</option>
                <option value="11" <?php if($selected == 11) echo 'selected'?> >Size L</option>
            </select>
            <input type="submit" value="Print Tree">
        </form>
        <?php
        $size = $_GET["sizeOption"];
        $shape->setSize($size);
        $shape->printShapeOnBrowser();
        ?>
    </body>
</html>
