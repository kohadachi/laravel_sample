<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurposesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('purposes')->delete();
        
        \DB::table('purposes')->insert(array (
            0 => 
            array (
                'purpose_id' => 1,
                'purpose_name' => 'ダイエット',
                'purpose_created' => '2020-04-28 03:21:10',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'purpose_id' => 2,
                'purpose_name' => 'シェイプアップ',
                'purpose_created' => '2020-04-28 03:21:22',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'purpose_id' => 3,
                'purpose_name' => '筋力アップ',
                'purpose_created' => '2020-04-28 03:21:41',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'purpose_id' => 4,
                'purpose_name' => '健康維持',
                'purpose_created' => '2020-04-28 03:21:52',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'purpose_id' => 5,
                'purpose_name' => '運動不足解消',
                'purpose_created' => '2020-04-28 03:22:04',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'purpose_id' => 6,
                'purpose_name' => 'ストレス解消',
                'purpose_created' => '2020-04-28 03:22:16',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'purpose_id' => 7,
                'purpose_name' => 'リハビリ',
                'purpose_created' => '2020-04-28 03:22:27',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'purpose_id' => 8,
                'purpose_name' => 'その他',
                'purpose_created' => '2020-04-28 03:22:43',
                'purpose_updated' => '0000-00-00 00:00:00',
                'purpose_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}