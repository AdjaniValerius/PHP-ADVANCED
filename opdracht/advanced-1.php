<?php 

$kleuren = array("red", "blue", "green", "black", "brown")

?>

<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script src="script.js"></script>
        <title></title>

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