<?php

namespace App\Objects\PageObjects\Maints\User;

use Illuminate\Pagination\LengthAwarePaginator;

/**
 * ユーザ管理 ページデータ
 * 
 */
class UserList
{
    /**
     * __construct
     * 
     * @param UserListConditions   conditions 検索条件
     * @param ?LengthAwarePaginator user_list ユーザページネーションデータ
     */
    public function __construct(
        public readonly UserListConditions $conditions, public readonly ?LengthAwarePaginator $user_list = null
    )
    {

    }
}