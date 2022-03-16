<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scales')->delete();
        
        \DB::table('scales')->insert(array (
            0 => 
            array (
                'scale_id' => 5,
                'user_id' => 1,
                'customer_id' => 1,
                'branch_id' => 0,
                'visit_id' => 0,
                'scale_date' => '0000-00-00',
                'scale_weight' => 242,
                'scale_fat' => 234,
                'scale_skeleton' => 0,
                'scale_muscle' => 234,
                'scale_created' => '2020-04-29 20:08:31',
                'scale_updated' => '0000-00-00 00:00:00',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'scale_id' => 6,
                'user_id' => 1,
                'customer_id' => 1,
                'branch_id' => 0,
                'visit_id' => 0,
                'scale_date' => '0000-00-00',
                'scale_weight' => 242,
                'scale_fat' => 234,
                'scale_skeleton' => 0,
                'scale_muscle' => 234,
                'scale_created' => '2020-05-05 02:59:25',
                'scale_updated' => '0000-00-00 00:00:00',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'scale_id' => 7,
                'user_id' => 1,
                'customer_id' => 2,
                'branch_id' => 0,
                'visit_id' => 0,
                'scale_date' => '0000-00-00',
                'scale_weight' => 454,
                'scale_fat' => 234,
                'scale_skeleton' => 0,
                'scale_muscle' => 234,
                'scale_created' => '2020-05-05 03:03:13',
                'scale_updated' => '0000-00-00 00:00:00',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'scale_id' => 8,
                'user_id' => 1,
                'customer_id' => 1,
                'branch_id' => 0,
                'visit_id' => 0,
                'scale_date' => '0000-00-00',
                'scale_weight' => 242,
                'scale_fat' => 234,
                'scale_skeleton' => 0,
                'scale_muscle' => 234,
                'scale_created' => '2020-05-05 04:00:35',
                'scale_updated' => '0000-00-00 00:00:00',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'scale_id' => 9,
                'user_id' => 23,
                'customer_id' => 5,
                'branch_id' => 1,
                'visit_id' => 7,
                'scale_date' => '2020-09-23',
                'scale_weight' => 48700,
                'scale_fat' => 2000,
                'scale_skeleton' => 50200,
                'scale_muscle' => 3000,
                'scale_created' => '2020-09-23 07:09:58',
                'scale_updated' => '2020-09-23 14:09:21',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'scale_id' => 10,
                'user_id' => 32,
                'customer_id' => 5,
                'branch_id' => 1,
                'visit_id' => 12,
                'scale_date' => '2020-09-24',
                'scale_weight' => 58000,
                'scale_fat' => 2000,
                'scale_skeleton' => 10000,
                'scale_muscle' => 500,
                'scale_created' => '2020-09-24 14:09:09',
                'scale_updated' => '2020-09-24 15:09:13',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'scale_id' => 11,
                'user_id' => 32,
                'customer_id' => 23,
                'branch_id' => 1,
                'visit_id' => 62,
                'scale_date' => '2021-08-02',
                'scale_weight' => 11000,
                'scale_fat' => 1100,
                'scale_skeleton' => 11000,
                'scale_muscle' => 1100,
                'scale_created' => '2021-08-02 16:08:50',
                'scale_updated' => '2021-08-02 16:08:21',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'scale_id' => 12,
                'user_id' => 50,
                'customer_id' => 26,
                'branch_id' => 1,
                'visit_id' => 71,
                'scale_date' => '2021-10-15',
                'scale_weight' => 2000,
                'scale_fat' => 200,
                'scale_skeleton' => 2000,
                'scale_muscle' => 200,
                'scale_created' => '2021-10-15 19:10:09',
                'scale_updated' => '2021-10-15 19:10:12',
                'scale_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}