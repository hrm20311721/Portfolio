<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contact;

class AdminLayout extends Component
{

    public $count;
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, Contact $contact)
    {
        $this->count = $contact->countUnRead();
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.admin');
    }

}
