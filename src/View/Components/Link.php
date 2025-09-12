<?php

namespace Designbycode\Kite\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public string $variant;

    /**
     * Create a new component instance.
     */
    public function __construct(string $variant = 'default')
    {
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('kite::components.link');
    }

    public function linkClasses(): string
    {
        return [
            'default' => 'text-slate-900 underline-offset-4 hover:underline',
            'subtle' => 'text-slate-500 hover:text-slate-700',
        ][$this->variant] ?? 'text-slate-900 underline-offset-4 hover:underline';
    }
}
