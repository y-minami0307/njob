<?php

namespace App\Traits\Accessors;

/**
 * name Accessor
 * 
 */
trait Name
{
    /**
     * 名称取得時の処理
     * 名称がnullの場合、空文字を返却する
     * 
     * @param string name 名称
     * @return string 名称
     */
    public function getNameAttribute($name)
    {
        return \AppUtil::convertNullToString($name);
    }
}