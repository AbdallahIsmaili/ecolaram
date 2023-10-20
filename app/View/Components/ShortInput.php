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

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $placeholder
     * @param string $type
     * @param string $name
     * @param string $value
     */

    public function __construct($label, $placeholder, $type, $name)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.short-input');
    }
}
