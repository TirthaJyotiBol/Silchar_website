<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\This;

class doctorslider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $experiance;
    public $specialist;
    public $address;
    public $image;

    public function __construct($name,$experiance,$specialist,$address,$image)
    {
        $this->name = $name;
        $this->experiance = $experiance;
        $this->specialist = $specialist;
        $this->address = $address;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.doctorslider');
    }
}
