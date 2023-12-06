<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $search = '';

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }



    public function updatevalue()
    {
        $this->count++;
        // $this->search = "aa";
    }

    public function hydrateSearch()
    {
        // dd($this->search);
    }

    public function updatedSearch()
    {
        // dd("updatedSearch: " . $this->search);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
