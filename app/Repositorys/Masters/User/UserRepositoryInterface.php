<?php

namespace App\Repositorys\Masters\User;

/**
 * ユーザ RepositoryInterface
 * 
 */
interface UserRepositoryInterface
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
    );
}