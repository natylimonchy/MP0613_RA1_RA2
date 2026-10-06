<?php

class P09_MultiplicationFormula {
    public function main(): void {
        // Define two numbers
        $numA = 4;
        $numB = 4;

        // Output the formula and result
        $mult = $numA*$numB;
        $formula= $numA . " x " . $numB . " = " . $mult;
        // Write the program here
        echo $formula."\n";
    }
}
