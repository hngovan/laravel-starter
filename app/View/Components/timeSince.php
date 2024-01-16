<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class timeSince extends Component
{
    /**
    * @var string
    */
    public string $date = "";
    /**
     * Create a new component instance.
     * @param  string  $date
     * @return void
     */
    public function __construct(string $date)
    {
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.time-since');
    }
}
