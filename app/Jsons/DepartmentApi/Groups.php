<?php

namespace App\Jsons\DepartmentApi;

class Groups implements \JsonSerializable
{
    /**
     * __construct
     * 
     * @param Group array<int, group> グループ配列
     */
    public function __construct(public readonly array $groups)
    {

    }

    /**
     * jsonSerialize
     * 
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}