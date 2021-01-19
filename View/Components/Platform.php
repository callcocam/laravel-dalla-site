<?php

namespace App\View\Components;

use App\Ep3\Platform as Ep3Platform;
use Illuminate\View\Component;

class Platform extends Component
{
    protected $content;
    protected $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Ep3Platform $content, $template)
    {
        $this->template = $template;
        $this->content = $content->where('status', 'published')->get();
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
