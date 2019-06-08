<?php
//Fibonacci reeks is 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
function Fibonacci($number){


    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;

    else
        return (Fibonacci($number-1) +
                Fibonacci($number-2));
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recursive Fibonacci</title>
</head>

<body>
  <p>Enter how many Fibonacci numbers you want:</p>
<form action="" method="post">
	Number(s):<input type="text" name="number" value="<?=$_POST['number']??''?>"><br>
	<input type="submit" name="print" value="Print Fibonacci Numbers">
</form>
<?php

if(isset($_POST["print"]))
{
	$number = $_POST["number"];
	for ($counter = 0; $counter < $number; $counter++){
		echo '<strong>'.Fibonacci($counter).'</strong> ';
	}
}
?>
