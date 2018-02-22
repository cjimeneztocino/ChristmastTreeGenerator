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
    <body>
        <h1><a href="index.php">Hello Form</a></h1>
        <?php
        

        (isset($_GET["sizeOption"])) ? $selected = $_GET["sizeOption"] : $selected = 5;
        ?>
        <form action="index.php" method="get">
            <select name="sizeOption">
                <option value="5" <?php if ($selected == 5) echo 'selected' ?> >Size S</option>
                <option value="7" <?php if ($selected == 7) echo 'selected' ?> >Size M</option>
                <option value="11" <?php if ($selected == 11) echo 'selected' ?> >Size L</option>
            </select>
            <input type="submit" value="Print Tree">
        </form>
        <?php
        if ($_GET["sizeOption"]) {
            
//            $treeGenerator = new TreeGenerator($_GET["sizeOption"]);
//            var_dump($treeGenerator->HeaderTree());
            
            $shape = new ShapeBasic($_GET["sizeOption"]);
            $shape->printShapeOnBrowser();
        }
        ?>
        <div class="torandon"><a href="randonSizeTreeGenerator.php">go to TreeGenerator Randon Size</a></div>
    </body>
</html>
