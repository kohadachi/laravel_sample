<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('positions')->delete();
        
        \DB::table('positions')->insert(array (
            0 => 
            array (
                'position_id' => 1,
                'position_name' => '社長',
                'position_desc' => '',
                'position_created' => '2020-01-16 00:00:00',
                'position_updated' => '0000-00-00 00:00:00',
                'position_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'position_id' => 2,
                'position_name' => 'オーナー',
                'position_desc' => '',
                'position_created' => '2020-01-16 11:00:00',
                'position_updated' => '0000-00-00 00:00:00',
                'position_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'position_id' => 3,
                'position_name' => '店長',
                'position_desc' => '',
                'position_created' => '2020-01-16 04:00:00',
                'position_updated' => '0000-00-00 00:00:00',
                'position_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'position_id' => 4,
                'position_name' => 'トレーナー',
                'position_desc' => '',
                'position_created' => '0000-00-00 00:00:00',
                'position_updated' => '0000-00-00 00:00:00',
                'position_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}