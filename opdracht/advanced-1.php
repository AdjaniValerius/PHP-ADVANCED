<?php 

$kleuren = array("red", "blue", "green", "black", "brown")

?>

<html></html>   
    <head>
        <style> 
            body  {
                background-color : <?php echo $_POST["kleurkeuze"];?>
            }
        </style>
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

        <p>kleurkeuze</p>
        <select name="kleurkeuze" id="kleur">
            <option value="red">Red</option>
            <option value="yellow">Yellow</option>
            <option value="blue">Blue</option>
            <option value="orange">Orange</option>
            <option value="green">Green</option>
        </select>

    </body>

