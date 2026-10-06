    <?php

    class P32_OnlyPositives
    {
        public function main(): void
        {
            do {
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input < 0) {
                echo "Unsuitable number\n";
            } elseif ($input > 0) {
                echo $input ** 2 . "\n";
            }
        } while ($input !== 0);
        
        }
    }
