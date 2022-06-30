<?php

namespace App\Objects\PageObjects\Maints\User;

use App\Models\Masters\User;

/**
 * ユーザ管理 作成/編集 ページデータ
 * 
 */
class UserInput
{
    /**
     * __construct
     * 
     * @param array<SelectItem> affiliation_select_items 所属コード
     * @param array<SelectItem> position_codes           役職コード
     * @param User user ユーザ
     */
    public function __construct(
        public readonly array $affiliation_select_items,
        public readonly array $position_select_items,
        public readonly ?User $user = null
    )
    {

    }
}