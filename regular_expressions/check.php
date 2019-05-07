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

function alphaCheck(){
  $true = $_POST['alphabet'];
  if (preg_match_all("//",$true)){
    echo "Only alphabets detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
}
function numericCheck(){
  $true1 = $_POST['numeric'];
  if (numeric($true1)){
    echo "Only numerical detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
}
function postalCheck(){
  $true2 = $_POST['postal'];
  if (postal($true2)){
    echo "Only alphabets detected!<br>";
  }
    else {
      echo "There are other characters detected";
  }
}
function phoneCheck(){
  $true3 = $_POST['phone'];
  if (phone($true3)){
    echo "Phone number detected!<br>";
  }
    else {
      echo "This is not a dutch phone number";
  }
}
function mailCheck(){
  $true4 = $_POST['mail'];
  if (mail($true4)){
    echo "E-mail detected!<br>";
  }
    else {
      echo "This is not a e-mail";
  }
}
function addressCheck(){
  $true5 = $_POST['Address'];
  if (Address($true5)){
    echo "Address detected!<br>";
  }
    else {
      echo "This is not an address!";
  }
}
function genderCheck(){
  $true6 = $_POST['gender'];
  switch ($true6) {
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
  }
}
?>
