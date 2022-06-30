<?php

namespace App\Services\User;

use App\Objects\PageObjects\Maints\User\UserInput;
use App\Objects\PageObjects\Maints\User\UserList;
use App\Objects\PageObjects\Maints\User\UserListConditions;
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
     * ユーザを取得
     * 
     * @param int id ユーザID
     * @return App\Models\Masters\User ユーザ
     */
    public function getUser($id)
    {
        try
        {   
            return $this->user_repository->findById($id);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ管理ページに表示するデータを返却
     * 
     * @return UserList ユーザ管理ページ用のオブジェクト
     */
    public function getIndexPageDatas()
    {
        try
        {   
            // ユーザ管理ページ検索条件用のオブジェクトを取得
            $conditions = $this->getUserListConditions();

            return $this->getUserList($conditions);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ管理ページに表示するデータを検索し取得
     * 
     * @param string user_id          ユーザID
     * @param string user_name        ユーザ名
     * @param string email            メールアドレス
     * @param int    affiliation_code 所属コード
     * @param int    department_code  部門コード
     * @param int    group_code       グループコード
     * @param int    position_code    役職コード
     * @param string personal_name    名前
     * @param int    admin            管理者
     * @return UserList ユーザ管理ページ用のオブジェクト
     */
    public function getSearchPageDatas($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin)
    {
        try
        {
            // ユーザ管理ページ検索条件用のオブジェクトを取得
            $conditions = $this->getUserListConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);

            // 検索条件に一致するユーザを取得
            $users = $this->getUsersFindByConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);

            // ユーザページネーションデータを取得
            $user_list = \UserUtil::getLengthAwarePaginator($users);

            return $this->getUserList($conditions, $user_list);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ作成/編集ページに表示するデータを返却
     * 
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getCreatePageDatas()
    {
        try
        {   
            return $this->getUserInput();
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザを作成
     * 
     * @param string user_name           ユーザ名
     * @param string email               メールアドレス
     * @param string password            パスワード
     * @param int    affiliation_code    所属コード
     * @param int    department_code     部門コード
     * @param int    group_code          グループコード
     * @param int    position_code       役職コード
     * @param string personal_name       名前
     * @param string personal_name_kana  名前カナ
     * @param string phone_number        電話番号
     * @param string mobile_phone_number 携帯電話番号
     * @param string post_number         郵便番号
     * @param string address             住所
     * @param int    admin               管理者
     * @return int ユーザID
     */
    public function create(
        $user_name,
        $email,
        $password,
        $affiliation_code,
        $department_code,
        $group_code,
        $position_code,
        $personal_name,
        $personal_name_kana,
        $phone_number,
        $mobile_phone_number,
        $post_number,
        $address,
        $admin
    )
    {
        try
        {
            // ユーザ作成を実行
            $user = $this->user_repository->create(
                $user_name,
                $email,
                $password,
                $affiliation_code,
                $department_code,
                $group_code,
                $position_code,
                $personal_name,
                $personal_name_kana,
                $phone_number,
                $mobile_phone_number,
                $post_number,
                $address,
                $admin
            );

            return $user->id;
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ編集ページに表示するデータを返却
     * 
     * @param App\Models\Masters\User user ユーザ
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getUpdatePageDatas($user)
    {
        try
        {
            return $this->getUserInput($user);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザを更新
     * 
     * @param User   user                ユーザ
     * @param string user_name           ユーザ名
     * @param string email               メールアドレス
     * @param int    affiliation_code    所属コード
     * @param int    department_code     部門コード
     * @param int    group_code          グループコード
     * @param int    position_code       役職コード
     * @param string personal_name       名前
     * @param string personal_name_kana  名前カナ
     * @param string phone_number        電話番号
     * @param string mobile_phone_number 携帯電話番号
     * @param string post_number         郵便番号
     * @param string address             住所
     * @param int    admin               管理者
     * @return void
     */
    public function update(
        $user,
        $user_name,
        $email,
        $affiliation_code,
        $department_code,
        $group_code,
        $position_code,
        $personal_name,
        $personal_name_kana,
        $phone_number,
        $mobile_phone_number,
        $post_number,
        $address,
        $admin
    )
    {
        try
        {
            // ユーザ更新を実行
            $this->user_repository->save(
                $user,
                $user_name,
                $email,
                $affiliation_code,
                $department_code,
                $group_code,
                $position_code,
                $personal_name,
                $personal_name_kana,
                $phone_number,
                $mobile_phone_number,
                $post_number,
                $address,
                $admin
            );
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ管理ページ用のオブジェクトを生成し返却
     * 
     * @param UserListConditions   conditions 検索条件用のオブジェクト
     * @param LengthAwarePaginator user_list  ユーザページネーションデータ
     * @param UserList ユーザ管理ページ用のオブジェクト
     */
    private function getUserList($conditions, $user_list = null)
    {
        try
        {
            return new UserList($conditions, $user_list);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ管理ページ検索条件用のオブジェクトを生成し返却
     * 
     * @param string user_id          ユーザID
     * @param string user_name        ユーザ名
     * @param string email            メールアドレス
     * @param int    affiliation_code 所属コード
     * @param int    department_code  部門コード
     * @param int    group_code       グループコード
     * @param int    position_code    役職コード
     * @param string personal_name    名前
     * @param int    admin 管理者
     * @return UserListConditions ユーザ管理ページ検索条件用のオブジェクト
     */
    private function getUserListConditions(
        $user_id = '',
        $user_name = '',
        $email = '',
        $affiliation_code = 0,
        $department_code = 0,
        $group_code = 0,
        $position_code = 0,
        $personal_name = '',
        $admin = 0
    )
    {
        try
        {
            // 所属コードを設定したSelectItemクラスを配列で取得
            $affiliation_select_items = \AffiliationUtil::getSelectItems();

            // 部門コードを設定したSelectItemクラスを配列で取得
            $department_select_items = \DepartmentUtil::getSelectItems();

            // グループコードを設定したSelectItemクラスを配列で取得
            $group_select_items = \GroupUtil::getSelectItems();

            // 役職コードを設定したSelectItemクラスを配列で取得
            $position_select_items = \PositionUtil::getSelectItems();

            return new UserListConditions(
                $affiliation_select_items,
                $department_select_items,
                $group_select_items,
                $position_select_items,
                \AppUtil::convertNullToString($user_id),
                \AppUtil::convertNullToString($user_name),
                \AppUtil::convertNullToString($email),
                $affiliation_code,
                $department_code,
                $group_code,
                $position_code,
                \AppUtil::convertNullToString($personal_name),
                $admin
            );
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * 検索条件に一致するユーザを取得
     * 
     * @param string user_id ユーザID
     * @param string user_name ユーザ名
     * @param string email メールアドレス
     * @param int    affiliation_code 所属コード
     * @param int    department_code 部門コード
     * @param int    group_code グループコード
     * @param int    position_code 役職コード
     * @param string personal_name 名前
     * @param int    admin 管理者
     * @return LengthAwarePaginator ユーザ
     */
    private function getUsersFindByConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin)
    {
        try
        {
            if (\AppUtil::isNullOrBlank($user_id) == false)
            {
                if (is_numeric($user_id))
                {
                    // 値がNULLまたは空文字でなく数値の場合は先頭についている可能性のある0を削除して設定
                    $user_id = (string)(int)$user_id;
                }
            }

            // 検索条件に一致するユーザを取得
            return $this->user_repository->findByConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    /**
     * ユーザ作成/編集ページ用のオブジェクトを生成し返却
     * 
     * @param App\Models\Masters\User user ユーザ
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    private function getUserInput($user = null)
    {
        try
        {
            // 所属コードを設定したSelectItemクラスを配列で取得
            $affiliation_select_items = \AffiliationUtil::getSelectItems();

            // 役職コードを設定したSelectItemクラスを配列で取得
            $position_select_items = \PositionUtil::getSelectItems();

            return new UserInput($affiliation_select_items, $position_select_items, $user);
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }
}