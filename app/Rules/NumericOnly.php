<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * 数値のみ　Rule
 * 
 */
class NumericOnly implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 数値のみのバリデーション
     *
     * @param  string $attribute キー名称
     * @param  mixed  $value     チェック値
     * @return bool チェック結果
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[0-9]+$/', $value);
    }

    /**
     * エラーメッセージを返却
     *
     * @return string メッセージ
     */
    public function message()
    {
        return trans('validation.numeric_only');
    }
}
