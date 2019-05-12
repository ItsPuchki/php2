<?php
//$name = "kevin__";
if (isset($_POST['submit'])){

  $alphabet = alphaCheck();
function alphaCheck(){
  $true = $_GET['true'];
  if (preg_match_all("/[a-zA-Z]/",$true)){
    echo "Only alphabets detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
};

$numeric = numericCheck();
function numericCheck(){
  $true = $_GET['true'];
  if (is_numeric($true)){
    echo "Only numerical detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
};

$postal = postalCheck();
function postalCheck(){
  $true = $_GET['true'];
  if (preg_match_all("//",$true)){
    echo "Only alphabets detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
}
$phone = phoneCheck();
function phoneCheck(){
  $true = $_GET['true'];
  if (preg_match_all("/^(((0)[1-9]{2}[0-9][-]?[1-9][0-9]{5})|((\\+31|0|0031)[1-9][0-9][-]?[1-9][0-9]{6}))$/",$true)){
    echo "Phone number detected!<br>";
  }
    else {
      echo "This is not a (dutch) phone number";
  }
};

$mail = mailCheck();
function mailCheck(){
  $true = $_GET['true'];
  if (preg_match_all("//",$true)){
    echo "E-mail detected!<br>";
  }
    else {
      echo "This is not a e-mail";
  }
};

$address = addressCheck();
function addressCheck(){
  $true = $_GET['true'];
  if (preg_match_all("//",$true)){
    echo "Address detected!<br>";
  }
    else {
      echo "This is not an address!";
  }
};

$gender = genderCheck();
function genderCheck(){
  $true = $_GET['true'];
  switch ($true) {
    case 'men':
    case 'female'
    echo "Men or female has been selected.";
      break;
      case 'other':
        echo "Men or female has not been chosen!";
        break;
    default:
      echo "No gender";
    }
  };
}
?>
