<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * ユーザ Migration
 * 
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // ユーザID
            $table->id();
            // ユーザ名
            $table->string('name')->length(20)->unique();
            // メールアドレス
            $table->string('email')->unique();
            // メールアドレス確認日時
            $table->timestamp('email_verified_at')->nullable();
            // パスワード
            $table->string('password');
            // RememberToken
            $table->rememberToken();
            // 所属ID
            $table->integer('affiliation_code_id')->default(0);
            // 部門ID
            $table->integer('department_code_id')->default(0);
            // グループID
            $table->integer('group_code_id')->default(0);
            // 役職ID
            $table->integer('position_code_id')->default(0);
            // 名前
            $table->string('personal_name')->length(50)->nullable();
            // 名前カナ
            $table->string('personal_name_kana')->length(100)->nullable();
            // 電話番号
            $table->string('phone_number')->length(10)->nullable();
            // 携帯電話番号
            $table->string('mobile_phone_number')->length(11)->nullable();
            // 郵便番号
            $table->string('post_number')->length(7)->nullable();
            // 住所
            $table->string('address')->length(255)->nullable();
            // 管理者
            $table->boolean('admin')->default(0);
            // タイムスタンプ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
