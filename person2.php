<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Person info</title>
  </head>
  <body>
    <h2>Person info</h2>
    <p>
      Get array: <br>
      <?php  print_r($_GET); ?>
      </p>

      <p>
        <?php echo 'Etunimi on ' .$_GET['fname'];?>
      </p>

      <p>
        <?php echo 'Sukunimi on ' .$_GET['lname']; ?>
      </p>








  </body>
</html>
