<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        h1{
            color:blue;
        }
        body{
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
<h1><u>MULTIPLICATION TABLE</u></h1>
<table>
<?php
for($i = 1; $i <= 12; $i++) {
    echo("<tr>");
    for($j = 1; $j <= 12; $j++) {
        $prod = $j * $i;
        echo("<td>$j x $i = $prod</td>");
    }
    echo("</tr>");
}
?> 
</table>
</body>
</html>
