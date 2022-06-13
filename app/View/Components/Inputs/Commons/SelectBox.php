<?php

namespace App\View\Components\Inputs\Commons;

use Illuminate\View\Component;

/**
 * 共通セレクトボックス Component
 * 
 */
class SelectBox extends Component
{
    /**
     * class属性に付与する値
     * 
     * @param array<string> classs
     */
    public readonly array $classs;

    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param array<SelectItem> selectItems 選択項目
     * @param string selectedValue 選択値
     * @param bool visibleBlankItem 空項目を先頭に表示する true:表示 false:表示しない
     * @return void
     */
    public function __construct(
        public readonly string $id = '',
        public readonly string $name = '',
        array $classs = array(),
        public readonly array $selectItems = array(),
        public readonly string $selectedValue = '0',
        public readonly bool $visibleBlankItem = true
    )
    {
        $this->classs = $classs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.commons.select-box');
    }
}
