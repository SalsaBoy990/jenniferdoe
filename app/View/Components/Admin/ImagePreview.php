<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ImagePreview extends Component
{
    public $url;
    public $alt;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $url, string $alt)
    {
        $this->url = $url;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.image-preview');
    }
}
