<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Person info</title>
  </head>
  <body>
    <h2>Person info</h2>
    <p>
      Post array: <br>
      <?php  print_r($_POST); ?>
      </p>

      <p>
        <?php echo 'Etunimi on ' .$_POST['fname'];?>
      </p>

      <p>
        <?php echo 'Sukunimi on ' .$_POST['lname']; ?>
      </p>








  </body>
</html>
