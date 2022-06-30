<?php

namespace App\Http\Requests\Maints;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザー編集ページ FormRequest
 * 
 */
class UserUpdateRequest extends FormRequest
{
    use \App\Traits\Rules\Address;
    use \App\Traits\Rules\Admin;
    use \App\Traits\Rules\AffiliationCode;
    use \App\Traits\Rules\DepartmentCode;
    use \App\Traits\Rules\GroupCode;
    use \App\Traits\Rules\MobilePhoneNumber;
    use \App\Traits\Rules\PersonalName;
    use \App\Traits\Rules\PersonalNameKana;
    use \App\Traits\Rules\PhoneNumber;
    use \App\Traits\Rules\PositionCode;
    use \App\Traits\Rules\PostNumber;
    use \App\Traits\Rules\UserEmail;
    use \App\Traits\Rules\UserName;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * ユーザー編集ページで使用するルールを定義
     *
     * @return array
     */
    public function rules()
    {
        return [
            // ユーザ名
            'user_name' => $this->getUserNameRules(),
            // メールアドレス
            'email' => $this->getUpdateUserEmailRules(),
            // 所属コード
            'affiliation_code' => $this->getAffiliationCodeRules(),
            // 部門コード
            'department_code' => $this->getDepartmentCodeRules(),
            // グループコード
            'group_code' => $this->getGroupCodeRules(),
            // 役職コード
            'position_code' => $this->getPositionCodeRules(),
            // 名前
            'personal_name' => $this->getPersonalNameRules(),
            // 名前カナ
            'personal_name_kana' => $this->getPersonalNameKanaRules(),
            // 電話番号
            'phone_number' => $this->getPhoneNumberRules(),
            // 携帯電話番号
            'mobile_phone_number' => $this->getMobilePhoneNumberRules(),
            // 郵便番号
            'post_number' => $this->getPostNumberRules(),
            // 住所
            'address' => $this->getAddressRules(),
            // 管理者
            'admin' => $this->getAdminRules(),
        ];
    }
}
