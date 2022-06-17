<?php

namespace App\View\Components;

use Illuminate\View\Component;

class doctorcard1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $heading;
    public $paragraph;
    public $fa;
    public function __construct($heading,$paragraph,$fa )
    {
        $this->heading = $heading;
        $this->paragraph = $paragraph;
        $this->fa = $fa;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.doctorcard1');
    }
}
