<?php

namespace App\View\Components\Maints\Users;

use Illuminate\View\Component;

use App\Models\Masters\User;

/**
 * ユーザ作成/編集 Component
 * 
 */
class UserInput extends Component
{
    /**
     * ユーザID
     * 
     * @var int id
     */
    public readonly int $id;

    /**
     * ユーザ名
     * 
     * @var string user_name
     */
    public readonly string $user_name;

    /**
     * メールアドレス
     * 
     * @var string email
     */
    public readonly string $email;

    /**
     * 所属コード
     * 
     * @var int affiliation_code
     */
    public readonly int $affiliation_code;

    /**
     * 部門コード
     * 
     * @var int department_code
     */
    public readonly int $department_code;

    /**
     * グループコード
     * 
     * @var int group_code
     */
    public readonly int $group_code;

    /**
     * 役職コード
     * 
     * @var int position_code
     */
    public readonly int $position_code;

    /**
     * 名前
     * 
     * @var string personal_name
     */
    public readonly string $personal_name;

    /**
     * 名前カナ
     * 
     * @var string personal_name
     */
    public readonly string $personal_name_kana;

    /**
     * 電話番号
     * 
     * @var string phone_number
     */
    public readonly string $phone_number;

    /**
     * 携帯電話番号
     * 
     * @var string mobile_phone_number
     */
    public readonly string $mobile_phone_number;

    /**
     * 郵便番号
     * 
     * @var string post_number
     */
    public readonly string $post_number;

    /**
     * 住所
     * 
     * @var string address
     */
    public readonly string $address;

    /**
     * 管理者
     * 
     * @var int admin
     */
    public readonly int $admin;

    /**
     * __construct
     *
     * @param array<SelectItem> affiliationSelectItems 所属コード
     * @param array<SelectItem> position_select_items  役職コード
     * @param ?User user ユーザ
     * @return void
     */
    public function __construct(
        public readonly array $affiliationSelectItems,
        public readonly array $positionSelectItems,
        public readonly ?User $user
    )
    {
        if ($user == null)
        {
            $this->id = 0;
            $this->user_name = '';
            $this->email = '';
            $this->affiliation_code = \SelectBoxConst::BLANK_VALUE;
            $this->department_code = \SelectBoxConst::BLANK_VALUE;
            $this->group_code = \SelectBoxConst::BLANK_VALUE;
            $this->position_code = \SelectBoxConst::BLANK_VALUE;
            $this->personal_name = '';
            $this->personal_name_kana = '';
            $this->phone_number = '';
            $this->mobile_phone_number = '';
            $this->post_number = '';
            $this->address = '';
            $this->admin = \UserConst::UN_CHECKED_VALUE_ADMIN;
        }
        else
        {
            $this->id = $user->id;
            $this->user_name = $user->name;
            $this->email = $user->email;
            $this->affiliation_code = $user->affiliation_code_id;
            $this->department_code = $user->department_code_id;
            $this->group_code = $user->group_code_id;
            $this->position_code = $user->position_code_id;
            $this->personal_name = $user->personal_name;
            $this->personal_name_kana = $user->personal_name_kana;
            $this->phone_number = $user->phone_number;
            $this->mobile_phone_number = $user->mobile_phone_number;
            $this->post_number = $user->post_number;
            $this->address = $user->address;
            $this->admin = $user->admin;
        }
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
