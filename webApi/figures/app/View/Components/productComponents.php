<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productCompoent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $name ;
    public $price;
    public $raiting;
    public $idDetails;
    public $soluong;

    public function __construct($img,$name,$price,$raiting,$idDetails,$soluong)
    {
        $this->img = $img;
        $this->name=$name;
        $this->price=$price;
        $this->raiting=$raiting;
        $this->idDetails=$idDetails;
        $this -> soluong = $soluong;
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
