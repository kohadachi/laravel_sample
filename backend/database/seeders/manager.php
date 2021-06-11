<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class manager extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100000; $i++) { 
            $params[] = [ 
                'team_id' => '1',
                'name' => 'kawabata_rio@example.com'.$i,
            ];
        } 
        manager::insert($params);
    }
}
