<?php

namespace App\Facades;

use App\Objects\Commons\SelectItem;
use App\Repositorys\Codes\DepartmentCode\DepartmentCodeRepositoryInterface;

/**
 * 部門 共通処理
 * 
 */
class DepartmentUtil
{
    /**
     * 部門コード RepositoryInterface
     * 
     * @var DepartmentCodeRepositoryInterface 部門コード RepositoryInterface
     */
    private $department_code_repository;

    /**
     * __construct
     * 
     * @param DepartmentCodeRepositoryInterface department_code_repository 部門コード RepositoryInterface
     */
    public function __construct(DepartmentCodeRepositoryInterface $department_code_repository)
    {
        $this->department_code_repository = $department_code_repository;
    }

    /**
     * 部門コードを設定したSelectItemクラスを配列で返却
     * 
     * @return array<SelectItem> 部門コードSelectItemクラス配列
     */
    public function getSelectItems()
    {
        $select_items = array();

        // 部門コードを取得し設定
        $department_codes = $this->department_code_repository->getAll();
        foreach ($department_codes as $department_code)
        {
            $select_items[] = new SelectItem($department_code->id, $department_code->name);
        }

        return $select_items;
    }
}