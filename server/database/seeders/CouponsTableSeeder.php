<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'coupon_id' => 1,
                'coupon_name' => 'テスト',
                'coupon_code' => '',
                'coupon_discount' => 10000,
                'coupon_value' => 5000,
                'coupon_price' => 0,
                'coupon_comment' => '',
                'user_id' => 1,
                'coupon_created' => '2021-04-16 12:15:55',
                'coupon_updated' => '2021-04-16 12:45:04',
            ),
            1 => 
            array (
                'coupon_id' => 2,
                'coupon_name' => 'ルクサ',
                'coupon_code' => '',
                'coupon_discount' => 9900,
                'coupon_value' => 9900,
                'coupon_price' => 18000,
                'coupon_comment' => '18,000円販売',
                'user_id' => 32,
                'coupon_created' => '2021-04-22 14:08:52',
                'coupon_updated' => '2021-05-17 11:49:51',
            ),
            2 => 
            array (
                'coupon_id' => 3,
                'coupon_name' => 'くまポン',
                'coupon_code' => '',
                'coupon_discount' => 13200,
                'coupon_value' => 13200,
                'coupon_price' => 24000,
                'coupon_comment' => '24,000円販売',
                'user_id' => 32,
                'coupon_created' => '2021-04-22 14:09:20',
                'coupon_updated' => '2021-05-17 11:49:37',
            ),
            3 => 
            array (
                'coupon_id' => 4,
                'coupon_name' => 'アソビュー',
                'coupon_code' => '',
                'coupon_discount' => 14400,
                'coupon_value' => 14400,
                'coupon_price' => 24000,
                'coupon_comment' => '24,000円販売',
                'user_id' => 32,
                'coupon_created' => '2021-04-22 14:10:08',
                'coupon_updated' => '2021-04-26 15:34:04',
            ),
        ));
        
        
    }
}