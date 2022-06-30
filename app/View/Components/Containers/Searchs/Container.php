<?php

namespace App\View\Components\Containers\Searchs;

use Illuminate\View\Component;

/**
 * 検索条件コンテナ Component
 * 
 */
class Container extends Component
{
    /**
     * class属性に付与する文字列
     * 
     * @param string formClass
     */
    public readonly string $formClass;

    /**
     * __construct
     *
     * @param string formId id属性に付与する文字列
     * @param array<string> formClasss class属性に付与する文字列
     * @param string formAction action属性に付与する文字列
     * @return void
     */
    public function __construct(
        public readonly string $formId = '',
        array $formClasss = array(),
        public readonly string $formAction = ''
    )
    {
        $this->formClass = \AppUtil::convertStringArrayToString($formClasss, ' ');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.containers.searchs.container');
    }
}
