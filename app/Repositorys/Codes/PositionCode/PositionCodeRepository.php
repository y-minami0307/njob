<?php

namespace App\Repositorys\Codes\PositionCode;

use App\Models\Codes\PositionCode;

/**
 * 役職コード Repository
 * 
 */
class PositionCodeRepository implements PositionCodeRepositoryInterface
{
    /**
     * 役職コードを取得
     * 
     * @return Collection 役職コード
     */
    public function getAll()
    {
        return PositionCode::get();
    }
}