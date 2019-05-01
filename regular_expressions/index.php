<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="contact-form" action="contactform.php" method="post"
      <input type="text" name="name" placeholder="Full name">
      <input type="text" name="num" placeholder="Phonenumber">
      <input type="text" name="postal" placeholder="Postalcode">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="address" placeholder="Address">
      <input type="text" name="homeNum" placeholder="Home number">
      <button type="submit" name="submit">Sign up</input>
    </form>
    <?php
    include('check.php');
     ?>
  </body>
</html>
