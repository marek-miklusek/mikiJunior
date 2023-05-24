<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigation_items = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navigation_items = [
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Projects', 'href' => '#portfolio'],
            ['label' => 'Coding tutorials', 'href' => '#tutorials'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('navbar');
    }
}
