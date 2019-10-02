<?php

namespace Folder3;

use LineLogger\Log;

class Class3
{
	public static function do()
	{
		$log = Log::init();
		$log->info("yo");
	}
}