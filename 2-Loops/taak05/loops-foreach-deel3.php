<?php

$klassen = array(
    $student  = array(
    "voornaam" => "Jan",
    "achternaam" => "Janssen",
    "klas" => "9A",
    "Leeftijd" => 17,
    "Woonplaats" => "Amstelveen"
    )
);

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
        <table>
            <tr>
                <th>NAAM</th>
                <th>LENGTE</th>
            </tr>
            <?php
                foreach($klassen as $key => $value){
                    echo"<tr>";
                    echo "<td>" . 
                    echo"</tr>";
                }
            ?>
            <!-- <tr>
                <td>Piet</td>
                <td>188</td>
            </tr>
            <tr>
                <td>Els</td>
                <td>168</td>
            </tr>
            <tr>
                <td>Muhammad</td>
                <td>176</td>
            </tr> -->
        </table>
    </body>
</html>