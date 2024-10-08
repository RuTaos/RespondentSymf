<?php

namespace App\Service\Redis;

use Predis\Client;

class TaskManager
{
	private Client $redisClient;

	public function __construct(Client $redisClient)
	{
		$this->redisClient = $redisClient;
	}


	public function addTask(string $name): void
	{
		//TODO
	}

	public function getNextTask() : string
	{
		//TODO
	}
}