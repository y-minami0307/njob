<?php

namespace App\View\Components\Containers\Searchs;

use Illuminate\View\Component;

/**
 * 検索条件コンテナカラム Component
 * 
 */
class Column extends Component
{
    /**
     * class属性に付与する文字列
     * 
     * @param string class
     */
    public readonly string $class;

    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param array<string> formClasss class属性に付与する文字列
     * @param string label ラベル名
     * @return void
     */
    public function __construct(
        public readonly string $id = '',
        array $classs = array(),
        public readonly string $label = ''
    )
    {
        $this->class = \AppUtil::convertStringArrayToString($classs, ' ');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.containers.searchs.column');
    }
}
