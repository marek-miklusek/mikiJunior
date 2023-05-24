<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorial extends Component
{
    public array $video_tutorials = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->video_tutorials = [
            [
                'video_id' => 'LULd0858mUQ',
                'title' => 'HTML and CSS Tutorial for Absolute Beginners',
                'description' => 'This video was the first one I saw, and it immediately captivated me, and I knew that this was it.'
            ],
            [
                'video_id' => 'hpfVMPCR3xA',
                'title' => 'Flying over canada (4K)',
                'description' => 'Relaxing Music With Stunning Beautiful Nature. Nature is not a place to visit, it is home, i love it there.'
            ],
            [
                'video_id' => 'ZDpQQj3r_W8',
                'title' => 'The Tourminator Peter Sagan',
                'description' => 'I love sports, tourism, fitness, cycling and all the others, it fills me with immense energy and happiness.'
            ],
        ];
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.video-tutorials');
    }
}
