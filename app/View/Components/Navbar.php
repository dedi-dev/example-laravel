<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
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
        $navbar = [
            'Home' => '/',
            'Profile' => '/profile',
            'Contact' => '/contact',
            'About' => '/about',
            'Tasks' => '/tasks'
        ];
        return view('components.navbar', compact('navbar'));
    }
}
