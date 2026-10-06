<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        // Write your code here
         if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }

        $allowed = ['en', 'es', 'fr'];

        if (isset($_GET['lang'])) {
            $lang = in_array($_GET['lang'], $allowed, true) ? $_GET['lang'] : 'en';
        } else {
            $lang = $_SESSION['lang'] ?? 'en';
        }

        $_SESSION['lang'] = $lang;
        echo "Language set to " . $lang;
    
        
    }
}
