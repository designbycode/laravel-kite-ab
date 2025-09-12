<?php

namespace Designbycode\Kite\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public ?string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(?string $label = null)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('kite::components.input');
    }
}
