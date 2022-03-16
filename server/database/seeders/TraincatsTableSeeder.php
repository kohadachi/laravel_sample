<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TraincatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('traincats')->delete();
        
        \DB::table('traincats')->insert(array (
            0 => 
            array (
                'traincat_id' => 1,
                'user_id' => 1,
                'traincat_name' => '脚',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'traincat_id' => 2,
                'user_id' => 1,
                'traincat_name' => '臀部、ハム',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'traincat_id' => 3,
                'user_id' => 1,
                'traincat_name' => '背中',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'traincat_id' => 4,
                'user_id' => 1,
                'traincat_name' => '胸',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'traincat_id' => 5,
                'user_id' => 1,
                'traincat_name' => '肩',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'traincat_id' => 6,
                'user_id' => 1,
                'traincat_name' => '二頭筋',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'traincat_id' => 7,
                'user_id' => 1,
                'traincat_name' => '三頭筋',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'traincat_id' => 8,
                'user_id' => 1,
                'traincat_name' => '腹筋',
                'traincat_created' => '2020-09-20 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'traincat_id' => 9,
                'user_id' => 1,
                'traincat_name' => 'その他',
                'traincat_created' => '2021-06-22 00:00:00',
                'traincat_updated' => '0000-00-00 00:00:00',
                'traincat_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}