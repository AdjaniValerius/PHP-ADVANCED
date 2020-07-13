<!DOCTYPE html>
<html>
    <head>
        <title>Advanced 2</title>
        <style>
            body {
            background-color: <?php echo $_POST["achtergrond"];?>;
            color: <?php echo $_POST["tekstkleur"];?>;
        }
        td, th {
            border: <?php echo $_POST["dikte"] ?> black;
            padding: <?php echo $_POST["padding"] ?>;
        }
        </style>

    </head>

    <body>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        function maakRij($gegeven, $value) {
            echo" <tr>
            <td>". $gegeven . "</td>
            <td>".$value . "</td>
            </tr>" ;
        }
        ?>
            <?php
            $gegevens = array(  "Naam" => "Adjani ", 
                                "Leeftijd" => "17 ", 
                                "Muzieksmaak" => "hip-hop ",
                                "Woonplaats" => "Amsterdam ");
            foreach($gegevens as $gegeven => $value) {
                maakRij($gegeven, $value);
            }
                ?>
    </table>
    </body>

</html>