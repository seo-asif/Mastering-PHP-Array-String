<?php
//Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

$allLowerCase = strtolower($text);
$replacedText = str_replace('brown','red',$allLowerCase);

echo $replacedText;