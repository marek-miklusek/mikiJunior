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
                'title' => __('messages.tutorials-title-first'),
                'description' => __('messages.tutorials-description-first')
            ],
            [
                'video_id' => 'MYyJ4PuL4pY',
                'title' => __('messages.tutorials-title-second'),
                'description' => __('messages.tutorials-description-second')
            ],
            [
                'video_id' => 'OK_JCtrrv-c',
                'title' => __('messages.tutorials-title-third'),
                'description' => __('messages.tutorials-description-third')
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
