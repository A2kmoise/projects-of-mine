<!DOCTYPE html>
<html>
    <head>
        <title>convert it</title>
        <style>
            body{
                background-color:aqua;
            }
            body{
                text-align: center;
            }
            fieldset{
                width: fit-content;
                margin-left: 500px;
                background-color:grey ;
                height: max-content;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <h2><u>Convert celcius to fahrenheit</u></h2>
        <form  method="POST" action="second.php">
        <label for="celcius">enter value in celcius :</label>    
        <input type="integer" name="celsius" required>
         <input type="submit" value="convert">
        </form><br>
    
<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 9/5 ) +32;
echo ">>>$celsius °C is equal to $fahrenheit °F";

?>
        </fieldset>
 </body>
</html>