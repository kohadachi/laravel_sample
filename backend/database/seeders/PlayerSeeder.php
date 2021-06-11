<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PlayerSeeder extends Seeder
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
            DB::table('player')->insert($params);
        }
    }

    public function createData() {
        $faker = Factory::create('ja_JP');
        for ($i=0; $i < 10000; $i++) {
            $params[] = [
                'team_id' => (string) rand(1, 12),
                'position_id' => (string) rand(1, 9),
            ];
        }
        return $params;
    } //
}
