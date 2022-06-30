<?php

namespace App\Traits\Rules;

/**
 * Admin Rules
 * 
 */
trait Admin
{
    /**
     * ルールを返却
     *  1.倫理
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getAdminRules($rules = ['nullable'])
    {
        return array_merge($rules, ['boolean']);
    }
}