<?php

namespace App\Repositorys\Masters\User;

use Illuminate\Support\Facades\Hash;
use App\Models\Masters\User;

/**
 * ユーザ Repository
 * 
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * ユーザを主キーで抽出し取得
     * 
     * @return App\Models\Masters\User ユーザ
     */
    public function findById($id)
    {
        return User::find($id);
    }

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
    public function findByConditions($user_id, $user_name, $email, $affiliation_code, $department_code, $group_code, $position_code, $personal_name, $admin)
    {
        $query = User::query();

        $query->with([
            'affiliationCode',
            'departmentCode',
            'groupCode',
            'positionCode'
        ]);

        // ユーザID
        if (\AppUtil::isNullOrBlank($user_id) == false) $query->whereId($user_id);

        // ユーザ名
        if (\AppUtil::isNullOrBlank($user_name) == false) $query->whereUserName($user_name);

        // メールアドレス
        if (\AppUtil::isNullOrBlank($email) == false) $query->whereEmail($email);

        // 所属コード
        if ($affiliation_code !== 0) $query->whereAffiliationCodeId($affiliation_code);

        // 部門コード
        if ($department_code !== 0) $query->whereDepartmentCodeId($department_code);

        // グループコード
        if ($group_code !== 0) $query->whereGroupCodeId($group_code);

        // 役職コード
        if ($position_code !== 0) $query->wherePositionCodeId($position_code);

        // 名前
        if (\AppUtil::isNullOrBlank($personal_name) == false) $query->wherePersonalName($personal_name);

        // 管理者
        if ($admin !== 0) $query->whereAdmin($admin);

        return $query->get();
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
    )
    {
        return User::create([
            'name' => $user_name,
            'email' => $email,
            'password' => Hash::make($password),
            'affiliation_code_id' => $affiliation_code,
            'department_code_id' => $department_code,
            'group_code_id' => $group_code,
            'position_code_id' => $position_code,
            'personal_name' => $personal_name,
            'personal_name_kana' => $personal_name_kana,
            'phone_number' => $phone_number,
            'mobile_phone_number' => $mobile_phone_number,
            'post_number' => $post_number,
            'address' => $address,
            'admin' => $admin
        ]);
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
    )
    {
        $user->name = $user_name;
        $user->email = $email;
        $user->affiliation_code_id = $affiliation_code;
        $user->department_code_id = $department_code;
        $user->group_code_id = $group_code;
        $user->position_code_id = $position_code;
        $user->personal_name = $personal_name;
        $user->personal_name_kana = $personal_name_kana;
        $user->phone_number = $phone_number;
        $user->mobile_phone_number = $mobile_phone_number;
        $user->post_number = $post_number;
        $user->address = $address;
        $user->admin = $admin;
        $user->save();
        return $user;
    }
}