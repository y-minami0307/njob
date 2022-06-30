<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 所属部門グループ Migration
 * 
 */
class CreateAffiliationDepartmentGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliation_department_groups', function (Blueprint $table) {
            // 所属部門グループID
            $table->id();
            // 所属部門ID
            $table->integer('affiliation_department_id')->default(0);
            // グループID
            $table->integer('group_code_id')->default(0);
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
        Schema::dropIfExists('affiliation_department_groups');
    }
}
