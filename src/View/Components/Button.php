<?php

namespace Designbycode\Kite\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $variant;

    /**
     * Create a new component instance.
     */
    public function __construct(string $variant = 'primary')
    {
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('kite::components.button');
    }

    public function buttonClasses(): string
    {
        return [
            'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90',
            'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
            'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
            'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
            'ghost' => 'hover:bg-accent hover:text-accent-foreground',
            'link' => 'text-primary underline-offset-4 hover:underline',
        ][$this->variant] ?? 'bg-primary text-primary-foreground hover:bg-primary/90';
    }
}
