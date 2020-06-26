<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script src="script.js"></script>
        <title></title>
    </head>

<body>

    <?php

    function schrijfKleur($kleur){
        echo "<div style='color:$kleur;'> Deze tekst heeft de kleur $kleur.</div>";
    }

        schrijfKleur("red");
        schrijfKleur("yellow");
        schrijfKleur("green");
        schrijfKleur("blue");

    ?>
    
</body>

</html>

