<?php

namespace App\View\Components\Inputs\Commons;

use Illuminate\View\Component;

/**
 * メンテナンスページ作成/編集 エラー Component
 * 
 */
class Error extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @return void
     */
    public function __construct(public readonly string $id, public readonly string $name)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.commons.error');
    }
}
