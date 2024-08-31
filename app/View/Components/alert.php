<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    public $status;
    public $msg;
    public $theme;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $message
     * @return void
     */
    public function __construct($msg, $status, $theme)
    {
        $this->msg = $msg;
        $this->status = $status;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.alert');
    }
}
