<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Location extends Component
{
    public string $location;
    public string $interiorImageUrl;
    public string $interiorImageCaption;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $location = '', string $interiorImageUrl = '', string $interiorImageCaption = '')
    {
        $this->location = $location;
        $this->interiorImageUrl = $interiorImageUrl;
        $this->interiorImageCaption = $interiorImageCaption;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.location');
    }
}
