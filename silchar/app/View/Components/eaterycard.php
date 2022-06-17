<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\This;

class eaterycard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $image="";
     public $name="";
     public $address="";
     public $email="";
     public $link="";
     public $button="";
    public function __construct($image,$name,$address,$email,$link,$button)
    {
        $this->image = $image;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->link = $link;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.eaterycard');
    }
}
