<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    public $message;
    public $options;
    public $selected;
    /**
     * php artisan make:component Alert
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $message="", $selected="apple")
    {
        $this->type=$type;
        $this->message=$message;
        $this->options=[
            "apple"=>"this is apple",
            "orange"=>"this is orange",
            "watermelon"=>"this is watermelon"
        ];
        $this->selected=$selected;
        //
    }

    public function isSelected($option_value){
        return $option_value === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
    
}
