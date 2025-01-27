<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
    <style>
        body {
            background-color: #222;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        fieldset {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
            border: 3px solid #888;
            border-radius: 10px;
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            margin: 10px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #444;
            color: white;
        }
        input[type="submit"] {
            background-color: green;
        }
        h1, h6 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Loan Calculator</h1>

    <fieldset>
        <form method="POST" action="">
            <label for="capital">Enter the capital:</label>
            <input type="number" name="capital" id="capital" required><br>
            <label for="rate">Enter the interest rate (in %):</label>
            <input type="number" name="rate" id="rate" required><br>
            <label for="period">Enter the period (in years):</label>
            <input type="number" name="period" id="period" required><br>
            <input type="submit" value="Calculate">
        </form>

        <?php
    
        function calculateCompoundInterest($principal, $rate, $years) {
            $initialPrincipal = $principal; 
            $compoundInterest = 0; 

            for ($year = 1; $year <= $years; $year++) {
                $interest = ($principal * $rate) / 100; 
                $principal = $principal + $interest; 
            }
            
            $compoundInterest = $principal - $initialPrincipal;

            return $compoundInterest;
        }

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $capital = $_POST["capital"];
            $rate = $_POST["rate"];
            $period = $_POST["period"];

        
            $compoundInterest = calculateCompoundInterest($capital, $rate, $period);

            echo "<h6>The compound interest after $period years is: " . number_format($compoundInterest, 2) . "</h6>";
            
        }
        ?>
    </fieldset>

</body>
</html>
