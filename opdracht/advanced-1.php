<?php 

$kleuren = array("red", "blue", "green", "black", "brown")

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script src="script.js"></script>
        <title></title>

        <style> 
            body  {
                background-color : <?php echo $_POST["kleur"];?>
            }
        </style>

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

        <p>kleur</p>
        <select name="kleur" id="kleur">
            <option value="red">Red</option>
            <option value="yellow">Yellow</option>
            <option value="blue">Blue</option>
            <option value="orange">Orange</option>
            <option value="green">Green</option>
        </select>

    </body>

</html>