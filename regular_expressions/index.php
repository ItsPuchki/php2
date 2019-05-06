<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      <p>Alphabet check</p>
      <input autocomplete="off" type="text" name="alphabet" placeholder="Letters"><br>
      <p>Numeric check</p>
      <input autocomplete="off" type="text" name="Numeriek" placeholder="Nummers"><br>
      <p>Dutch postalcode check</p>
      <input autocomplete="off" type="text" name="postal" placeholder="Postalcode"><br>
      <p>Dutch mobilephone number check</p>
      <input autocomplete="off" type="text" name="mobilephone" placeholder="mobilephone number">
      <p>E-mail check</p>
      <input autocomplete="off" type="text" name="mail" placeholder="E-mail"><br>
      <p>Address check</p>
      <input autocomplete="off" type="text" name="address" placeholder="Address"><br>
      <button type="submit" name="submit">submit</button>
      <p>Gender check</p>
      <select name="gender">
        <option value="men">Men</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select><br>
    </form>
    <?php
    error_reporting(0);
    include('check.php');
     ?>
  </body>
</html>
