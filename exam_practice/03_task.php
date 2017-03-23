<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/22/2017
 * Time: 1:59 PM
 */

$input = explode(',', $_GET['string']);
/*$input = explode(',','Georgi Petrov - Java : 360,
Marina - JavaScript : 200,
Marina     -    JavaScript :     300,
Vasil Dimitrov - PHP : 120,
Vasil Dimitrov-PHP: 550,
Vasil Dimitrov - PHP : 250');*/

/*$input = explode(',', 'Johnny Bravo - PHP : 300,
Johnny Bravo-PHP: 600,
Nikola Ivanov - PHP: 350,
Johnny Bravo - PHP : 400
');*/

$table = [];
$exam = '';

foreach ($input as $examInfo) {

    $tokens = explode('-', $examInfo);
    $examPoints = explode(':', $tokens[1]);

    $points = trim($examPoints[1]);

    if (!($points >=0 && $points <=400)) {

        continue;
    }

    $student = trim($tokens[0]);
    $exam = trim($examPoints[0]);

    if (isset($table[$exam][$student])) {

        $table[$exam][$student]['makeups'] += 1;

        if ($points >= $table[$exam][$student]['points']){

            $table[$exam][$student]['points'] = $points;


        }

    } else {
        $table[$exam][$student]['name'] = $student;
        $table[$exam][$student]['makeups'] = 0;
        $table[$exam][$student]['points'] = $points;


    }


}

echo '<table>' . PHP_EOL;
echo '<tr><th>Subject</th><th>Name</th><th>Result</th><th>MakeUpExams</th>' . PHP_EOL;

foreach ($table as $exam=>$info) {



    uasort($table[$exam], function ($student1, $student2) {

         if($student1['points'] == $student2 ['points']) {

            if ($student1['makeups'] == $student2 ['makeups']){

                return $student1['name'] > $student2['name'];


            } else {

                return $student1['makeups'] > $student2['makeups'];
            }


         } else {
             return $student1['points'] < $student2['points'];
         }

    });



}

foreach ($table as $exam=>$info) {

    foreach ($info as $student=>$studentInfo) {

        $points = $studentInfo['points'];
        $makeups = $studentInfo['makeups'];

        echo "<tr><td>$exam</td><td>$student</td><td>$points</td><td>$makeups</td></tr>" . PHP_EOL;

    }



}


echo '</table>';



