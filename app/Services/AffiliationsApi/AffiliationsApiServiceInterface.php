<?php

namespace App\Services\AffiliationsApi;

/**
 * 所属 API ServiceInterface
 * 
 */
interface AffiliationsApiServiceInterface
{
    /**
     * 所属IDに一致する部門を取得
     * 
     * @param int id 所属ID
     * @return Departments 部門一覧
     */
    public function getDepartmentsFindById($id);

    /**
     * 所属IDに一致する部門のグループを取得
     * 
     * @param string affiliation_id 所属ID
     * @param string department_id  部門ID
     * @return Groups グループ一覧
     */
    public function getGroupsFindByAffiliationDepartment($affiliation_id, $department_id);
}