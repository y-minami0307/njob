<?php

namespace App\Services\User;

use App\Objects\PageObjects\Maints\User\UserInput;
use App\Repositorys\Masters\User\UserRepositoryInterface;

/**
 * ユーザ Service
 * 
 */
class UserService implements UserServiceInterface
{
    /**
     * ユーザ RepositoryInterface
     * 
     * @var UserRepositoryInterface ユーザ RepositoryInterface
     */
    private $user_repository;

    /**
     * __construct
     * 
     * @param UserRepositoryInterface user_repository ユーザ RepositoryInterface
     */
    public function __construct(UserRepositoryInterface $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    /**
     * ユーザ作成/編集ページに表示するデータを返却
     * 
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getCreatePageDatas()
    {
        // 部門コードを設定したSelectItemクラスを配列で取得
        $department_select_items = \DepartmentUtil::getSelectItems();

        // 役職コードを設定したSelectItemクラスを配列で取得
        $position_select_items = \PositionUtil::getSelectItems();
        
        return new UserInput($department_select_items, $position_select_items);
    }

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
        // ユーザ作成を実行
        $this->user_repository->createUser(
            $user_name, $email, $password
        );
    }

    /**
     * ページ表示用のデータを返却
     * 
     */
    private function getDatas()
    {
        // 部門コード取得
        $department_codes = $this->department_code_repository->getDatas();

        
    }
}