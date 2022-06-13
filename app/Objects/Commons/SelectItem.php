<?php

namespace App\Objects\Commons;

/**
 * セレクトボックスの選択項目
 * 
 */
class SelectItem
{
    /**
     * __construct
     * 
     * @param string value value属性
     * @param string name 項目名
     */
    public function __construct(public readonly string $value, public readonly string $name)
    {
        
    }
}