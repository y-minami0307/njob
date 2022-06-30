<?php

namespace App\View\Components\Bases;

use Illuminate\View\Component;

/**
 * ベースレイアウト パンくずリスト Component
 * 
 */
class Breadcrumb extends Component
{
    /**
     * __construct
     *
     * @param array<array> breadcrumbs パンくずリスト配列
     * @return void
     */
    public function __construct(public readonly array $breadcrumbs = array())
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..bases.breadcrumb');
    }
}
