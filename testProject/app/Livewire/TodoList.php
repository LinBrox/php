<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];
    public $newTodo = '';

    public function addTodo()
    {
        if (trim($this->newTodo) !== '') {
            $this->todos[] = $this->newTodo;
            $this->newTodo = '';
        }
    }

    public function removeTodo($index)
    {
        unset($this->todos[$index]);
        $this->todos = array_values($this->todos); // Re-index array
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
