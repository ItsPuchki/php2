<?php
//$name = "kevin__";
if (isset($_POST['submit'])){

  $alphabet = alphaCheck();
  $numeric = numericCheck();
  $postal = postalCheck();
  $phone = phoneCheck();
  $mail = mailCheck();
  $address = addressCheck();
  $gender = genderCheck();
}


/*{
echo "name is $name <br>";
echo "number is $num<br>";
echo "postalnumber is $postal<br>";
echo "E-mailadress is $email<br>";
echo (preg_match_all("/[a-z][A-Z]/",$name));
echo (preg_match_all("/[0-9]/",$num));
echo (preg_match_all("/[a-z][A-Z][0-9]/",$postal));
echo (preg_match_all("/[a-z][A-Z][0-9]/",$email));
echo (preg_match_all("/[a-z][A-Z]/",$address));
echo (preg_match_all("/[0-9]/",$homeNum));
}*/
?>
