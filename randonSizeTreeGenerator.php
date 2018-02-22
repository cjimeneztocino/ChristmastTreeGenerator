<?php
require_once('src/Class/ShapeBasic.php');
require_once('src/Class/TreeGenerator.php');
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
        <div><a href="index.php">go to Form</a></div>
        <div><a href="randonSizeTreeGenerator.php">Try again</a></div>
        <?php
       
        
        $rand = random_int(5, 51);
        while ($rand%2 == 0) {
            $rand = random_int(5, 51);
        }
        $Shape = new ShapeBasic($rand);
        $Shape->printShapeOnBrowser();
        ?>
    </body>
</html>
