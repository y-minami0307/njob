<?php

namespace App\Jsons\AffiliationsApi;

/**
 * 部門一覧 Json
 * 
 */
class Departments implements \JsonSerializable
{
    /**
     * __construct
     * 
     * @param array<Department> 部門配列
     */
    public function __construct(public readonly array $departments)
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