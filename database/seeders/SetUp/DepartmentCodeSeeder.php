<?php

namespace Database\Seeders\SetUp;

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
            'name' => '人事部',
        ]);

        // 経理部
        DepartmentCode::create([
            'name' => '経理部',
        ]);

        // 総務部
        DepartmentCode::create([
            'name' => '総務部',
        ]);

        // 情報システム部
        DepartmentCode::create([
            'name' => '情報システム部',
        ]);

        // 営業部
        DepartmentCode::create([
            'name' => '営業部',
        ]);
    }
}
