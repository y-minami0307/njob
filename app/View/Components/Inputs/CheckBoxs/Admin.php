<?php

namespace App\View\Components\Inputs\CheckBoxs;

use Illuminate\View\Component;

/**
 * 管理者チェックボックス Component
 * 
 */
class Admin extends Component
{
    /**
     * __construct
     *
     * @param string id id属性に付与する文字列
     * @param string name name属性に付与する文字列
     * @param array<string> classs class属性に付与する文字列
     * @param int value チェック時のvalue属性に設定する値
     * @param int unCheckedValue 未チェック時のvalue属性に設定する値
     * @param int checkedValue チェック値
     * @param string label チェックボックスのラベル名
     * @param string checkBoxBeforeAndAfter チェックボックスの表示位置
     * @param string otherAttribute その他属性を文字列で指定
     * @return void
     */
    public function __construct(
        public readonly string $id = 'admin',
        public readonly string $name = 'admin',
        public readonly array $classs = array(),
        public readonly int $value = \UserConst::CHECKED_VALUE_ADMIN,
        public readonly int $unCheckedValue = \UserConst::UN_CHECKED_VALUE_ADMIN,
        public readonly int $checkedValue = \UserConst::UN_CHECKED_VALUE_ADMIN,
        public readonly string $label = \UserConst::LABEL_NAME_ADMIN,
        public readonly string $checkBoxBeforeAndAfter = 'before',
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
        return view('components.inputs.check-box');
    }
}
