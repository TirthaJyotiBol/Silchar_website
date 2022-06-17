<?php
namespace App\View\Components;

use Illuminate\View\Component;
class cardsIndexPage extends Component
{ 

    /**
     * Create a new component instance.
     *
     * @return void
     */
    
     public $name="";
     public $button="";
     public $desc="";
     public $link="";
     public $image="";
    public function __construct($name , $button , $desc , $link , $image)
    {
        $this->name = $name;
        $this->button = $button;
        $this->desc = $desc;
        $this->link = $link;
        $this->image = $image;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards-index-page');
    }
}
