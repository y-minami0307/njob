<?php

namespace App\Jsons\AffiliationsApi;

/**
 * グループ Json
 * 
 */
class Group implements \JsonSerializable
{
    /**
     * __construct
     * 
     * @param int    id           グループID
     * @param string name         グループ名
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