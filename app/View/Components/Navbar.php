<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigation_items = [];
    public array $navigation_items_sk = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navigation_items = [
            ['label' => __('messages.about'), 'href' => '#about'],
            ['label' => __('messages.projects'), 'href' => '#portfolio'],
            ['label' => __('messages.coding-heading'), 'href' => '#tutorials'],
            ['label' => __('messages.contact'), 'href' => '#contact'],
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
