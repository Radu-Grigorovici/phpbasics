<?php
$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s guide to the galaxy"';
$author = 'Douglas Adams';
$answer = 42;
$newLines = "\r\n\r\n";

// $fullName = $firstName . $lastName;
// $fullName = $firstName . ' ' . $lastName;
$fullName = "$firstName $lastName";
$book = "$title by $author";

// echo $fullName . '<br>';
// echo $book;


$message = "Name: $fullName $newLines";
$message .= "Book: $book $newLines";
$message .= "Answer: $answer";

echo $message;

// short echo: <?=
 ?>
