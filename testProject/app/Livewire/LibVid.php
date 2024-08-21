<?php

namespace App\Livewire;

use Livewire\Component;

class LibVid extends Component
{
    public $src = 'images/libvid.mp4';

    public function mount($src = null)
    {
        if ($src) {
            $this->src = $src;
        }
    }

    public function render()
    {
        return view('livewire.lib-vid');
    }
}
