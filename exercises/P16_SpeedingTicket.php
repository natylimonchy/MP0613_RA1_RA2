<?php

class P16_SpeedingTicket {
    public function main(): void {
        // Define the speed
        $speed = 121;

        // Check if the speed exceeds the limit
        if($speed>120){
            $max = "Speeding ticket!" . "\n";
        } 
        // Write your code here
        echo $max;
    }
}
