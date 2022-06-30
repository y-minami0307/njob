<?php

namespace App\Repositorys\Codes\GroupCode;

use App\Models\Codes\GroupCode;

/**
 * グループコード Repository
 * 
 */
class GroupCodeRepository implements GroupCodeRepositoryInterface
{
     /**
     * グループコードを取得
     * 
     * @return Collection 役職コード
     */
    public function getAll()
    {
        return GroupCode::get();
    }
}