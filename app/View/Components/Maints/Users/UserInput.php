<?php

namespace App\View\Components\Maints\Users;

use Illuminate\View\Component;

/**
 * ユーザ作成/編集 Component
 * 
 */
class UserInput extends Component
{
    /**
     * __construct
     *
     * @param array<SelectItem> departmentSelectItems 部門コード
     * @param array<SelectItem> position_select_items 役職コード
     * @return void
     */
    public function __construct(public readonly array $departmentSelectItems, public readonly array $positionSelectItems)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.maints.users.user-input');
    }
}
