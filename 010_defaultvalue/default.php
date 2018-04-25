<?php

// null coalescing operator > php 7
// $unit_cost = 0;
//
// $wholesale_price = $unit_cost ?? 25;
//
// echo $wholesale_price;


// php < 7

if (isset($unit_cost) && $unit_cost) {
  $wholesale_price = $unit_cost;
} else {
  $wholesale_price = 25;
}

?>
