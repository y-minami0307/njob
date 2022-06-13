<?php

namespace App\Repositorys\Codes\DepartmentCode;

/**
 * 部門コード RepositoryInterface
 * 
 */
interface DepartmentCodeRepositoryInterface
{
    /**
     * 部門コードを取得
     * 
     * @return Collection 部門コード
     */
    public function getAll();
}