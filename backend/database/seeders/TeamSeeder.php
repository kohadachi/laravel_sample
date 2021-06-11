<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = $this->createData();
        DB::table('team')->insert($params);
    }

    public function createData() {
        $team = [
            '0' => '巨人',
            '1' => 'DeNa',
            '2' => '阪神タイガース',
            '3' => '中日ドラゴンズ',
            '4' => '広島カープ',
            '5' => 'ヤクルトスワローズ',
            '6' => '日本ハムファイターズ',
            '7' => 'ソフトバンクホークス',
            '8' => '楽天イーグルス',
            '9' => 'ロッテマリーンズ',
            '10' => 'オリックス',
            '11' => '西武ライオンズ',
        ];
        foreach ($team as $key => $value) {
            $params[] = [ 
                'name' => $value,
            ];
        }
        return $params;
    } //
}
