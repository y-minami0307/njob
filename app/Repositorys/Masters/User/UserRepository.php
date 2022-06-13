<?php

namespace App\Repositorys\Masters\User;

use App\Models\Masters\User;

/**
 * ユーザ Repository
 * 
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * ユーザを作成
     * 
     * @param string user_name ユーザ名
     * @param string email     メールアドレス
     * @param string password  パスワード
     */
    public function createUser(
        $user_name, $email, $password
    )
    {

    }
}