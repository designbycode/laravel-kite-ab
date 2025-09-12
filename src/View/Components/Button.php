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
            'primary' => 'bg-slate-900 text-white hover:bg-slate-700',
            'secondary' => 'bg-slate-100 text-slate-900 hover:bg-slate-200',
            'destructive' => 'bg-red-500 text-white hover:bg-red-600',
            'outline' => 'border border-slate-200 bg-transparent hover:bg-slate-100',
            'ghost' => 'hover:bg-slate-100',
            'link' => 'text-slate-900 underline-offset-4 hover:underline',
        ][$this->variant] ?? 'bg-slate-900 text-white hover:bg-slate-700';
    }
}
