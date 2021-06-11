<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('ja_JP');
        for ($i=0; $i < 1000; $i++) { 
            $params = $this->createData();
            DB::table('student')->insert($params);
        }
    }

    public function createData() {
        $faker = Factory::create('ja_JP');
        for ($i=0; $i < 10000; $i++) { 
            $params[] = [ 
                'role' => (string) rand(1, 12),
                'name' => $faker->name(),
            ];
        }
        return $params;
    } //
}
