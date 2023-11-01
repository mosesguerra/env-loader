<?php

namespace App\Common;

class Environment
{
    // Load project .env files
    public static function load($dir)
    {
        // Check if exists
        if (!file_exists($dir . '/.env')) {
            return false;
        }

        // Get info from env file into lines
        $lines = file($dir . '/.env');

        // Add variables to the memory
        foreach ($lines as $line) {
            putenv(trim($line));
        }
    }
}
