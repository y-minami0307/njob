<?php

namespace App\Repositorys\Codes\DepartmentCode;

use App\Models\Codes\DepartmentCode;

/**
 * 部門コード Repository
 * 
 */
class DepartmentCodeRepository implements DepartmentCodeRepositoryInterface
{
    /**
     * 部門コードを取得
     * 
     * @return Collection 部門コード
     */
    public function getAll()
    {
        return DepartmentCode::get();
    }
}