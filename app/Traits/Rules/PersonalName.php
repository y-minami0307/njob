<?php

namespace App\Traits\Rules;

/**
 * PersonalName Rules
 * 
 */
trait PersonalName
{
    /**
     * ルールを返却
     *  1.文字列
     *  2.最大50桁
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getPersonalNameRules($rules = ['nullable'])
    {
        return array_merge($rules, ['string', 'max:'.\UserConst::MAX_LENGTH_USER_NAME]);
    }
}