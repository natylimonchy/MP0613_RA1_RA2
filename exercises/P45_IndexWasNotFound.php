<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        echo "Search for? ";
        $search = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $found = false;
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] === $search) {
                echo $search . " is at index " . $i . ".\n";
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo $search . " was not found.\n";
        }
       
    }
}
