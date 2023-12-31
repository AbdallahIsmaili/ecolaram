<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnsignedNumberInput extends Component
{

    public $label;
    public $name;
    public $placeholder;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $name, $placeholder, $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->placeholder = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.unsigned-number-input');
    }
}
