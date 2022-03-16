<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReasonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reasons')->delete();
        
        \DB::table('reasons')->insert(array (
            0 => 
            array (
                'reason_id' => 1,
                'reason_title' => '目標達成した',
            ),
            1 => 
            array (
                'reason_id' => 2,
                'reason_title' => '効果がない',
            ),
            2 => 
            array (
                'reason_id' => 3,
                'reason_title' => '引っ越した',
            ),
            3 => 
            array (
                'reason_id' => 4,
                'reason_title' => '職場が変わった',
            ),
            4 => 
            array (
                'reason_id' => 5,
                'reason_title' => '体調不良で通えない',
            ),
            5 => 
            array (
                'reason_id' => 6,
                'reason_title' => '金銭的理由',
            ),
            6 => 
            array (
                'reason_id' => 7,
                'reason_title' => 'サービスが気に入らない',
            ),
            7 => 
            array (
                'reason_id' => 8,
                'reason_title' => 'スタッフがよくなかった',
            ),
            8 => 
            array (
                'reason_id' => 9,
                'reason_title' => 'その他',
            ),
        ));
        
        
    }
}