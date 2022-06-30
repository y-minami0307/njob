<?php

namespace App\Facades;

use App\Objects\Commons\SelectItem;
use App\Repositorys\Codes\GroupCode\GroupCodeRepositoryInterface;

/**
 * グループ 共通処理
 * 
 */
class GroupUtil
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
    public function __construct(GroupCodeRepositoryInterface $group_code_repository)
    {
        $this->group_code_repository = $group_code_repository;
    }

    /**
     * グループコードを設定したSelectItemクラスを配列で返却
     * 
     * @return array<SelectItem> グループコードSelectItemクラス配列
     */
    public function getSelectItems()
    {
        $select_items = array();

        // グループコードを取得し設定
        $group_codes = $this->group_code_repository->getAll();
        foreach ($group_codes as $group_code)
        {
            $select_items[] = new SelectItem($group_code->id, $group_code->name);
        }

        return $select_items;
    }
}