<?php

namespace App\Command\Shape;

use SplFixedArray;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShapeDrawCommand extends Command
{
	protected static $defaultName = 'app:shape:draw';

	public function __construct()
	{
		parent::__construct();
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		foreach ([] as $shape)
		{
			echo $shape->draw();
			echo "\n";
		}

		return Command::SUCCESS;
	}
}
