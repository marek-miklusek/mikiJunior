<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Portfolio extends Component
{
    public array $items = [];
    
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'title' => 'Code Chronicles',
                'image' => url('/img/codechronicles.png'),
                'github' => 'https://github.com/marek-miklusek/matreshka-laravel'
            ],
            [
                'title' => 'Blog system',
                'image' => url('/img/blog.png'),
                'github' => 'https://github.com/marek-miklusek/blog-laravel'
            ],
        ];
    }

    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
