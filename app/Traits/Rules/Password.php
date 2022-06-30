<?php

namespace App\Traits\Rules;

/**
 * Password Rules
 * 
 */
trait Password
{
    /**
     * ルールを返却
     *  1.最小8桁
     *  2.確認入力と一致
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getPasswordRules($rules = ['required'])
    {
        return array_merge($rules, ['min:'.\UserConst::MIN_LENGTH_PASSWORD, 'confirmed']);
    }
}