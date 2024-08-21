<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $firstNumber = 0;
    public $secondNumber = 0;
    public $operation = '+';
    public $result = 0;

    public function calculate()
    {
        switch ($this->operation) {
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result = $this->secondNumber != 0 ? $this->firstNumber / $this->secondNumber : 'Error';
                break;
            default:
                $this->result = 'Invalid Operation';
                break;
        }
    }
    public function render()
    {
        return view('livewire.calculator');
    }
}
