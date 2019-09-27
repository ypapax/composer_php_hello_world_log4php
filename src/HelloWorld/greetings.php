<?php

namespace HelloWorld;

use SebastianBergmann\Timer\Timer;

class Greetings
{
	public static function sayHelloWorld()
	{
		$timer = new Timer();
		$timer::start();
		return 'Hello World\n' . $timer->resourceUsage() . "\n";
	}
}