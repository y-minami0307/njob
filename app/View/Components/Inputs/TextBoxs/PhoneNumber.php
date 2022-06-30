<?php

namespace App\View\Components\Inputs\TextBoxs;

use Illuminate\View\Component;

/**
 * 電話番号テキストボックス Component
 * 
 */
class PhoneNumber extends Component
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
        public readonly string $id = 'phone-number',
        public readonly string $name = 'phone_number',
        public readonly array $classs = array(),
        public readonly string $value = '',
        public readonly int $maxlength = \UserConst::MAX_LENGTH_PHONE_NUMBER,
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
