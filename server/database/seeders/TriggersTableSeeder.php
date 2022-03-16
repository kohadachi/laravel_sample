<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TriggersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('triggers')->delete();
        
        \DB::table('triggers')->insert(array (
            0 => 
            array (
                'trigger_id' => 1,
                'trigger_name' => 'ホームページ',
                'trigger_created' => '2020-04-28 03:28:58',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'trigger_id' => 2,
                'trigger_name' => 'SNS',
                'trigger_created' => '2020-04-28 03:29:10',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'trigger_id' => 3,
                'trigger_name' => 'ポータルサイト',
                'trigger_created' => '2020-04-28 03:29:23',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'trigger_id' => 4,
                'trigger_name' => 'チラシ',
                'trigger_created' => '2020-04-28 03:29:36',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'trigger_id' => 5,
                'trigger_name' => '看板',
                'trigger_created' => '2020-04-28 03:29:51',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'trigger_id' => 6,
                'trigger_name' => '紹介',
                'trigger_created' => '2020-04-28 03:30:10',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'trigger_id' => 7,
                'trigger_name' => 'ホットペッパー',
                'trigger_created' => '2020-04-28 03:31:04',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'trigger_id' => 8,
            'trigger_name' => '紹介(ペアトレ)',
                'trigger_created' => '2020-04-28 03:31:29',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'trigger_id' => 9,
            'trigger_name' => 'クーポン(グルーポン・ルクサ・くまポン)',
                'trigger_created' => '2020-04-28 03:31:49',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'trigger_id' => 10,
                'trigger_name' => 'その他',
                'trigger_created' => '2020-04-28 03:32:11',
                'trigger_updated' => '0000-00-00 00:00:00',
                'trigger_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}