<?php

namespace App\Services\DepartmentApi;

/**
 * 部門 API ServiceInterface
 * 
 */
interface DepartmentApiServiceInterface
{
    /**
     * 部門IDに一致するグループを取得
     * 
     * @param int 部門ID
     * @return
     */
    public function getGroupsFindByDepartmentId($department_id);
}