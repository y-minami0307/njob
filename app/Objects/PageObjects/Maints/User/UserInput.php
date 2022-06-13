<?php

namespace App\Objects\PageObjects\Maints\User;

use Illuminate\Database\Eloquent\Collection;

/**
 * ユーザ管理 作成/編集 ページデータ
 * 
 */
class UserInput
{
    /**
     * __construct
     * 
     * @param array<SelectItem> department_select_items 部門コード
     * @param array<SelectItem> position_codes 役職コード
     */
    public function __construct(public readonly array $department_select_items, public readonly array $position_select_items)
    {

    }
}