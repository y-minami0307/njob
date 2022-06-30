<?php

namespace App\Repositorys\Codes\AffiliationCode;

/**
 * 所属コード RepositoryInterface
 * 
 */
interface AffiliationCodeRepositoryInterface
{
    /**
     * 所属コードを取得
     * 
     * @return Collection 所属コード
     */
    public function getAll();

    /**
     * 所属IDに一致する部門を取得
     * 
     * @param int id 所属ID
     * @return AffiliationCode 所属コード
     */
    public function getDepartmentsFindById($id);
}