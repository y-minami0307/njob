<?php

namespace App\Traits\Rules;

/**
 * UserName Rules
 * 
 */
trait UserName
{
    /**
     * ルールを返却
     *  1.文字列
     *  2.半角文字
     *  3.最大20桁
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getUserNameRules($rules = ['required'])
    {
        return array_merge($rules, ['string', 'half_width_character', 'max:'.\UserConst::MAX_LENGTH_PERSONAL_NAME]);
    }
}