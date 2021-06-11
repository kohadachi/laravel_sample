<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = $this->createData();
        DB::table('position')->insert($params);
    }

    public function createData() {
        $team = [
            '0' => 'ピッチャー',
            '1' => 'キャチャー',
            '2' => 'ファースト',
            '3' => 'セカンド',
            '4' => 'サード',
            '5' => 'ショート',
            '6' => 'レフト',
            '7' => 'センター',
            '8' => 'ライト',
        ];
        foreach ($team as $key => $value) {
            $params[] = [ 
                'name' => $value,
            ];
        }
        return $params;
    } //
}
