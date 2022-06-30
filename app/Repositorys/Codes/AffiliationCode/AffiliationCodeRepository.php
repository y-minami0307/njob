<?php

namespace App\Repositorys\Codes\AffiliationCode;

use App\Models\Codes\AffiliationCode;

/**
 * 所属コード Repository
 * 
 */
class AffiliationCodeRepository implements AffiliationCodeRepositoryInterface
{
    /**
     * 所属コードを取得
     * 
     * @return Collection 所属コード
     */
    public function getAll()
    {
        return AffiliationCode::get();
    }

    /**
     * 所属IDに一致する部門を取得
     * 
     * @param int id 所属ID
     * @return AffiliationCode 所属コード
     */
    public function getDepartmentsFindById($id)
    {
        return AffiliationCode::with('departmentCodes')->find($id);
    }
}