<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubbranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subbranches')->delete();
        
        \DB::table('subbranches')->insert(array (
            0 => 
            array (
                'subbranch_id' => 2,
                'user_id' => 33,
                'branch_id' => 2,
                'subbranch_duration' => 50,
                'subbranch_created' => '2020-03-27 16:10:26',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'subbranch_id' => 3,
                'user_id' => 37,
                'branch_id' => 1,
                'subbranch_duration' => 60,
                'subbranch_created' => '2020-04-13 14:41:47',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'subbranch_id' => 4,
                'user_id' => 42,
                'branch_id' => 1,
                'subbranch_duration' => 30,
                'subbranch_created' => '2020-04-13 14:42:36',
                'subbranch_updated' => '2020-11-28 23:49:54',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'subbranch_id' => 5,
                'user_id' => 45,
                'branch_id' => 1,
                'subbranch_duration' => 60,
                'subbranch_created' => '2020-04-13 14:43:01',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'subbranch_id' => 6,
                'user_id' => 45,
                'branch_id' => 2,
                'subbranch_duration' => 60,
                'subbranch_created' => '2020-04-13 14:43:01',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'subbranch_id' => 12,
                'user_id' => 35,
                'branch_id' => 1,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-07-31 14:06:09',
                'subbranch_updated' => '2020-11-28 23:51:46',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'subbranch_id' => 13,
                'user_id' => 35,
                'branch_id' => 3,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-07-31 14:06:09',
                'subbranch_updated' => '2020-11-28 23:51:46',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'subbranch_id' => 14,
                'user_id' => 35,
                'branch_id' => 4,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-07-31 14:06:09',
                'subbranch_updated' => '2020-11-28 23:51:46',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'subbranch_id' => 15,
                'user_id' => 35,
                'branch_id' => 5,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-07-31 14:06:09',
                'subbranch_updated' => '2020-11-28 23:51:46',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'subbranch_id' => 29,
                'user_id' => 34,
                'branch_id' => 1,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-09-16 14:51:25',
                'subbranch_updated' => '2020-09-16 14:51:37',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'subbranch_id' => 30,
                'user_id' => 34,
                'branch_id' => 4,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-09-16 14:51:25',
                'subbranch_updated' => '2020-09-16 14:51:37',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'subbranch_id' => 31,
                'user_id' => 34,
                'branch_id' => 3,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-09-16 14:51:33',
                'subbranch_updated' => '2020-09-16 14:51:37',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'subbranch_id' => 32,
                'user_id' => 34,
                'branch_id' => 5,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-09-16 14:51:33',
                'subbranch_updated' => '2020-09-16 14:51:37',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'subbranch_id' => 33,
                'user_id' => 32,
                'branch_id' => 2,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-10-26 14:46:40',
                'subbranch_updated' => '2020-12-04 17:17:45',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'subbranch_id' => 34,
                'user_id' => 32,
                'branch_id' => 3,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-10-26 14:46:40',
                'subbranch_updated' => '2020-12-04 17:17:45',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'subbranch_id' => 35,
                'user_id' => 32,
                'branch_id' => 4,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-10-26 14:46:40',
                'subbranch_updated' => '2020-12-04 17:17:45',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'subbranch_id' => 36,
                'user_id' => 32,
                'branch_id' => 5,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-10-26 14:46:40',
                'subbranch_updated' => '2020-12-04 17:17:45',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'subbranch_id' => 38,
                'user_id' => 42,
                'branch_id' => 2,
                'subbranch_duration' => 30,
                'subbranch_created' => '2020-11-28 23:49:54',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'subbranch_id' => 40,
                'user_id' => 35,
                'branch_id' => 2,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-11-28 23:51:46',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'subbranch_id' => 41,
                'user_id' => 32,
                'branch_id' => 6,
                'subbranch_duration' => 0,
                'subbranch_created' => '2020-12-04 17:17:45',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'subbranch_id' => 42,
                'user_id' => 39,
                'branch_id' => 6,
                'subbranch_duration' => 30,
                'subbranch_created' => '2020-12-23 12:37:47',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'subbranch_id' => 43,
                'user_id' => 23,
                'branch_id' => 4,
                'subbranch_duration' => 0,
                'subbranch_created' => '2021-01-17 06:54:05',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'subbranch_id' => 44,
                'user_id' => 50,
                'branch_id' => 4,
                'subbranch_duration' => 0,
                'subbranch_created' => '2021-08-03 13:57:04',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'subbranch_id' => 45,
                'user_id' => 50,
                'branch_id' => 6,
                'subbranch_duration' => 0,
                'subbranch_created' => '2021-08-03 13:57:04',
                'subbranch_updated' => '0000-00-00 00:00:00',
                'subbranch_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}