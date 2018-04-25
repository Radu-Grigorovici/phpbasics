<?php
$descriptions = [
  'Earth' => 'mostly harmless',
  'Marvin' => 'the paranoid android',
  'Zaphod' => 'President of the Imperial Galactic Government'
];
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
      foreach ($descriptions as $key => $value) {
        echo "<p>$key is $value.</p>";
      }
      ?>
    </ul>
  </body>
</html>
