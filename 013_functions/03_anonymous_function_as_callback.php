<?php
$friends = [
  ['first' => 'Jim', 'last' => 'White'],
  ['first' => 'Jane', 'last' => 'White'],
  ['first' => 'Hilary', 'last' => 'Brown'],
  ['first' => 'Harry', 'last' => 'Brown'],
  ['first' => 'Paul', 'last' => 'Green'],
  ['first' => 'Amanda', 'last' => 'Green'],
  ['first' => 'John', 'last' => 'Black'],
  ['first' => 'Diana', 'last' => 'Black']
];

usort($friends, function($a, $b) {
    return [$a['last'], $a['first']] <=> [$b['last'], $b['first']];
    // <=> spaceship operator (php 7)  if $a['last']<$b['last'] it returns -1,
    //  if they are equal it returns 0,
    //  if $a['last']>$b['last'] it returns 1
    // for php 5 an if elseif else can be used
});
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Anonymous callback</title>
     <link rel="stylesheet" href="/css/master.css" type="text/css">
   </head>
   <body>
     <h1>User-Defined Sort</h1>
     <ul>
       <?php
foreach ($friends as $friend) {
  echo "<li>" . implode(' ', $friend) . '</li>';
}
        ?>
     </ul>
   </body>
 </html>
