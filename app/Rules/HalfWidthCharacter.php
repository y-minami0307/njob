<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * 半角文字　Rule
 * 
 */
class HalfWidthCharacter implements Rule
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
     * 半角文字のバリデーション
     *
     * @param  string $attribute キー名称
     * @param  mixed  $value     チェック値
     * @return bool チェック結果
     */
    public function passes($attribute, $value)
    {
        if (mb_strlen($value) == mb_strwidth($value))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * エラーメッセージを返却
     *
     * @return string メッセージ
     */
    public function message()
    {
        return trans('validation.half_width_character');
    }
}
