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
     * 部門IDに一致するグループコードを取得
     * 
     * @param int department_id 部門ID
     * @return Collection グループコード
     */
    public function getGroupsFindByDepartment($department_id)
    {
        return GroupCode::whereDepartmentCodeId($department_id)->get();
    }
}