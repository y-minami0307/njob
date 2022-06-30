<?php

namespace Database\Seeders\SetUp\Groups;

use Illuminate\Database\Seeder;
use App\Models\Groups\AffiliationDepartmentGroup;

/**
 * 所属部門グループ Seeder
 * 
 */
class AffiliationDepartmentGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 本社-情報システム部-第１開発グループ
        AffiliationDepartmentGroup::create(['id' => 1, 'affiliation_department_id' => 4, 'group_code_id' => 1,]);

        // 本社-情報システム部-第２開発グループ
        AffiliationDepartmentGroup::create(['id' => 2, 'affiliation_department_id' => 4, 'group_code_id' => 2,]);

        // 本社-情報システム部-第３開発グループ
        AffiliationDepartmentGroup::create(['id' => 3, 'affiliation_department_id' => 4, 'group_code_id' => 3,]);

        // 本社-情報システム部-インフラグループ
        AffiliationDepartmentGroup::create(['id' => 4, 'affiliation_department_id' => 4, 'group_code_id' => 4,]);

        // 本社-情報システム部-ネットワークグループ
        AffiliationDepartmentGroup::create(['id' => 5, 'affiliation_department_id' => 4, 'group_code_id' => 5,]);

        // 福岡事業所-情報システム部-第１開発グループ
        AffiliationDepartmentGroup::create(['id' => 6, 'affiliation_department_id' => 9, 'group_code_id' => 1,]);

        //  福岡事業所-情報システム部-第２開発グループ
        AffiliationDepartmentGroup::create(['id' => 7, 'affiliation_department_id' => 9, 'group_code_id' => 2,]);

        //  福岡事業所-情報システム部-第３開発グループ
        AffiliationDepartmentGroup::create(['id' => 8, 'affiliation_department_id' => 9, 'group_code_id' => 3,]);
    }
}
