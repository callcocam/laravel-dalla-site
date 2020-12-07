<?php

namespace App\View\Components;

use App\Dalla\Slider as DallaSlider;
use Illuminate\View\Component;

class Slider extends Component
{

    protected $slider;
    protected $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(DallaSlider $slider, $template="slider")
    {

        $this->template = $template;
        $this->slider = $slider->lang()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view(sprintf('components.%s', $this->template))->with('sliders', $this->slider);
    }
}
