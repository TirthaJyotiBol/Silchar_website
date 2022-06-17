<?php

namespace App\View\Components;

use Illuminate\View\Component;

class readblogcards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $link="";
     public $heading="";
     public $image="";

    public function __construct($link,$heading,$image)
    {
        $this->link = $link;
        $this->heading = $heading;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.readblogcards');
    }
}
