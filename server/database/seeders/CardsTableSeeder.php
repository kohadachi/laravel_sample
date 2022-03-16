<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'card_id' => 3,
                'user_id' => 1,
                'customer_id' => 1,
                'card_name' => 'YAMADA TARO',
                'card_token' => 'card_1Ge3LYCXVVtL28Air5qq7wyj',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 0,
                'card_created' => '2020-05-02 03:12:25',
                'card_updated' => '2021-01-27 23:10:42',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'card_id' => 4,
                'user_id' => 1,
                'customer_id' => 1,
                'card_name' => 'TEST TARO',
                'card_token' => 'card_1Ge3MvCXVVtL28AigQhFYQUk',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 0,
                'card_created' => '2020-05-02 03:13:49',
                'card_updated' => '2020-08-10 03:06:03',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'card_id' => 5,
                'user_id' => 32,
                'customer_id' => 2,
                'card_name' => 'SHOKO UDA',
                'card_token' => 'card_1GgOa0CXVVtL28AiiW4IMs8T',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2021-10',
                'card_default' => 0,
                'card_created' => '2020-05-08 14:17:00',
                'card_updated' => '2020-07-31 13:47:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'card_id' => 6,
                'user_id' => 1,
                'customer_id' => 1,
                'card_name' => 'TEST',
                'card_token' => 'card_1HAq4yCXVVtL28AihpuyAaYw',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 0,
                'card_created' => '2020-07-31 13:42:48',
                'card_updated' => '2021-05-01 07:54:38',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'card_id' => 7,
                'user_id' => 1,
                'customer_id' => 1,
                'card_name' => 'TEST',
                'card_token' => 'card_1HAq5ECXVVtL28AiTBYXFVM6',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 0,
                'card_created' => '2020-07-31 13:43:04',
                'card_updated' => '2021-01-27 23:11:31',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'card_id' => 8,
                'user_id' => 32,
                'customer_id' => 2,
                'card_name' => 'test uda',
                'card_token' => 'card_1HAq8gCXVVtL28AiVPoqxHSP',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2020-10',
                'card_default' => 0,
                'card_created' => '2020-07-31 13:46:39',
                'card_updated' => '2021-05-01 07:55:14',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'card_id' => 9,
                'user_id' => 32,
                'customer_id' => 5,
                'card_name' => 'SHOKO UDA',
                'card_token' => 'card_1HRSbuCXVVtL28AikrLZim2t',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2021-11',
                'card_default' => 0,
                'card_created' => '2020-09-15 10:05:31',
                'card_updated' => '2021-05-01 07:56:33',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'card_id' => 10,
                'user_id' => 32,
                'customer_id' => 4,
                'card_name' => 'SHOKO UDA',
                'card_token' => 'card_1HaEitCXVVtL28AimArnjylZ',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2020-11',
                'card_default' => 0,
                'card_created' => '2020-10-09 15:05:00',
                'card_updated' => '2021-05-01 07:56:03',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'card_id' => 11,
                'user_id' => 32,
                'customer_id' => 7,
                'card_name' => 'test uda',
                'card_token' => 'card_1IES4BCXVVtL28AiocT2rYz6',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-5',
                'card_default' => 0,
                'card_created' => '2021-01-28 13:25:12',
                'card_updated' => '2021-05-01 07:57:07',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'card_id' => 12,
                'user_id' => 32,
                'customer_id' => 5,
                'card_name' => 'uda',
                'card_token' => 'card_1IES6YCXVVtL28AiWAkZVBYF',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-9',
                'card_default' => 0,
                'card_created' => '2021-01-28 13:27:39',
                'card_updated' => '2021-01-28 13:27:50',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'card_id' => 13,
                'user_id' => 1,
                'customer_id' => 1,
                'card_name' => 'YAMADA',
                'card_token' => 'card_1Im5EICXVVtL28AicFBQBEfZ',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-05-01 07:54:38',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'card_id' => 14,
                'user_id' => 1,
                'customer_id' => 2,
                'card_name' => 'UDA',
                'card_token' => 'card_1Im5EsCXVVtL28AimUZhI3fq',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-05-01 07:55:14',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'card_id' => 15,
                'user_id' => 1,
                'customer_id' => 4,
                'card_name' => 'TEST',
                'card_token' => 'card_1Im5FeCXVVtL28AiCEXKPXGJ',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-05-01 07:56:03',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'card_id' => 16,
                'user_id' => 1,
                'customer_id' => 5,
                'card_name' => 'UDA TEST',
                'card_token' => 'card_1Im5G8CXVVtL28AiU3AVEeoi',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-05-01 07:56:33',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'card_id' => 17,
                'user_id' => 1,
                'customer_id' => 7,
                'card_name' => 'UDA T',
                'card_token' => 'card_1Im5GhCXVVtL28AiwsbmrNL1',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-05-01 07:57:07',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'card_id' => 18,
                'user_id' => 32,
                'customer_id' => 23,
                'card_name' => 'SHOKO UDA',
                'card_token' => 'card_1J50MeCXVVtL28Aih9R5gdUZ',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2025-7',
                'card_default' => 1,
                'card_created' => '2021-06-22 12:33:30',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'card_id' => 19,
                'user_id' => 32,
                'customer_id' => 30,
                'card_name' => 'SHOKO UDA',
                'card_token' => 'card_1JoIBiCXVVtL28AiPd3G8WSL',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2025-2',
                'card_default' => 1,
                'card_created' => '2021-10-25 10:41:23',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'card_id' => 20,
                'user_id' => 50,
                'customer_id' => 31,
                'card_name' => '矢島',
                'card_token' => 'card_1JpnyfCXVVtL28AibXIj57N9',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-10-29 14:50:10',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'card_id' => 21,
                'user_id' => 50,
                'customer_id' => 32,
                'card_name' => 'さ',
                'card_token' => 'card_1JpoZ8CXVVtL28AiSHMqfkmm',
                'card_status' => 1,
                'card_type' => 'Visa',
                'card_lastdigits' => '4242',
                'card_expire' => '2022-2',
                'card_default' => 1,
                'card_created' => '2021-10-29 15:27:51',
                'card_updated' => '0000-00-00 00:00:00',
                'card_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}