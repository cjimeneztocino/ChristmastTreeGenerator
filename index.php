<?php
require_once('src/Class/ShapeBasic.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title></title>
    </head>
    <body styles="font-family: monospace;">
        <h1>Hello Kyto Christomast Tree</h1>
        <div><a href="formPage.php">go to Form</a></div>
        <?php
        $Shape = new ShapeBasic();
        $Shape->setSize(19);

        $Shape->printShapeOnBrowser();
        ?>
    </body>
</html>
