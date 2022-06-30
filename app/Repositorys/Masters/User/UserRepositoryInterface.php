<?php

namespace App\Repositorys\Masters\User;

/**
 * ユーザ RepositoryInterface
 * 
 */
interface UserRepositoryInterface
{
    /**
     * ユーザを主キーで抽出し取得
     * 
     * @return App\Models\Masters\User ユーザ
     */
    public function findById($id);

    /**
     * 検索条件に一致するユーザを抽出し取得
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
     * @return Collection ユーザ
     */
    public function findByConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin);

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
     * @return User ユーザ
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
     * @return User ユーザ
     */
    public function save(
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