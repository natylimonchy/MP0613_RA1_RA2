<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $sum = 0;
        $count = 0;

        while (true) {
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            if ($input > 0) {
                $sum += $input;
                $count++;
            }
        }

        if ($count === 0) {
            echo "Cannot calculate the average\n";
        } else {
            $average = (string) ($sum / $count);
            if (!str_contains($average, '.')) {
                $average .= '.0';
            }
            echo $average . "\n";
        }
       
    }
}
