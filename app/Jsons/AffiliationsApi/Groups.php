<?php

namespace App\Jsons\AffiliationsApi;

/**
 * グループ一覧 Json
 * 
 */
class Groups implements \JsonSerializable
{
    /**
     * __construct
     * 
     * @param array<Group> グループ配列
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