<?php

namespace App\View\Components;

use Illuminate\View\Component;

class categoryProductComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $price;
    public $img;
    public $soluong;
    public $idDetails;
    public function __construct($idDetails,$img,$name,$price,$soluong)
    {
        $this -> idDetails = $idDetails;
        $this -> img = $img;
        $this -> name = $name;
        $this -> price = $price;
        $this -> soluong = $soluong;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categoryProductComponent');
    }
}
