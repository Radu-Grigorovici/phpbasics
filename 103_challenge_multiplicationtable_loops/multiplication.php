<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multiplication table</title>
  </head>
  <body>
    <table>
      <?php
      $maximum = 20;
      for ($i=0; $i < $maximum+1; $i++) {
        echo "<tr>";
        for ($j=0; $j < $maximum+1; $j++) {
          if ($i == 0 && $j == 0){
            echo "<th></th>";
          }elseif ($j ==0) {
            echo "<th>" . $i . "</th>";
          }elseif ($i == 0){
            echo "<th>" . $j . "</th>";
          } else {
          echo "<td>" . $i*$j . "</td>";
        }
        }
        echo "</tr>";
      } ?>
    </table>
  </body>
</html>
