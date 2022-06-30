<?php

namespace App\Services\User;

/**
 * ユーザ ServiceInterface
 * 
 */
interface UserServiceInterface
{
    /**
     * ユーザを取得
     * 
     * @param int id ユーザID
     * @return App\Models\Masters\User ユーザ
     */
    public function getUser($id);

    /**
     * ユーザ管理ページに表示するデータを返却
     * 
     * @return UserList ユーザ管理ページ用のオブジェクト
     */
    public function getIndexPageDatas();

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
    public function getSearchPageDatas($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);

    /**
     * ユーザ作成ページに表示するデータを返却
     * 
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getCreatePageDatas();

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
    );

    /**
     * ユーザ編集ページに表示するデータを返却
     * 
     * @param App\Models\Masters\User user ユーザ
     * @return UserInput ユーザ作成/編集ページ用のオブジェクト
     */
    public function getUpdatePageDatas($user);

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
    );
}