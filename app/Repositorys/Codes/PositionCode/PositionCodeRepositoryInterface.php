<?php

namespace App\Repositorys\Codes\PositionCode;

/**
 * 役職コード RepositoryInterface
 * 
 */
interface PositionCodeRepositoryInterface
{
    /**
     * 役職コードを取得
     * 
     * @return Collection 役職コード
     */
    public function getAll();
}