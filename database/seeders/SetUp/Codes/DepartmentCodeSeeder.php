<?php

namespace Database\Seeders\SetUp\Codes;

use Illuminate\Database\Seeder;
use App\Models\Codes\DepartmentCode;

/**
 * 部門コード Seeder
 * 
 */
class DepartmentCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 人事部
        DepartmentCode::create([
            'id' => 1,
            'name' => '人事部',
            'abbreviation' => '人事',
        ]);

        // 経理部
        DepartmentCode::create([
            'id' => 2,
            'name' => '経理部',
            'abbreviation' => '経理',
        ]);

        // 総務部
        DepartmentCode::create([
            'id' => 3,
            'name' => '総務部',
            'abbreviation' => '総務',
        ]);

        // 情報システム部
        DepartmentCode::create([
            'id' => 4,
            'name' => '情報システム部',
            'abbreviation' => '情シス',
        ]);

        // 営業部
        DepartmentCode::create([
            'id' => 5,
            'name' => '営業部',
            'abbreviation' => '営業',
        ]);
    }
}
