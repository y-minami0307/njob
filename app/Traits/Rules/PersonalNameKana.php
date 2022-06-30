<?php

namespace App\Traits\Rules;

/**
 * PersonalNameKana Rules
 * 
 */
trait PersonalNameKana
{
    /**
     * ルールを返却
     *  1.文字列
     *  2.最大100桁
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getPersonalNameKanaRules($rules = ['nullable'])
    {
        return array_merge($rules, ['string', 'max:'.\UserConst::MAX_LENGTH_PERSONAL_NAME_KANA]);
    }
}