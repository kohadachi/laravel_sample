<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'image_id' => 1,
                'user_id' => 1,
                'customer_id' => 1,
                'image_name' => 'member5eab8df9eaf4dprofile-1.png',
                'image_created' => '2020-05-01 11:48:25',
                'image_updated' => '0000-00-00 00:00:00',
                'image_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}