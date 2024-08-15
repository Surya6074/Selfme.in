<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    public $status;
    public $msg;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $message
     * @return void
     */
    public function __construct($msg, $status)
    {
        $this->msg = $msg;
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.alert');
    }
}
