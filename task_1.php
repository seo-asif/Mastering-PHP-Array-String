<?php
//Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText){
    $allLowerCase = strtolower($inputText);
    $replacedText = str_replace('brown', 'red', $allLowerCase);
    echo $replacedText;
}


modifyText($text);