<!DOCTYPE html>
<html>

</html>
<head>

    <title>Title</title>
</head>
<body>

<?php require 'invoer.html'; ?>
    
    <?php


        echo "voornaam is:" . $_POST["voornaam"] . "<br>";
        echo "achternaam is:" . $_POST["achternaam"] . "<br>";
        echo "klas is:" . $_POST["klas"] . "<br>";
        echo "leeftijd is:" . $_POST["leeftijd"] . "<br>";
        echo "adres is:" . $_POST["adres"] . "<br>";
        echo "plaatsnaam is:" . $_POST["plaatsnaam"] . "<br>";
        echo "favband is:" . $_POST["favband"];
    
    ?>

</body>