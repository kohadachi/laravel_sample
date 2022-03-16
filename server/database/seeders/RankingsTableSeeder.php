<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RankingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rankings')->delete();
        
        \DB::table('rankings')->insert(array (
            0 => 
            array (
                'ranking_id' => 1,
                'ranking_name' => '報酬ランク1',
                'ranking_rate' => 0,
                'ranking_created' => '2020-02-17 13:11:06',
                'ranking_updated' => '0000-00-00 00:00:00',
                'ranking_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'ranking_id' => 2,
                'ranking_name' => '報酬ランク2',
                'ranking_rate' => 0,
                'ranking_created' => '2020-02-17 13:11:20',
                'ranking_updated' => '0000-00-00 00:00:00',
                'ranking_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'ranking_id' => 3,
                'ranking_name' => '報酬ランク3',
                'ranking_rate' => 0,
                'ranking_created' => '2020-02-17 13:11:37',
                'ranking_updated' => '0000-00-00 00:00:00',
                'ranking_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'ranking_id' => 4,
                'ranking_name' => '報酬ランク4',
                'ranking_rate' => 0,
                'ranking_created' => '2020-02-17 13:11:45',
                'ranking_updated' => '0000-00-00 00:00:00',
                'ranking_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'ranking_id' => 5,
                'ranking_name' => '研修生',
                'ranking_rate' => 0,
                'ranking_created' => '2021-06-14 11:32:21',
                'ranking_updated' => '0000-00-00 00:00:00',
                'ranking_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}