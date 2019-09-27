<?php

namespace HelloWorld;

use SebastianBergmann\Timer\Timer;
use Logger;
use LoggerConfigurator;
use LoggerHierarchy;
use LoggerAppenderConsole;

class Greetings
{
	public static function sayHelloWorld()
	{
		Logger::configure([], new AppLogConfigurator); // use the specified configuration
		$log = Logger::getLogger("general");
		$log->info("Yay! Works!");
		$timer = new Timer();
		$timer::start();
		return 'Hello World\n' . $timer->resourceUsage() . "\n";
	}
}

class AppLogConfigurator implements LoggerConfigurator

{

	public function configure(LoggerHierarchy $hierarchy, $input = null)

	{

		$consoleAppender = new LoggerAppenderConsole(); // create a new console appender


		$consoleAppender->activateOptions(); // activate the appender


		$rootLogger = $hierarchy->getRootLogger(); // holds multiple loggers if needed

		$rootLogger->addAppender($consoleAppender); // add our appenders


	}

}