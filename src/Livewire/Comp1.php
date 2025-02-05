<?php

namespace Rabahlivewire\Rabahlivewire\Livewire;
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
use Livewire\Component;

class Comp1 extends Component
{
    public $count = 0 ;

    public function add()
    {
        $this->count = $this->count + 1 ;
    }

    public function render()
    {
        return view('rabahlivewire::livewire.comp1')
        ->layout('rabahlivewire::layouts.app');
    }

}