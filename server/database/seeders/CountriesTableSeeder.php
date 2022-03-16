<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'country_id' => 1,
                'country_order' => 1,
                'country_name' => '日本',
                'country_created' => '2020-02-07 19:33:28',
                'country_updated' => '0000-00-00 00:00:00',
                'country_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}