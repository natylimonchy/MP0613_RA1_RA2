<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        echo "Where to? ";
        $end = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Where from? ";
        $start = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = $start; $i <= $end; $i++) {
            echo $i . "\n";
        }
       
    }
}
