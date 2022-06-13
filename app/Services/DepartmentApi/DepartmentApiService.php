<?php

namespace App\Services\DepartmentApi;

use App\Consts\SelectBoxConst;
use App\Jsons\DepartmentApi\Group;
use App\Jsons\DepartmentApi\Groups;
use App\Repositorys\Codes\GroupCode\GroupCodeRepositoryInterface;

/**
 * 部門 API Service
 * 
 */
class DepartmentApiService implements DepartmentApiServiceInterface
{
    /**
     * グループコード RepositoryInterface
     * 
     * @var GroupCodeRepositoryInterface グループコード RepositoryInterface
     */
    private $group_code_repository;

    /**
     * __construct
     * 
     * @param GroupCodeRepositoryInterface group_code_repository グループコード RepositoryInterface
     */
    public function __construct(
        GroupCodeRepositoryInterface $group_code_repository
    )
    {
        $this->group_code_repository = $group_code_repository;
    }

    /**
     * 部門IDに一致するグループを取得
     * 
     * @param int 部門ID
     * @return Groups
     */
    public function getGroupsFindByDepartmentId($department_id)
    {
        // グループコードを取得
        $group_codes = $this->group_code_repository->getGroupsFindByDepartment($department_id);

        // レスポンスデータを生成
        $groups = array();

        // 取得したグループコードを配列に設定
        foreach ($group_codes as $group_code)
        {
            $groups[] = new Group($group_code->id, $group_code->name, $group_code->abbreviation);
        }

        return new Groups($groups);
    }
}