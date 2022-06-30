<?php

namespace App\View\Components\Buttons\Commons;

use Illuminate\View\Component;

/**
 * 共通編集ボタン Component
 * 
 */
class CircleEditButton extends Component
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
     * @param array<string> classs class属性に付与する文字列
     * @param string type type属性に設定する値
     * @param string otherAttribute その他属性を文字列で指定
     * @return void
     */
    public function __construct(
        public readonly string $id = '',
        array $classs = array(),
        public readonly string $type = 'button',
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
        return view('components.buttons.commons.circle-edit-button');
    }
}
