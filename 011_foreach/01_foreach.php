<?php
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Using a foreach loop</title>
    <link rel="stylesheet" href="/css/master.css" type="text/css">
  </head>
  <body>
    <h1>Main Characters</h1>
    <ul>
      <?php
      foreach ($characters as $name) {
        echo "<li>$name</li>";
      }
      ?>
    </ul>
  </body>
</html>
