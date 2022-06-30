<?php

namespace App\Jsons\AffiliationsApi;

/**
 * 部門 Json
 * 
 */
class Department implements \JsonSerializable
{
    /**
     * __construct
     * 
     * @param int    id           部門ID
     * @param string name         部門名
     * @param string abbreviation 略称
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $abbreviation
    )
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