<?php
//convert $total_minutes to hours and minutes.

$total_minutes = 640;

$minutes = $total_minutes % 60;
// $hours = $total_minutes / 60;
// $hours %= $hours+1;
// or
// $hours = ($total_minutes - $minutes)/60;


// php > 7
// $hours = intdiv($total_minutes, 60);

echo 'Answer is ' . $hours . ' hours and ' . $minutes . ' minutes.';

 ?>
