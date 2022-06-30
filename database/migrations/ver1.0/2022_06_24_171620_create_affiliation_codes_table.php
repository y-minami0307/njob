<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 所属コード Migration
 * 
 */
class CreateAffiliationCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliation_codes', function (Blueprint $table) {
            // 所属ID
            $table->id();
            // 所属名
            $table->string('name')->length(15);
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
        Schema::dropIfExists('affiliation_codes');
    }
}
