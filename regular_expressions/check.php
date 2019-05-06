<?php
$name = "kevin__";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $num = $_POST['num'];
  $postal = $_POST['postal'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $homeNum = $_POST['homeNum'];
}
echo "name is $name <br>";
echo "number is $num<br>";
echo "postalnumber is $postal<br>";
echo "E-mailadress is $email<br>";
echo (preg_match_all("/[a-zA-Z]/",$name));
echo (preg_match_all("/0-9/",$num));
echo (preg_match_all("/[a-zA-Z0-9]/",$postal));
echo (preg_match_all("/[a-zA-Z0-9]/",$email));
{
}
?>
