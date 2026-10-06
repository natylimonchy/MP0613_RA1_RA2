<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

        // Write your code here
        echo "Give two indices to swap:\n";
        $first = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $second = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $temp = $array[$first];
        $array[$first] = $array[$second];
        $array[$second] = $temp;

        echo "\n";

        foreach ($array as $value) {
            echo $value;
        }
       
    }
}
