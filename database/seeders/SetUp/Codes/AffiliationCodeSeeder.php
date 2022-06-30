<?php

namespace Database\Seeders\SetUp\Codes;

use Illuminate\Database\Seeder;
use App\Models\Codes\AffiliationCode;

/**
 * 所属コード Seeder
 * 
 */
class AffiliationCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 本社
        AffiliationCode::create([
            'id' => 1,
            'name' => '本社',
            'abbreviation' => '本社',
        ]);

        // 福岡事業センター
        AffiliationCode::create([
            'id' => 2,
            'name' => '福岡事業センター',
            'abbreviation' => '福岡',
        ]);
    }
}
