<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
	public $name = 'Jelly';
    public function render()
    {
	    return view('livewire.hello-world'
	    );
    }
}
