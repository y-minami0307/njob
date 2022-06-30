<?php

namespace App\Traits\Rules;

/**
 * Address Rules
 * 
 */
trait Address
{
    /**
     * ルールを返却
     *  1.文字列
     *  2.最大255桁
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getAddressRules($rules = ['nullable'])
    {
        return array_merge($rules, ['string', 'max:'.\UserConst::MAX_LENGTH_ADDRESS]);
    }
}