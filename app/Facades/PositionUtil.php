<?php

namespace App\Facades;

use App\Objects\Commons\SelectItem;
use App\Repositorys\Codes\PositionCode\PositionCodeRepositoryInterface;

/**
 * 役職 共通処理
 * 
 */
class PositionUtil
{
    /**
     * 役職コード RepositoryInterface
     * 
     * @var PositionCodeRepositoryInterface 役職コード RepositoryInterface
     */
    private $position_code_repository;

    /**
     * __construct
     * 
     * @param PositionCodeRepositoryInterface position_code_repository 役職コード RepositoryInterface
     */
    public function __construct(PositionCodeRepositoryInterface $position_code_repository)
    {
        $this->position_code_repository = $position_code_repository;
    }

    /**
     * 役職コードを設定したSelectItemクラスを配列で返却
     * 
     * @return array<SelectItem> 役職コードSelectItemクラス配列
     */
    public function getSelectItems()
    {
        $select_items = array();

        // 役職コードを取得し設定
        $position_codes = $this->position_code_repository->getAll();
        foreach ($position_codes as $position_code)
        {
            $select_items[] = new SelectItem($position_code->id, $position_code->name);
        }

        return $select_items;
    }
}