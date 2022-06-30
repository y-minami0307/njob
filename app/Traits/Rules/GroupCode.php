<?php

namespace App\Traits\Rules;

/**
 * GroupCode Rules
 * 
 */
trait GroupCode
{
    /**
     * ルールを返却
     *  1.数値
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getGroupCodeRules($rules = ['nullable'])
    {
        return array_merge($rules, ['integer']);
    }
}