<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * 数値最大桁数　Rule
 * 
 */
class NumericMaxLength implements Rule
{
    /**
     * __construct
     *
     * @param int $max_lenght 最大桁数
     * @return void
     */
    public function __construct($max_lenght)
    {
        $this->max_lenght = $max_lenght;
    }

    /**
     * 数値最大桁数のバリデーション
     *
     * @param  string $attribute キー名称
     * @param  mixed  $value     チェック値
     * @return bool チェック結果
     */
    public function passes($attribute, $value)
    {
        if (strlen((string)$value) > $this->max_lenght)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /**
     * エラーメッセージを返却
     *
     * @return string メッセージ
     */
    public function message()
    {
        return ':attribute は'.$this->max_lenght.'桁以下で入力してください';
    }
}
