<?php

namespace App\Repositorys\Codes\GroupCode;

/**
 * グループコード RepositoryInterface
 * 
 */
interface GroupCodeRepositoryInterface
{
    /**
     * 部門IDに一致するグループコードを取得
     * 
     * @param int department_id 部門ID
     * @return Collection グループコード
     */
    public function getGroupsFindByDepartment($department_id);
}