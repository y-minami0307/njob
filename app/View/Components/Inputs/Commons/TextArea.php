<?php

namespace App\View\Components\Inputs\Commons;

use Illuminate\View\Component;

/**
 * 共通テキストエリア Component
 * 
 */
class TextArea extends Component
{
    /**
     * class属性に付与する文字列
     * 
     * @param string classs
     */
    public readonly string $class;

    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param string value value属性に設定する値
     * @param ?int maxlength maxlength属性に設定する値
     * @param string placeholder placeholder属性に付与する文字列
     * @param ?int rows rows属性に設定する値
     * @param string otherAttribute その他属性を文字列で指定
     * @return void
     */
    public function __construct(
        public readonly string $id = '',
        public readonly string $name = '',
        array $classs = array(),
        public readonly string $value = '',
        public readonly ?int $maxlength = null,
        public readonly string $placeholder = '',
        public readonly ?int $rows = null,
        public readonly string $otherAttribute = ''
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
        return view('components.inputs.commons.text-area');
    }
}
