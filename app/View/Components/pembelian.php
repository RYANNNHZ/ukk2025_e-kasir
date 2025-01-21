<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pembelian extends Component
{
    /**
     * Create a new component instance.
     */
    public $produks;
    public function __construct($produks)
    {
        $this->produks = $produks;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pembelian');
    }
}
