<?php

namespace App\View\Components\Inputs\TextAreas;

use Illuminate\View\Component;

/**
 * 住所テキストエリア Component
 * 
 */
class Address extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param string value value属性に設定する値
     * @param string otherAttribute その他属性を文字列で指定
     * @param string placeholder placeholder属性に付与する文字列
     * @param int maxlength maxlength属性に設定する値
     * @param int rows rows属性に設定する値
     * @return void
     */
    public function __construct(
        public readonly string $id = 'address',
        public readonly string $name = 'address',
        public readonly array $classs = array(),
        public readonly string $value = '',
        public readonly int $maxlength = \UserConst::MAX_LENGTH_ADDRESS,
        public readonly string $placeholder = '',
        public readonly int $rows = 2,
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
        return view('components.inputs.text-area');
    }
}
