<?php

// Autoload files using Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use LineLogger\Log;


$log = Log::init();
$log->info("hey");