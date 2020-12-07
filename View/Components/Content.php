<?php

namespace App\View\Components;

use App\Dalla\Content as ModelContent;
use Illuminate\View\Component;

class Content extends Component
{

    protected $content;
    protected $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ModelContent $content, $asset, $template)
    {
        $this->template = $template;
        $this->content = $content->where('asset', $asset)->first();
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
