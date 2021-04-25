<?php

    function toPercent($score){
        $perOfTotal = $score/5.0*100;
        return $perOfTotal;
    }

    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    $q1A = "Topeka";
    $q2A = "Iowa";
    $q3A = "Wichita";
    $q4A = "Lawrence";
    $q5A = "Kansas City";

    $score = 0;

    echo "Question 1: What is the capitol of Kansas? <br>"; 
    echo "You answered: ". $q1 . "<br>";
    if($q1==$q1A){
        $score += 1;
    }
    else{
        echo "Correct answer: " . $q1A . "<br>";
    }

    echo "<br>";

    echo "Question 2: Which is not a neighboring state of Kansas?<br>";
    echo "You answered: ". $q2 . "<br>";
    if($q2==$q2A){
        $score += 1;
    }
    else{
        echo "Correct answer: " . $q2A . "<br>";
    }
    
    echo "<br>";

    echo "Question 3: Which is the largest city in Kansas?<br>";
    echo "You answered: ". $q3 . "<br>";
    if($q3==$q3A){
        $score += 1;
    }
    else{
        echo "Correct answer: " . $q3A . "<br>";
    }
    
    echo "<br>";

    echo "Question 4: In what city is the Univesity of Kansas located?<br>";
    echo "You answered: ". $q4 . "<br>";
    if($q4==$q4A){
        $score += 1;
    }
    else{
        echo "Correct answer: " . $q4A . "<br>";
    }
    
    echo "<br>";

    echo "Question 5: Which city is split between two states?<br>";
    echo "You answered: ". $q5 . "<br>";
    if($q5==$q5A){
        $score += 1;
    }
    else{
        echo "Correct answer: " . $q5A . "<br>";
    }
    
    echo "<br>";

    echo "Number Correct: ". $score . "<br>";
    echo "Score: " .toPercent($score). "%<br>";
?>