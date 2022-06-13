<?php

namespace App\Services\User;

/**
 * ユーザ ServiceInterface
 * 
 */
interface UserServiceInterface
{
    /**
     * ユーザ作成ページに表示するデータを返却
     * 
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getCreatePageDatas();

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