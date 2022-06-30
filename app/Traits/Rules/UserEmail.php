<?php

namespace App\Traits\Rules;

use Illuminate\Validation\Rule;
use App\Models\Masters\User;

/**
 * UserEmail Rules
 * 
 */
trait UserEmail
{
    /**
     * ルールを返却
     *  1.文字列
     *  2.半角文字
     *  3.メールアドレス
     *  4.最大255桁
     *  5.一意
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getCreateUserEmailRules($rules = ['required'])
    {
        return array_merge($rules, ['string', 'half_width_character', 'email', 'max:'.\UserConst::MAX_LENGTH_EMAIL, Rule::unique(User::class)]);
    }

    /**
     * ルールを返却
     *  1.文字列
     *  2.半角文字
     *  3.メールアドレス
     *  4.最大255桁
     *  5.一意
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getUpdateUserEmailRules($rules = ['required'])
    {
        return array_merge($rules, ['string', 'half_width_character', 'email', 'max:'.\UserConst::MAX_LENGTH_EMAIL, Rule::unique(User::class)->ignore($this->id)]);
    }
}