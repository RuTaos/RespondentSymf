<?php

declare(strict_types=1);

namespace App\Controller;

use Predis\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LimitedController extends AbstractController
{

	private Client $redisClient;

	public function __construct(Client $redisClient)
	{
		$this->redisClient = $redisClient;
	}

	/**
	 * @Route("/api/limited")
	 */
	public function index(Request $request): Response
	{
		//TODO
		return new JsonResponse([], 200);
	}
}
