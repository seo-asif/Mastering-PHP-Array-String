<?php

$grades = array(85, 92, 78, 88, 95);
function sortGradesDescending(&$arr) {
    rsort($arr); 
}

sortGradesDescending($grades);
print_r($grades);