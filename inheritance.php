<?php

require_once 'book.php';

$physicalBook = new Book('A random book','John Doe', 2000);
$digitalBook = new Book('A random book','John Doe', 2000);

print $physicalBook-> getFileSize() . PHP_EOL;
print $digitalBook-> getWeight() . PHP_EOL;