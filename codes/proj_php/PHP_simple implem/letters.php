<?php

$size = 7;
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j <= 2 * $size; $j++) {
        if ($j == $size - $i || $j == $size + $i || $i == $size-4 && $j > $size - $i && $j < $size + $i) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        } 
    }     
    echo "<br>";
} 

echo "<br><br><br>";

$size = 6;

for ($i = 0; $i < $size; $i++) { 
    for ($j = 0; $j <=$size; $j++) { 
       
        if ($i == 0  || $j == $size -$i - 1 || $i==$size - 1) {
            echo "*";
        } else {
            echo "&nbsp; &nbsp;";
        }
    }
    echo "<br>";
}

echo"<br><br><br>";

$size=10;
for ($i=0;$i<$size;$i++){
    for($j=0;$j<$size;$j++){
        if ($j == 0 || $j == $size - 1 || $i==$size-6){
            echo "*";
        }
        else{
            echo '&nbsp;&nbsp;';
        }
    }
    echo "<br>";
}

echo"<br><br><br>";

$size = 10; 
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if($i == $j || $j+$i == $size - 1 ){
            echo "*";
        }
        else{
            echo '&nbsp;&nbsp;';
        }
    }
    echo "<br>";
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


?>