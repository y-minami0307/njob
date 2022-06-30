<?php

namespace App\View\Components\Inputs\PasswordBoxs;

use Illuminate\View\Component;

/**
 * パスワードテキストボックス Component
 * 
 */
class Password extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param int maxlength maxlength属性に設定する値
     * @return void
     */
    public function __construct(
        public readonly string $id = 'password',
        public readonly string $name = 'password',
        public readonly array $classs = array(),
        public readonly int $maxlength = \UserConst::MAX_LENGTH_PASSWORD
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
        return view('components.inputs.password-box');
    }
}
