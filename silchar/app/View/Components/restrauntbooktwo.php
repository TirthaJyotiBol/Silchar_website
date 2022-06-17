<?php

namespace App\View\Components;

use Illuminate\View\Component;

class restrauntbooktwo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //  public $restrauntname="";
     public $email="";
     public $phone="";
     public $dishname="";
     public $image="";
    public function __construct($email,$phone,$dishname,$image)
    {
        // $this->restrauntname = $restrauntname;
        $this->email = $email;
        $this->phone = $phone;
        $this->dishname = $dishname;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.restrauntbooktwo');
    }
}
