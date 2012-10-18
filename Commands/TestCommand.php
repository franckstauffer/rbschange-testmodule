<?php

namespace Franckstauffer\Testmodule\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends \Change\Application\Console\ChangeCommand
{
	/**
	 */
	protected function configure()
	{
		// Configure your command here 
	}

	/**
	 *
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 * @throws \LogicException
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		// Code of you command here 
		$output->writeln("<info>It seems to be working</info>");
	}
}