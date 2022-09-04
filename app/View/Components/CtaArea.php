<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CtaArea extends Component
{
    public string $emailAddress;
    public string $phoneNumber;
    public string $phoneNumberLink;
    public $qualifications;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $emailAddress, string $phoneNumber, string $phoneNumberLink, $qualifications)
    {
        $this->emailAddress    = $emailAddress;
        $this->phoneNumber     = $phoneNumber;
        $this->phoneNumberLink = $phoneNumberLink;
        $this->qualifications   = $qualifications;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.cta-area');
    }
}
