<?php
//Fibonacci reeks is 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
echo "De Fibonacci reeks is: ";
function fibonacci($num){


//variabelen een waarde geven
  $num1 = 0;
  $num2 = 1;
  $output = 0;

//berekening uitvoeren
  for ($x=0; $x <= $num; $x++) {

    if ($x <= 1) {
      $output = $x;
    }
    else {
      $output = $num1 + $num2;
      $num1 = $num2;
      $num2 = $output;
    }

    //print uitkomst berekening met commas tussen elk getal
    echo $output . ",";
  }
}
fibonacci(10)
?>
