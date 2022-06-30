<?php

namespace App\View\Components\Inputs\Commons;

use Illuminate\View\Component;

/**
 * 共通チェックボックス Component
 * 
 */
class CheckBox extends Component
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
     * @param int value チェック時のvalue属性に設定する値
     * @param int unCheckedValue 未チェック時のvalue属性に設定する値
     * @param int checkedValue チェック値
     * @param string label チェックボックスのラベル名
     * @param string checkBoxBeforeAndAfter チェックボックスの表示位置
     * @param string otherAttribute その他属性を文字列で指定
     * @return void
     */
    public function __construct(
        public readonly string $id = '',
        public readonly string $name = '',
        array $classs = array(),
        public readonly int $value = \CheckBoxConst::DEFAULT_CHECKED_VALUE,
        public readonly int $unCheckedValue = \CheckBoxConst::DEFAULT_UN_CHECKED_VALUE,
        public readonly int $checkedValue = \CheckBoxConst::DEFAULT_UN_CHECKED_VALUE,
        public readonly string $label = '',
        public readonly string $checkBoxBeforeAndAfter = 'before',
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
        return view('components.inputs.commons.check-box');
    }
}
