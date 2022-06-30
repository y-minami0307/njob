<?php

namespace App\View\Components\Bases;

use Illuminate\View\Component;

/**
 * ベースレイアウト フッター Component
 * 
 */
class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bases.footer');
    }
}
