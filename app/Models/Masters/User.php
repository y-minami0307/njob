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

    /**
     * 登録/更新を許可するカラム
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',     // ユーザ名
        'email',    // メールアドレス
        'password', // パスワード
    ];

    /**
     * 取得不可とするカラム
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',       // パスワード
        'remember_token', // RememberToken
    ];

    /**
     * 型変換の定義
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // メールアドレス確認日時
    ];
}
