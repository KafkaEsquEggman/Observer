<?php

declare(strict_types=1);

namespace App\Context\Observer;

class ObserverTrue implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->getState()){
            echo "Soc un suscriptor true i l'estat esta True!\n";
        }
    }
}
