<?php

namespace Database\Seeders\SetUp;

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
            DepartmentCodeSeeder::class,
            GroupCodeSeeder::class,
            PositionCodeSeeder::class,
        ]);
    }
}
