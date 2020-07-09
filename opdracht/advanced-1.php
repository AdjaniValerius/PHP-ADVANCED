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
                        foreach ($kleuren as $kleur) {
                        echo "<option value='". $kleur . "'> ". $kleur . "</option>";
                        }
                    ?>
                </select>
            <input type="submit" value="verzenden">
        </form>

    </body>

</html>