<?php

namespace App\View\Components\Maints\Commons;

use Illuminate\View\Component;

/**
 * メンテナンスページ作成/編集 入力欄 Component
 * 
 */
class InputContainer extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param string label ラベル名
     * @param bool visibleError エラー表示欄を表示するか true:表示 false:表示しない
     * @return void
     */
    public function __construct(public readonly string $id, public readonly string $name, public readonly string $label, public readonly bool $visibleError = true)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.maints.commons.input-container');
    }
}
