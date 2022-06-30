<?php

namespace App\Facades;

use App\Objects\Commons\SelectItem;
use App\Repositorys\Groups\AffiliationDepartment\AffiliationDepartmentRepositoryInterface;

/**
 * 所属部門 共通処理
 * 
 */
class AffiliationDepartmentUtil
{
    /**
     * 所属部門 RepositoryInterface
     * 
     * @var AffiliationDepartmentRepositoryInterface 所属部門 RepositoryInterface
     */
    private $affiliation_department_repository;

    /**
     * __construct
     * 
     * @param AffiliationDepartmentRepositoryInterface affiliation_code_repository 所属部門 RepositoryInterface
     */
    public function __construct(AffiliationDepartmentRepositoryInterface $affiliation_department_repository)
    {
        $this->affiliation_department_repository = $affiliation_department_repository;
    }

    /**
     * 所属IDに一致する部門のグループを取得
     * 
     * @param string affiliation_id 所属ID
     * @param string department_id  部門ID
     * @return AffiliationDepartment 所属部門
     */
    public function getGroupsFindByAffiliationDepartment($affiliation_id, $department_id)
    {
        // 所属部門を取得
        $affiliation_department = $this->affiliation_department_repository->findByAffiliationDepartment($affiliation_id, $department_id);

        return $this->affiliation_department_repository->getGroupsFindById($affiliation_department->id);
    }
}