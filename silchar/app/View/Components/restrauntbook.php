<?php

namespace App\View\Components;

use Illuminate\View\Component;

class restrauntbook extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $resname="";
    public function __construct($resname)
    {
        $this->resname =$resname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.restrauntbook');
    }
}
