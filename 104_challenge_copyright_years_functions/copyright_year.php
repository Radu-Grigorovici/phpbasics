<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Copyright year</title>
  </head>
  <body>
  <?php

date_default_timezone_set('Europe/Bucharest');

function echo_copyright_years($copyright_year) {
  $copyright_year = strtotime("Jan 1, $copyright_year");
if (date('Y', $copyright_year) < date('Y', time())) {
  echo '&copy ' . date('Y', $copyright_year) .'-' . date('y', time());
  } else  {
  echo '&copy ' . date('Y', $copyright_year);
}
}

echo_copyright_years(2010);
   ?>
  </body>
</html>
