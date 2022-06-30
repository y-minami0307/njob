<?php

namespace App\Models\Masters;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * ユーザ Model
 * 
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use \App\Traits\Relations\BelongsTos\AffiliationCode;
    use \App\Traits\Relations\BelongsTos\DepartmentCode;
    use \App\Traits\Relations\BelongsTos\GroupCode;
    use \App\Traits\Relations\BelongsTos\PositionCode;

    /**
     * 登録/更新を許可するカラム
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'affiliation_code_id',
        'department_code_id',
        'group_code_id',
        'position_code_id',
        'personal_name',
        'personal_name_kana',
        'phone_number',
        'mobile_phone_number',
        'post_number',
        'address',
        'admin',
    ];

    /**
     * 取得不可とするカラム
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 型変換の定義
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 名前 アクセサ
     * 
     * @param string value 名前
     * @return string 名前
     */
    public function getPersonalNameAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }

    /**
     * 名前カナ アクセサ
     * 
     * @param string value 名前カナ
     * @return string 名前カナ
     */
    public function getPersonalNameKanaAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }

    /**
     * 電話番号 アクセサ
     * 
     * @param string value 電話番号
     * @return string 電話番号
     */
    public function getPhoneNumberAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }

    /**
     * 携帯電話番号 アクセサ
     * 
     * @param string value 携帯電話番号
     * @return string 携帯電話番号
     */
    public function getMobilePhoneNumberAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }

    /**
     * 郵便番号 アクセサ
     * 
     * @param string value 郵便番号
     * @return string 郵便番号
     */
    public function getPostNumberAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }

    /**
     * 住所 アクセサ
     * 
     * @param string value 住所
     * @return string 住所
     */
    public function getAddressAttribute($value)
    {
        return \AppUtil::convertNullToString($value);
    }
}
