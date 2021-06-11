<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TeacherSeeder extends Seeder
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
            DB::table('teacher')->insert($params);
        }
    }

    public function createData() {
        $faker = Factory::create('ja_JP');
        for ($i=0; $i < 10000; $i++) { 
            $params[] = [ 
                'position' => (string) rand(1, 12),
                'name' => $faker->name(),
            ];
        }
        return $params;
    } //
}
