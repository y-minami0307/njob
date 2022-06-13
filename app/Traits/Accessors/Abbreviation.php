<?php

namespace App\Traits\Accessors;

/**
 * abbreviation Accessor
 * 
 */
trait Abbreviation
{
    /**
     * 略称取得時の処理
     * 略称がnullの場合、空文字を返却する
     * 
     * @param string abbreviation 略称
     * @return string 略称
     */
    public function getAbbreviationAttribute($abbreviation)
    {
        return $abbreviation == null ? '' : $abbreviation;
    }
}