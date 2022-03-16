<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OwnbranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ownbranches')->delete();
        
        \DB::table('ownbranches')->insert(array (
            0 => 
            array (
                'ownbranch_id' => 6,
                'branch_id' => 4,
                'user_id' => 37,
                'ownbranch_created' => '2020-12-25 10:31:03',
                'ownbranch_updated' => '0000-00-00 00:00:00',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'ownbranch_id' => 7,
                'branch_id' => 5,
                'user_id' => 38,
                'ownbranch_created' => '2020-12-25 10:32:17',
                'ownbranch_updated' => '0000-00-00 00:00:00',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'ownbranch_id' => 11,
                'branch_id' => 3,
                'user_id' => 23,
                'ownbranch_created' => '2021-01-17 06:55:31',
                'ownbranch_updated' => '2021-01-17 07:25:30',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'ownbranch_id' => 13,
                'branch_id' => 2,
                'user_id' => 23,
                'ownbranch_created' => '2021-01-17 07:14:29',
                'ownbranch_updated' => '2021-01-17 07:25:30',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'ownbranch_id' => 14,
                'branch_id' => 4,
                'user_id' => 50,
                'ownbranch_created' => '2021-08-03 13:55:34',
                'ownbranch_updated' => '0000-00-00 00:00:00',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'ownbranch_id' => 15,
                'branch_id' => 6,
                'user_id' => 50,
                'ownbranch_created' => '2021-08-03 13:55:34',
                'ownbranch_updated' => '0000-00-00 00:00:00',
                'ownbranch_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}