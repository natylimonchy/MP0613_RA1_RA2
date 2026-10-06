<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:";
        // Get input from the user
        $num1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number:";
        // Get input from the user
        $num2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value

        if ($num1 > $num2) {
            echo "Greater number is: " . $num1;
        } elseif ($num2 > $num1) {
            echo "Greater number is: " . $num2;
        } else {
            echo "The numbers are equal!";
        }
    }
}
