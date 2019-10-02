<?php

// Autoload files using Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use LineLogger\Log;
use Folder2\Class2;


$log = Log::init();
$log->info("hey");

Class2::do();

