<?php

namespace App\View\Components\Bases;

use Illuminate\View\Component;

/**
 * ベースレイアウト ライトバー Component
 * 
 */
class RightBar extends Component
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
        return view('components.bases.right-bar');
    }
}
