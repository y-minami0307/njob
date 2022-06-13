<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 部門コード Migration
 * 
 */
class CreateDepartmentCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_codes', function (Blueprint $table) {
            // 部門ID
            $table->id();
            // 部門名
            $table->string('name')->length(15)->unique();
            // 表示順
            $table->integer('sort_order')->default(0);
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
        Schema::dropIfExists('department_codes');
    }
}
