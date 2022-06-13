<?php

namespace Database\Seeders\SetUp;

use Illuminate\Database\Seeder;
use App\Models\Codes\PositionCode;

/**
 * 役職コード Seeder
 * 
 */
class PositionCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // サブリーダー
        PositionCode::create([
            'name' => 'サブリーダー',
            'abbreviation' => 'SL',
        ]);

        // リーダー
        PositionCode::create([
            'name' => 'リーダー',
            'abbreviation' => 'L',
        ]);

        // グループマネージャー
        PositionCode::create([
            'name' => 'グループマネージャー',
            'abbreviation' => 'GM',
        ]);

        // マネージャー
        PositionCode::create([
            'name' => 'マネージャー',
            'abbreviation' => 'M',
        ]);

        // 部長
        PositionCode::create([
            'name' => '部長',
            'abbreviation' => 'B',
        ]);

        // 取締役
        PositionCode::create([
            'name' => '取締役',
        ]);

        // 常務
        PositionCode::create([
            'name' => '常務',
        ]);

        // 専務
        PositionCode::create([
            'name' => '専務',
        ]);

        // 副社長
        PositionCode::create([
            'name' => '副社長',
        ]);

        // 社長
        PositionCode::create([
            'name' => '社長',
        ]);

        // 会長
        PositionCode::create([
            'name' => '会長',
        ]);
    }
}
