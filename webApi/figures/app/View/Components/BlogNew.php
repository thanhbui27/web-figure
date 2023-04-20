<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogNew extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
  
    public $date;
    public $name;
    public $img;
    public $title;
    public $id;
    public function __construct($id,$title,$name,$date,$img)
    {
        $this -> id = $id;
        $this -> name = $name;
        $this -> date = $date;
        $this -> img = $img;
        $this -> title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-new');
    }
}
