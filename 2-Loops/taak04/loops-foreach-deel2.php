<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>

    <body>
    <form mehtod="POST">
    <select name="klas"> 
    <option value=""></option>
    <?php
    foreach ($klassen as $klas) {
        echo "<option value='". $klas . "'> ". $klas . "</option>";
        }
    ?>

    </select>
    <input type="submit" value="verzenden">
    </form>

    <ul>
    <li value=""></li>
        <?php
            foreach ($klassen as $klas) {
            echo "<li> ". $klas . "</li>";
        }
    ?>

    </ul>

    </body>
</html>