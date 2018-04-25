  <?php

function echo_copyright_year($copyright_year) {
  $copyright_year = strtotime("Jan 1, $copyright_year");
if (date('Y', $copyright_year) < date('Y', time())) {
  return '&copy ' . date('Y', $copyright_year) .'-' . date('y', time());
  } else  {
  return '&copy ' . date('Y', $copyright_year);
}
}
   ?>
