<?php

namespace Database\Seeders\SetUp\Groups;

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
            AffiliationDepartmentGroupSeeder::class,
            AffiliationDepartmentSeeder::class,
        ]);
    }
}
