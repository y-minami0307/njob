<?php

namespace Database\Seeders\SetUp\Codes;

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
            'id' => 1,
            'name' => '第１開発グループ',
            'abbreviation' => '第１開',
        ]);

        // 第２開発グループ
        GroupCode::create([
            'id' => 2,
            'name' => '第２開発グループ',
            'abbreviation' => '第２開',
        ]);

        // 第３開発グループ
        GroupCode::create([
            'id' => 3,
            'name' => '第３開発グループ',
            'abbreviation' => '第３開',
        ]);

        // インフラグループ
        GroupCode::create([
            'id' => 4,
            'name' => 'インフラグループ',
            'abbreviation' => 'インフラ',
        ]);

        // ネットワークグループ
        GroupCode::create([
            'id' => 5,
            'name' => 'ネットワークグループ',
            'abbreviation' => 'NT',
        ]);
    }
}
