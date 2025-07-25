<?php

namespace App\View\Components\Guest;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormDaftarLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.guest.form-daftar-layout');
    }
}
