<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 役職コード Migration
 * 
 */
class CreatePositionCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_codes', function (Blueprint $table) {
            // 役職ID
            $table->id();
            // 役職名
            $table->string('name')->length(15)->unique();
            // 略称
            $table->string('abbreviation')->length(5)->nullable();
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
        Schema::dropIfExists('position_codes');
    }
}
