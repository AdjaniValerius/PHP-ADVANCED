<!DOCTYPE html>
<html>

</html>
<head>
        <style> 
    body  {
        background-color : <?php echo $_POST["lievelingskleur"];?>
    }
    </style>
    <title>Title</title>
</head>
<body>

   
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