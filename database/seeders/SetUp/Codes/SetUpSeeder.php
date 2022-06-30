<?php

namespace Database\Seeders\SetUp\Codes;

use Illuminate\Database\Seeder;

class SetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AffiliationCodeSeeder::class,
            DepartmentCodeSeeder::class,
            GroupCodeSeeder::class,
            PositionCodeSeeder::class,
        ]);
    }
}
