<?php

namespace App\Services\AffiliationsApi;

use App\Jsons\AffiliationsApi\Department;
use App\Jsons\AffiliationsApi\Departments;
use App\Jsons\AffiliationsApi\Group;
use App\Jsons\AffiliationsApi\Groups;

/**
 * 所属 API Service
 * 
 */
class AffiliationsApiService implements AffiliationsApiServiceInterface
{
    /**
     * 所属IDに一致する部門を取得
     * 
     * @param int id 所属ID
     * @return Departments 部門一覧
     */
    public function getDepartmentsFindById($id)
    {
        try
        {   
            // 所属IDに一致する部門を取得
            $affiliation = \AffiliationUtil::getDepartmentsFindById($id);

            // レスポンスデータを生成
            $departments = array();

            // 取得した部門コードを配列に設定
            foreach ($affiliation->departmentCodes as $department_code)
            {
                $departments[] = new Department($department_code->id, $department_code->name, $department_code->abbreviation);
            }

            return new Departments($departments);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * 所属IDに一致する部門のグループを取得
     * 
     * @param string affiliation_id 所属ID
     * @param string department_id  部門ID
     * @return Groups グループ一覧
     */
    public function getGroupsFindByAffiliationDepartment($affiliation_id, $department_id)
    {
        try
        {   
            // 所属IDに一致する部門のグループを取得
            $affiliation_department = \AffiliationDepartmentUtil::getGroupsFindByAffiliationDepartment($affiliation_id, $department_id);

            // レスポンスデータを生成
            $groups = array();

            // 取得したグループコードを配列に設定
            foreach ($affiliation_department->groupCodes as $group_code)
            {
                $groups[] = new Group($group_code->id, $group_code->name, $group_code->abbreviation);
            }

            return new Groups($groups);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }
}