<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
         do {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        } while ($input !== 4);
       
    }
}
