<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * グループコード Migration
 * 
 */
class CreateGroupCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_codes', function (Blueprint $table) {
            // グループID
            $table->id();
            // グループ名
            $table->string('name')->length(15);
            // 略称
            $table->string('abbreviation')->length(5)->nullable();
            // 表示順
            $table->integer('sort_order')->default(0);
            // 部門ID
            $table->integer('department_code_id')->default(0);
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
        Schema::dropIfExists('group_codes');
    }
}
