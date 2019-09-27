<?php

namespace HelloWorld;

use SebastianBergmann\Timer\Timer;
use Logger;
use LoggerConfigurator;
use LoggerHierarchy;
use LoggerAppenderConsole;
use LoggerLayoutPattern;

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

// Note that %n inserts a newline.

		$layout = new LoggerLayoutPattern();

		$layout->setConversionPattern("%date{Y-m-d h:i:s} - %file:%line - %msg%n");

		$layout->activateOptions();


		$consoleAppender = new LoggerAppenderConsole();

		$consoleAppender->setLayout($layout);

		$consoleAppender->activateOptions();


		$rootLogger = $hierarchy->getRootLogger();

		$rootLogger->addAppender($consoleAppender);

	}

}