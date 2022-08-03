<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public string $emailAddress;
    public string $phoneNumber;
    public string $facebookLink;
    public string $youtubeLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $emailAddress = '',
        string $phoneNumber = '',
        string $facebookLink = '',
        string $youtubeLink = ''
    ) {
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->facebookLink = $facebookLink;
        $this->youtubeLink = $youtubeLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.footer');
    }
}
