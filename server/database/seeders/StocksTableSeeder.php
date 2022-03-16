<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stocks')->delete();
        
        \DB::table('stocks')->insert(array (
            0 => 
            array (
                'stock_id' => 1,
                'user_id' => 32,
                'branch_id' => 2,
                'product_id' => 103,
                'stock_units' => 100,
                'stock_unitprice' => 500,
                'stock_comment' => '',
                'stock_created' => '2020-09-15 15:29:09',
                'stock_updated' => '2020-09-16 14:32:31',
                'stock_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'stock_id' => 2,
                'user_id' => 35,
                'branch_id' => 6,
                'product_id' => 103,
                'stock_units' => 60,
                'stock_unitprice' => 300,
                'stock_comment' => '',
                'stock_created' => '2020-12-22 10:21:35',
                'stock_updated' => '0000-00-00 00:00:00',
                'stock_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'stock_id' => 3,
                'user_id' => 35,
                'branch_id' => 6,
                'product_id' => 104,
                'stock_units' => 50,
                'stock_unitprice' => 100,
                'stock_comment' => '',
                'stock_created' => '2020-12-22 10:22:00',
                'stock_updated' => '0000-00-00 00:00:00',
                'stock_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}