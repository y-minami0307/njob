<?php

namespace App\Traits\Rules;

use App\Rules\NumericMaxLength;

/**
 * MobilePhoneNumber Rules
 * 
 */
trait MobilePhoneNumber
{
    /**
     * ルールを返却
     *  1.数値
     *  2.11桁以内
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getMobilePhoneNumberRules($rules = ['nullable'])
    {
        return array_merge($rules, ['numeric_only', new NumericMaxLength(\UserConst::MAX_LENGTH_MOBILE_PHONE_NUMBER)]);
    }
}