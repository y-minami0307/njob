<?php

namespace App\Repositorys\Groups\AffiliationDepartment;

/**
 * 所属部門 RepositoryInterface
 * 
 */
interface AffiliationDepartmentRepositoryInterface
{
    /**
     * 所属部門を取得
     * 
     * @param string affiliation_id 所属ID
     * @param string department_id  部門ID
     * @return AffiliationDepartment 所属部門
     */
    public function findByAffiliationDepartment($affiliation_id, $department_id);

    /**
     * 所属部門IDに一致するグループを取得
     * 
     * @param int id 所属部門ID
     * @return AffiliationDepartment 所属部門
     */
    public function getGroupsFindById($id);
}