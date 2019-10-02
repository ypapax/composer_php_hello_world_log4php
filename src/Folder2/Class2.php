<?php

namespace Folder2;

use LineLogger\Log;

class Class2
{
	public static function do()
	{
		$log = Log::init();
		$log->info("hey");
	}
}