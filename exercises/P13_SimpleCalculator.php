<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        $sum = $numA . " + " . +$numB . " = " . $numA+$numB;
        $rest= $numA . " - " . +$numB . " = " . $numA-$numB;
        $multp = $numA . " * " . +$numB . " = " . $numA*$numB;
        $div = $numA . " / " . $numB . " = " . number_format($numA / $numB, 1, '.', '');
        // Write the program here
       
        echo $sum . "\n";
        echo $rest . "\n";
        echo $multp . "\n";
        echo $div . "\n" ;
        
       
    }
}
