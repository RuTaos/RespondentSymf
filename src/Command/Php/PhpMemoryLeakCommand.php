<?php

declare(strict_types=1);

namespace App\Command\Php;

use App\Model\User\User;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PhpMemoryLeakCommand extends Command
{
	protected static $defaultName = 'php:memory-leak';

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		ini_set('memory_limit', '200M');


		$array = array_fill_keys(range(0, 2050000), new User('00000000-0000-0000-0000-000000000000', 'Name'));
		$res = [];
		foreach ($array as $key => $value)
		{
			if ($key % 2 === 0)
			{
				unset($array[$key]);
//				$res[] = $value;
			}
		}

		$output->writeln(memory_get_usage(true));
		$output->writeln(count($res));
		$output->writeln(count($array));

		return Command::SUCCESS;
	}
}
