<?php

namespace App\Http\Requests\Maints;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザー作成/編集ページ FormRequest
 * 
 */
class UserRequest extends FormRequest
{
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
     * ユーザー作成/編集ページで使用するルールを定義
     *
     * @return array
     */
    public function rules()
    {
        return [
            // ユーザ名：必須,半角英数字のみ,20桁以内
            'user_name' => ['required', 'half_width_character', 'max:20'],
            // メールアドレス：必須,メールアドレスの形式,255桁以内
            'email' => ['required', 'string', 'email', 'max:255'],
            // パスワード：必須,8桁以上,確認入力と一致するか
            'password' => ['required', 'min:8', 'confirmed'],
            // 部門ID：数値
            'department_code_id' => ['integer'],
            // グループID：数値
            'group_code_id' => ['integer'],
            // 役職ID：数値
            'position_code_id' => ['integer'],
            // 名前：文字列、50桁以内
            'personal_name' => ['nullable', 'string', 'max:50'],
            // 名前カナ：文字列、100桁以内
            'personal_name_kana' => ['nullable', 'string', 'max:100'],
            // 電話番号：数値、10桁以内
            'phone_number' => ['nullable', 'integer', 'max:10'],
            // 携帯電話番号：数値、10桁以内
            'mobile_phone_number' => ['nullable', 'integer', 'max:11'],
            // 郵便番号：数値、7桁以内
            'post_number' => ['nullable', 'integer', 'max:7'],
            // 住所：文字列、7桁以内
            'address' => ['nullable', 'string', 'max:255'],
        ];
    }
}
