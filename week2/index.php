<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!--PHP Command-->
  <?php echo "<h1>Welcome!</h1><p> Let's learn! </p>"; ?>

  <!--Unordered List-->
    <?php echo
  "<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
  </ul>"
    ?>



  <?php
  $fName = 'Ozan';
  $lName = 'Lago-Sereflioglu';

  echo "<h3>" . "My name is " . $fName . " " . $lName . "</h3>";
  ?>
  
  </body>
</html>