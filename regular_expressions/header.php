<?php
    error_reporting(1); //removes error
    echo "<br>";
    $number = op1();
        function op1() //checks if there are just numbers
        {
          $form=$_GET['form'];
         if (is_numeric($form))
          {echo "Only has numbers";  echo"<br>";}
         else
          {echo "Has numbers and letters"; echo "<br>";}
        }
      $characters = op2();
        function op2()//checks if you only have characters
        {
          $form=$_GET['form'];
         if (ctype_alnum($form))
          {echo "Only has letters";  echo"<br>";}
         else
          {echo "Has characters and symbols"; echo "<br>";}
        }
        $postalcode = op3();
          function op3()//checks if its a postalcode
          {
            $form=$_GET['form'];
           if (preg_match("/[1-9][0-9]{3}[\s]?[A-Za-z]{2}/",$form))
            {echo "Its a postalcode";  echo"<br>";}
           else
            {echo "it isnt a postalcode"; echo "<br>";}
          }
          $address = op5();
            function op5()//checks if its a address
            {
              $form=$_GET['form'];
             if (preg_match("/([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/",$form))
              {echo "Its an address";  echo"<br>";}
             else
              {echo "Its not an address"; echo "<br>";}
            }
         $gender = op6();
          function op6(){//checks if its a men/woman
            $form=$_GET['ok1'];
              switch ($form) {
                case "female":
                case "men":
                echo "its a men/women <br>";
                break;
                default:
                echo "its not a men/women <br>";
        }
             }
         $phone = op7();//phone number check
          function op7(){
            $form=$_GET['form'];
            if (preg_match("/^(((0)[1-9]{2}[0-9][-]?[1-9][0-9]{5})|((\\+31|0|0031)[1-9][0-9][-]?[1-9][0-9]{6}))$/",$form))
            {echo "Its a phone number";  echo"<br>";}
            else
            {echo "Its not a phone number"; echo "<br>";}
            }
        $email = op8(); //checks if its an email addres
         function op8(){
           $form=$_GET['form'];
           if (preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/",$ok))
           {
             echo "Its an email address";  echo"<br>";
           }
           else
           echo "Its not an email address"; echo "<br>";
           {
           }
         }
?>
