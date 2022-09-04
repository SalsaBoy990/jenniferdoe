<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Intro extends Component
{
    public string $title;
    public string $subTitle;
    public string $description;
    public string $profileImageUrl;
    public string $phoneNumber;
    public string $phoneNumberLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = '', string $subTitle = '', string $description = '', string $profileImageUrl = '', string $phoneNumber = '', string $phoneNumberLink = '')
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description = $description;
        $this->profileImageUrl = $profileImageUrl;
        $this->phoneNumber = $phoneNumber;
        $this->phoneNumberLink = $phoneNumberLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.intro');
    }
}
