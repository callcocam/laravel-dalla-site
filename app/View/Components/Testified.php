<?php

namespace App\View\Components;

use App\Ep3\Testified as Ep3Testified;
use Illuminate\View\Component;

class Testified extends Component
{
    protected $content;
    protected $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Ep3Testified $content, $template)
    {
        $this->template = $template;
        $this->content = $content->lang()->where('status', 'published')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view(sprintf('components.%s', $this->template))->with('content', $this->content);
    }
}
