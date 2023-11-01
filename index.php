<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Common\Environment;

// Load env file to memory
Environment::load(__DIR__);

// Get defined Env Variables
$env = getenv();

echo '<pre>';
print_r($env);
echo '</pre>';
