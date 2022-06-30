<?php

namespace App\Repositorys\Codes\GroupCode;

/**
 * グループコード RepositoryInterface
 * 
 */
interface GroupCodeRepositoryInterface
{
    /**
     * グループコードを取得
     * 
     * @return Collection グループコード
     */
    public function getAll();
}