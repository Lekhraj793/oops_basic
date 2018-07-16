<?php

class Logger
{
	public function log($message)
	{
		echo "Logging message: $message";
	}
}

class User
{
	protected $logger;
	
	function __construct($logger)
	{
		$this->logger=$logger;
	}

	public function create()
	{
		$this->logger->log('user created');
	}

	public function update()
	{
		$this->logger->log('user updateed');
	}
}

$logger= new Logger();
$profile= new User($logger);

$profile->create();
$profile->update();