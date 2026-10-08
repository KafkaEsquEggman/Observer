<?php

declare(strict_types=1);

namespace App\Context;

class Observable implements \SplSubject
{
    private $state = true;

    private $observers = [];

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
        echo "Observable creat\n";
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
        echo "S'ha afegit un observer.\n";
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "S'ha eliminat un observer.\n";
    }

    public function notify(): void
    {
        echo "Notificant a tots els observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function updateState(): void
    {
        $this->state = !$this->state;
        $str_state = $this->state ? "True" : "False";
        echo "S'ha actualitzat l'estat a {$str_state} \n";
        $this->notify();
    }

    public function getState(): bool
    {
        return $this->state;
    }
}
