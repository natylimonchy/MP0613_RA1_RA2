<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points [0-100]:\n";
        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ((int)$num < 0) {
            echo "Grade: impossible!";
        } elseif ((int)$num <= 49) {
            echo "Grade: failed";
        } elseif ((int)$num <= 59) {
            echo "Grade: 1";
        } elseif ((int)$num <= 69) {
            echo "Grade: 2";
        } elseif ((int)$num <= 79) {
            echo "Grade: 3";
        } elseif ((int)$num <= 89) {
            echo "Grade: 4";
        } elseif ((int)$num <= 100) {
            echo "Grade: 5";
        } else {
            echo "Grade: incredible!";
        }
    
        

    }
}
