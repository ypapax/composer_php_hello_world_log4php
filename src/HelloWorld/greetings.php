<?php

namespace HelloWorld;

use SebastianBergmann\Timer\Timer;
use Logger;

class Greetings
{
	public static function sayHelloWorld()
	{
		$log = Logger::getLogger("foo");
		$log->info("Yay! Works!");
		$timer = new Timer();
		$timer::start();
		return 'Hello World\n' . $timer->resourceUsage() . "\n";
	}
}