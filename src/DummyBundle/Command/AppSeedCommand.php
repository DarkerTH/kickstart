<?php

namespace DummyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppSeedCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:seed')
            ->addOption('size', 's', InputOption::VALUE_REQUIRED, 'The amount of dummy data', 100)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $size = $input->getArgument('size');

        $output->writeln('Command result.');
    }

}
