<?php

namespace App\View\Components\Inputs\TextBoxs;

use Illuminate\View\Component;

/**
 * 名前テキストボックス Component
 * 
 */
class PersonalName extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param string value value属性に設定する値
     * @param string placeholder placeholder属性に付与する文字列
     * @param int maxlength maxlength属性に設定する値
     * @param string otherAttribute その他属性を文字列で指定
     * @return void
     */
    public function __construct(
        public readonly string $id = 'personal_name',
        public readonly string $name = 'personal_name',
        public readonly array $classs = array(),
        public readonly string $value = '',
        public readonly int $maxlength = \UserConst::MAX_LENGTH_PERSONAL_NAME,
        public readonly string $placeholder = '',
        public readonly string $otherAttribute = ''
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.text-box');
    }
}
