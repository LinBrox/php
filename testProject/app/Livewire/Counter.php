<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrease()
    {
        $this->count--;
    }

    public function x2()
    {
        $this->count*=2;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

