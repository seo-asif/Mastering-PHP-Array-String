<?php

$grades = array(85, 92, 78, 88, 95);
function sortGradesDescending(&$arr) {
    rsort($arr); 
    print_r($arr);
}

sortGradesDescending($grades);