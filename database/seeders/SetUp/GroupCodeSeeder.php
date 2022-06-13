<?php

namespace Database\Seeders\SetUp;

use Illuminate\Database\Seeder;
use App\Models\Codes\GroupCode;

/**
 * グループコード Seeder
 * 
 */
class GroupCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 第１開発グループ
        GroupCode::create([
            'name' => '第１開発グループ',
            'abbreviation' => '第１開',
            'department_code_id' => 4,
        ]);

        // 第２開発グループ
        GroupCode::create([
            'name' => '第２開発グループ',
            'abbreviation' => '第２開',
            'department_code_id' => 4,
        ]);

        // 第３開発グループ
        GroupCode::create([
            'name' => '第３開発グループ',
            'abbreviation' => '第３開',
            'department_code_id' => 4,
        ]);

        // インフラグループ
        GroupCode::create([
            'name' => 'インフラグループ',
            'department_code_id' => 4,
        ]);
    }
}
