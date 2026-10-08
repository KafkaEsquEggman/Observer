<?php

namespace App\Command;

use App\Context\Observable;
use App\Context\Observer\ObserverFalse;
use App\Context\Observer\ObserverTrue;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:observer:behavior',
    description: 'Mostra un exemple de fluxe de obsrever',
)]
class ObserverBehaviorCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $subject = new Observable();

        $observer_true = new ObserverTrue();
        $observer_false = new ObserverFalse();

        $subject->attach($observer_true);
        $subject->attach($observer_false);

        $subject->updateState();
        $subject->updateState();

        $subject->detach($observer_true);

        return 0;
    }
}
