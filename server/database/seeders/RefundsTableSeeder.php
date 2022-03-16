<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RefundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('refunds')->delete();
        
        \DB::table('refunds')->insert(array (
            0 => 
            array (
                'refund_id' => 1,
                'order_id' => 16,
                'product_id' => 0,
                'ordersub_id' => 0,
                'ticket_id' => 0,
                'good_id' => 6,
                'customer_id' => 1,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 3,
                'refund_price' => 10000,
                'refund_times' => 0,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 30000,
                'refund_extaxamount' => 0,
                'refund_method' => 1,
                'refund_date' => '2020-09-15',
                'refund_created' => '2020-09-15 12:22:35',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'refund_id' => 2,
                'order_id' => 17,
                'product_id' => 3,
                'ordersub_id' => 0,
                'ticket_id' => 19,
                'good_id' => 0,
                'customer_id' => 1,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 0,
                'refund_price' => 10000,
                'refund_times' => 4,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 10000,
                'refund_extaxamount' => 0,
                'refund_method' => 1,
                'refund_date' => '2020-09-15',
                'refund_created' => '2020-09-15 12:45:53',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'refund_id' => 3,
                'order_id' => 20,
                'product_id' => 122,
                'ordersub_id' => 0,
                'ticket_id' => 11,
                'good_id' => 0,
                'customer_id' => 6,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 68200,
                'refund_times' => 8,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 68200,
                'refund_extaxamount' => 0,
                'refund_method' => 2,
                'refund_date' => '2020-09-16',
                'refund_created' => '2020-09-16 14:34:52',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'refund_id' => 4,
                'order_id' => 22,
                'product_id' => 122,
                'ordersub_id' => 0,
                'ticket_id' => 13,
                'good_id' => 0,
                'customer_id' => 6,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 68200,
                'refund_times' => 8,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 68200,
                'refund_extaxamount' => 0,
                'refund_method' => 2,
                'refund_date' => '2020-09-24',
                'refund_created' => '2020-09-24 14:36:01',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'refund_id' => 5,
                'order_id' => 30,
                'product_id' => 122,
                'ordersub_id' => 0,
                'ticket_id' => 19,
                'good_id' => 0,
                'customer_id' => 7,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 68200,
                'refund_times' => 8,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 68200,
                'refund_extaxamount' => 0,
                'refund_method' => 2,
                'refund_date' => '2020-10-15',
                'refund_created' => '2020-10-15 09:10:25',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'refund_id' => 6,
                'order_id' => 31,
                'product_id' => 122,
                'ordersub_id' => 0,
                'ticket_id' => 20,
                'good_id' => 0,
                'customer_id' => 7,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 0,
                'refund_price' => 68200,
                'refund_times' => 8,
                'refund_used' => 4,
                'refund_cardfee' => 0,
                'refund_amount' => 34100,
                'refund_extaxamount' => 0,
                'refund_method' => 2,
                'refund_date' => '2020-11-23',
                'refund_created' => '2020-11-23 11:27:04',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'refund_id' => 7,
                'order_id' => 43,
                'product_id' => 139,
                'ordersub_id' => 0,
                'ticket_id' => 31,
                'good_id' => 0,
                'customer_id' => 18,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 5500,
                'refund_times' => 1,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 5500,
                'refund_extaxamount' => 0,
                'refund_method' => 4,
                'refund_date' => '2021-02-02',
                'refund_created' => '2021-02-02 10:42:59',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'refund_id' => 8,
                'order_id' => 38,
                'product_id' => 107,
                'ordersub_id' => 0,
                'ticket_id' => 26,
                'good_id' => 0,
                'customer_id' => 1,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 0,
                'refund_price' => 32000,
                'refund_times' => 4,
                'refund_used' => 0,
                'refund_cardfee' => 1152,
                'refund_amount' => 30848,
                'refund_extaxamount' => 0,
                'refund_method' => 1,
                'refund_date' => '2021-05-30',
                'refund_created' => '2021-05-30 20:01:40',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'refund_id' => 9,
                'order_id' => 6,
                'product_id' => 107,
                'ordersub_id' => 0,
                'ticket_id' => 6,
                'good_id' => 0,
                'customer_id' => 1,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 0,
                'refund_price' => 32000,
                'refund_times' => 4,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 32000,
                'refund_extaxamount' => 0,
                'refund_method' => 1,
                'refund_date' => '2021-05-30',
                'refund_created' => '2021-05-30 22:42:01',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'refund_id' => 10,
                'order_id' => 75,
                'product_id' => 139,
                'ordersub_id' => 0,
                'ticket_id' => 49,
                'good_id' => 0,
                'customer_id' => 25,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 5500,
                'refund_times' => 1,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 5500,
                'refund_extaxamount' => 0,
                'refund_method' => 4,
                'refund_date' => '2021-08-10',
                'refund_created' => '2021-08-10 14:41:03',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'refund_id' => 11,
                'order_id' => 76,
                'product_id' => 139,
                'ordersub_id' => 0,
                'ticket_id' => 50,
                'good_id' => 0,
                'customer_id' => 25,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 5500,
                'refund_times' => 1,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 5500,
                'refund_extaxamount' => 0,
                'refund_method' => 4,
                'refund_date' => '2021-08-10',
                'refund_created' => '2021-08-10 14:44:37',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'refund_id' => 12,
                'order_id' => 0,
                'product_id' => 114,
                'ordersub_id' => 0,
                'ticket_id' => 0,
                'good_id' => 37,
                'customer_id' => 25,
                'branch_id' => 1,
                'user_id' => 1,
                'refund_units' => 1,
                'refund_price' => 300,
                'refund_times' => 0,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 300,
                'refund_extaxamount' => 0,
                'refund_method' => 4,
                'refund_date' => '2021-09-29',
                'refund_created' => '2021-09-29 07:51:42',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'refund_id' => 13,
                'order_id' => 101,
                'product_id' => 139,
                'ordersub_id' => 0,
                'ticket_id' => 68,
                'good_id' => 0,
                'customer_id' => 30,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 5500,
                'refund_times' => 1,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 5500,
                'refund_extaxamount' => 5000,
                'refund_method' => 2,
                'refund_date' => '2022-03-10',
                'refund_created' => '2022-03-10 14:41:44',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'refund_id' => 14,
                'order_id' => 100,
                'product_id' => 139,
                'ordersub_id' => 0,
                'ticket_id' => 67,
                'good_id' => 0,
                'customer_id' => 30,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 0,
                'refund_price' => 5500,
                'refund_times' => 1,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 5500,
                'refund_extaxamount' => 5000,
                'refund_method' => 2,
                'refund_date' => '2022-03-10',
                'refund_created' => '2022-03-10 14:41:46',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'refund_id' => 15,
                'order_id' => 107,
                'product_id' => 114,
                'ordersub_id' => 0,
                'ticket_id' => 0,
                'good_id' => 45,
                'customer_id' => 30,
                'branch_id' => 1,
                'user_id' => 32,
                'refund_units' => 1,
                'refund_price' => 300,
                'refund_times' => 0,
                'refund_used' => 0,
                'refund_cardfee' => 0,
                'refund_amount' => 300,
                'refund_extaxamount' => 273,
                'refund_method' => 2,
                'refund_date' => '2022-03-10',
                'refund_created' => '2022-03-10 14:48:55',
                'refund_updated' => '0000-00-00 00:00:00',
                'refund_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}