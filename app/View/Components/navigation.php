<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navigation extends Component
{   /**
    * @var array
    */
    public $breadcrumbs = [];

    /**
     * Create a new component instance.
     * @param  array  $breadcrumbs
     * @return void
     */
    public function __construct(array $breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation');
    }
}
