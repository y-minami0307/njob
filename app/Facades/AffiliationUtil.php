<?php

namespace App\Facades;

use App\Objects\Commons\SelectItem;
use App\Repositorys\Codes\AffiliationCode\AffiliationCodeRepositoryInterface;

/**
 * 所属 共通処理
 * 
 */
class AffiliationUtil
{
    /**
     * 所属コード RepositoryInterface
     * 
     * @var AffiliationCodeRepositoryInterface 所属コード RepositoryInterface
     */
    private $affiliation_code_repository;

    /**
     * __construct
     * 
     * @param AffiliationCodeRepositoryInterface affiliation_code_repository 所属コード RepositoryInterface
     */
    public function __construct(AffiliationCodeRepositoryInterface $affiliation_code_repository)
    {
        $this->affiliation_code_repository = $affiliation_code_repository;
    }

    /**
     * 所属コードを設定したSelectItemクラスを配列で返却
     * 
     * @return array<SelectItem> 所属コードSelectItemクラス配列
     */
    public function getSelectItems()
    {
        $select_items = array();

        // 所属コードを取得し設定
        $affiliation_codes = $this->affiliation_code_repository->getAll();
        foreach ($affiliation_codes as $affiliation_code)
        {
            $select_items[] = new SelectItem($affiliation_code->id, $affiliation_code->name);
        }

        return $select_items;
    }

    /**
     * 所属IDに一致する部門を取得
     * 
     * @param int id 所属ID
     * @return AffiliationCode 所属コード
     */
    public function getDepartmentsFindById($id)
    {
        return $this->affiliation_code_repository->getDepartmentsFindById($id);
    }
}