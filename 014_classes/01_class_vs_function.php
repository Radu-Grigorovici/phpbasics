<?php
// $xmas2018 = strtotime('Dec 25, 2018');
// echo date('l, F j, Y', $xmas2018);

$date1 = new DateTime();
$date2 = new DateTime();

$west_coast = new DateTimeZone('America/Los_angeles');
$eet = new DateTimeZone('Europe/Bucharest');
$date1->setTimezone($eet);
$date2->setTimezone($west_coast);

echo $date1->format('g:ia, l, F j, Y') . '<br>';
echo $date2->format('g:ia, l, F j, Y') . '<br>';

 ?>
