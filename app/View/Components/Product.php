<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
{

    public $hasTime;
    public $noStock;

    public function __construct($hasTime = false, $noStock = false)
    {

        $this->hasTime = $hasTime;
        $this->noStock = $noStock;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
