<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShortInput extends Component
{
    public $label;
    public $placeholder;
    public $type;
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $placeholder
     * @param string $type
     * @param string $name
     * @param string $value
     */

    public function __construct($label, $placeholder, $type, $name, $value)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.short-input');
    }
}
