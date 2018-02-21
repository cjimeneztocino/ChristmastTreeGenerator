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
    <body>
        <h1><a href="index.php">Hello Form</a></h1>
        <?php
        $shape = new ShapeBasic();

        (isset($_GET["sizeOption"])) ? $selected = $_GET["sizeOption"] : $selected = 5;
        ?>
        <form action="formPage.php" method="get">
            <select name="sizeOption">
                <option value="5" <?php if ($selected == 5) echo 'selected' ?> >Size S</option>
                <option value="7" <?php if ($selected == 7) echo 'selected' ?> >Size M</option>
                <option value="11" <?php if ($selected == 11) echo 'selected' ?> >Size L</option>
            </select>
            <input type="submit" value="Print Tree">
        </form>
        <?php
        if ($_GET["sizeOption"]) {
            $shape->setSize($_GET["sizeOption"]);
            $shape->printShapeOnBrowser();
        }
        ?>
    </body>
</html>
