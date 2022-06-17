<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card_bs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $image="";
    public $heading="";
    public function __construct($image, $heading)
    {
        $this->image = $image;
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card_bs');
    }
}
