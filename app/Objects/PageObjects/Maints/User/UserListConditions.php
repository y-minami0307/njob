<?php

namespace App\Objects\PageObjects\Maints\User;

/**
 * ユーザ管理 検索条件
 * 
 */
class UserListConditions
{
     /**
     * __construct
     * 
     * @param array<SelectItem> affiliation_select_items 所属コード
     * @param array<SelectItem> department_select_items  部門コード
     * @param array<SelectItem> group_select_items       グループコード
     * @param array<SelectItem> position_codes           役職コード
     * @param string user_id ユーザID
     * @param string user_name ユーザ名
     * @param string email メールアドレス
     * @param int    affiliation_code 所属コード
     * @param int    department_code 部門コード
     * @param int    group_code グループコード
     * @param int    position_code 役職コード
     * @param string personal_name 名前
     * @param int    admin 管理者
     */
    public function __construct(
        public readonly array $affiliation_select_items,
        public readonly array $department_select_items,
        public readonly array $group_select_items,
        public readonly array $position_select_items,
        public readonly string $user_id = '',
        public readonly string $user_name = '',
        public readonly string $email = '',
        public readonly int $affiliation_code = 0,
        public readonly int $department_code = 0,
        public readonly int $group_code = 0,
        public readonly int $position_code = 0,
        public readonly string $personal_name = '',
        public readonly int $admin = 0
    )
    {

    }
}