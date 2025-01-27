<!DOCTYPE html>
<html>
    <head>
        <title>Pascal Triangle</title>
    </head>
    <body>
        <h2 style="color:darkorchid;">PASCAL'S TRIANGLE</h2>
        <form method="POST" action="" style="display:block;">
            Enter the number of rows: <input type="number" name="rows" id="rows" min="1" required>
            <input type="submit" name="submit" value="Make it">
        </form>

        <?php
        if (isset($_POST['submit'])) {
        
            $rows = (int)$_POST['rows'];

            
            $triangle = [];

            
            for ($i = 0; $i < $rows; $i++) {
                $triangle[$i] = [];
                for ($j = 0; $j <= $i; $j++) {
                    
                    if ($j == 0 || $j == $i) {
                        $triangle[$i][$j] = 1;
                    } else {
                        
                        $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
                    }
                }
            }

    
            echo "<pre>";
            foreach ($triangle as $row) {
                foreach ($row as $value) {
                    echo $value . " ";
                }
                echo "\n";
            }
            echo "</pre>";
        }
        ?>
    </body>
</html>
