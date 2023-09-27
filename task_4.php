<?php 
$studentGrades = [
   'student1' => ["math" => 74, "english" => 92, "science" => 76],
   'student2' => ["math" => 60, "english" => 90, "science" => 75],
   'student3' => ["math" => 60, "english" => 76, "science" => 70]
];

function gradeChecker($avg) {
    $gradeOfStudent = "";
    
    if ($avg >= 80) {
        $gradeOfStudent = "A+";
    } elseif ($avg >= 70) {
        $gradeOfStudent = "A";
    } elseif ($avg >= 60) {
        $gradeOfStudent = "B";
    } elseif ($avg >= 50) {
        $gradeOfStudent = "D";
    } else {
        $gradeOfStudent = "F";
    }

    return $gradeOfStudent;
}


function average ($gradeValue){
    $sum1=$sum2=$sum3=0;

    foreach ($gradeValue as $key => $value) {
        foreach ($value as $sub_key => $sub_val){
            if ($key == 'student1') {
                $sum1 += $sub_val;
            }
            else if ($key == 'student2'){
                $sum2 += $sub_val;
            }
            else {
                $sum3 += $sub_val;
            }
       }
    }

    $avgOfStudent1 = $sum1/3;
    $avgOfStudent2 = $sum2/3;
    $avgOfStudent3 = $sum3/3;


    $gradeOfStudent1 = gradeChecker($avgOfStudent1);
    $gradeOfStudent2 = gradeChecker($avgOfStudent2);
    $gradeOfStudent3 = gradeChecker($avgOfStudent3);

   
    echo "Student_1's Grade: $gradeOfStudent1\nStudent_2's Grade: $gradeOfStudent2\nStudent_3's Grade: $gradeOfStudent3\n";
}

average($studentGrades);
