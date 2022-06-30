<?php

namespace Database\Seeders\SetUp\Groups;

use Illuminate\Database\Seeder;
use App\Models\Groups\AffiliationDepartment;

/**
 * 所属部門 Seeder
 * 
 */
class AffiliationDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 本社-人事部
        AffiliationDepartment::create(['id' => 1, 'affiliation_code_id' => 1, 'department_code_id' => 1,]);

        // 本社-経理部
        AffiliationDepartment::create(['id' => 2, 'affiliation_code_id' => 1, 'department_code_id' => 2,]);

        // 本社-総務部
        AffiliationDepartment::create(['id' => 3, 'affiliation_code_id' => 1, 'department_code_id' => 3,]);

        // 本社-情報システム部
        AffiliationDepartment::create(['id' => 4, 'affiliation_code_id' => 1, 'department_code_id' => 4,]);

        // 本社-営業部
        AffiliationDepartment::create(['id' => 5, 'affiliation_code_id' => 1, 'department_code_id' => 5,]);

        // 福岡事業所-人事部
        AffiliationDepartment::create(['id' => 6, 'affiliation_code_id' => 2, 'department_code_id' => 1,]);

        // 福岡事業所-経理部
        AffiliationDepartment::create(['id' => 7, 'affiliation_code_id' => 2, 'department_code_id' => 2,]);

        // 福岡事業所-総務部
        AffiliationDepartment::create(['id' => 8, 'affiliation_code_id' => 2, 'department_code_id' => 3,]);

        // 福岡事業所-情報システム部
        AffiliationDepartment::create(['id' => 9, 'affiliation_code_id' => 2, 'department_code_id' => 4,]);
    }
}
