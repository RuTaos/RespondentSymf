<?php

namespace App\Service\User;

use Predis\Client;
use Psr\Log\LoggerInterface;

class UserInfoCache
{
	const USER_NAME_KEY = 'users::names::%s';
	private LoggerInterface $logger;
	private Client $redisClient;

	public function __construct(LoggerInterface $logger, Client $redisClient)
	{
		$this->logger = $logger;
		$this->redisClient = $redisClient;
	}

	public function getUserName(string $userUid): ?string
	{
		return $this->redisClient->get(sprintf(self::USER_NAME_KEY, $userUid));
	}

	public function setUserName(string $userUid, string $userName): void
	{
		$this->redisClient->set(sprintf(self::USER_NAME_KEY, $userUid), $userName);
	}

	public function clearAll(): void
	{
		//TODO
	}
}