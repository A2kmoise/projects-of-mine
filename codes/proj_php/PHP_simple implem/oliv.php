<!doctype html>
<html>
<head>
    <title>Loan</title>
    <style>
        .input{
           padding:10px;  
           margin:5px;          
        }
        .do{
            margin:20px 200px;
            background-color:green;
            font-style: italic;
            font-family:Arial;
        }
        fieldset{
            background-attachment: fixed;
            background-color:white;
            border:5px solid gray;
            border-radius:5px;
            width: 500px;
            height: 200px;
        }
        </style>
</head>
<body>
    <fieldset>
    <form method="POST" action="" >
        Enter the capital:<input type = "number" name ="capital" class="input"><br>
        Enter the interest rate:<input type ="number" name="rate" class="input"><br>
        Enter the period:<input type="number" name = "period" class="input"><br>
        <input type="submit" placeholder =Calculate class="do" > 
    </form>

<?php
 function simpleINT($_capital, $_rate, $_time){
    $_simpleInterst = ($_capital*$_rate*$_time)/100;
    echo ("The simpleinterest is:$_simpleInterst");
 }
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_capital = $_POST["capital"];
    $_rate = $_POST["rate"];
    $_time= $_POST["period"];
    $_simI = simpleINT($_capital, $_rate, $_time);
}
?>
</fieldset>
</body>
</html>