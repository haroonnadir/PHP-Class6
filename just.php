<?php
//Replace using a callback function
$text = "The price is 100 dollars.";
$newText = preg_replace_callback("/(\d+)/", function($matches) {
    return $matches[1] * 2;  // Double the price
}, $text);
echo $newText;  Output: "The price is 200 dollars.";
?>