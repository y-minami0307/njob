<?php

namespace App\Traits\Rules;

/**
 * AffiliationCode Rules
 * 
 */
trait AffiliationCode
{
    /**
     * ルールを返却
     *  1.数値
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getAffiliationCodeRules($rules = ['nullable'])
    {
        return array_merge($rules, ['integer']);
    }
}