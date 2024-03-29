<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 所属部門 Migration
 * 
 */
class CreateAffiliationDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliation_departments', function (Blueprint $table) {
            // 所属部門ID
            $table->id();
            // 所属ID
            $table->integer('affiliation_code_id')->default(0);
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
        Schema::dropIfExists('affiliation_departments');
    }
}
