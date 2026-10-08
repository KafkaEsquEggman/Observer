<?php

declare(strict_types=1);

namespace App\Context\Observer;

class ObserverFalse implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if (!$subject->getState()){
            echo "Soc un suscriptor false i l'estat esta False!\n";
        }
    }
}
