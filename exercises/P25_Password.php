<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo"Password?\n";
        $pass = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if(str_contains($pass, "Caput Draconis")){
            echo"Welcome!";

        }else{
            echo"Off with you!";
        }
       
    }
}
