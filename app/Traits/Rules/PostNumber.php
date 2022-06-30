<?php

namespace App\Traits\Rules;

use App\Rules\NumericMaxLength;

/**
 * PostNumber Rules
 * 
 */
trait PostNumber
{
    /**
     * ルールを返却
     *  1.数値
     *  2.7桁以内
     * 
     * @param array<string> rules 既定のルール以外で適用するルール
     * @return array<string> ルール
     */
    public function getPostNumberRules($rules = ['nullable'])
    {
        return array_merge($rules, ['numeric_only', new NumericMaxLength(\UserConst::MAX_LENGTH_POST_NUMBER)]);
    }
}