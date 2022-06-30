<?php

namespace App\View\Components\Tables\Commons;

use Illuminate\View\Component;

/**
 * 共通テーブル Component
 * 
 */
class Table extends Component
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
     * @param array<string> classs class属性に付与する文字列
     * @return void
     */
    public function __construct(public readonly string $id = '', array $classs = array())
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
        return view('components.tables.commons.table');
    }
}
