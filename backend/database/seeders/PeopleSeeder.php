<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('ja_JP');
        for ($x=0; $x < 100000; $x++) {
            $params = $this->createData();
            DB::table('people')->insert($params['people']);
            DB::table('player')->insert($params['player']);
            DB::table('manager')->insert($params['manager']);
        }
    }

    public function createData() {
        $faker = Factory::create('ja_JP');
        for ($i=0; $i < 10000; $i++) {
            $uuid = (string) uniqid();
            $params['people'] = [
                'people_id' => $uuid,
                'name' => $faker->name(),
            ];
            $params['player'] = [
                'people_id' => $uuid,
                'position_id' => (string) rand(1, 9),
            ];
            $params['manager'] = [
                'people_id' => $uuid,
                'role' => (string) rand(1, 9),
            ];
        }
        return $params;
    }
}
