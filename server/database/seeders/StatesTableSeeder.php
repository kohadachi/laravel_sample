<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'state_id' => 1,
                'counrty_id' => 1,
                'state_order' => 1,
                'state_name' => '北海道',
                'state_created' => '2020-02-07 20:05:08',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'state_id' => 2,
                'counrty_id' => 1,
                'state_order' => 2,
                'state_name' => '青森県',
                'state_created' => '2020-02-07 20:06:16',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'state_id' => 3,
                'counrty_id' => 1,
                'state_order' => 3,
                'state_name' => '岩手県',
                'state_created' => '2020-02-07 20:06:16',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'state_id' => 4,
                'counrty_id' => 1,
                'state_order' => 4,
                'state_name' => '宮城県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'state_id' => 5,
                'counrty_id' => 1,
                'state_order' => 5,
                'state_name' => '秋田県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'state_id' => 6,
                'counrty_id' => 1,
                'state_order' => 6,
                'state_name' => '山形県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'state_id' => 7,
                'counrty_id' => 1,
                'state_order' => 7,
                'state_name' => '福島県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'state_id' => 8,
                'counrty_id' => 1,
                'state_order' => 8,
                'state_name' => '茨城県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'state_id' => 9,
                'counrty_id' => 1,
                'state_order' => 9,
                'state_name' => '栃木県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'state_id' => 10,
                'counrty_id' => 1,
                'state_order' => 10,
                'state_name' => '群馬県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'state_id' => 11,
                'counrty_id' => 1,
                'state_order' => 11,
                'state_name' => '埼玉県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'state_id' => 12,
                'counrty_id' => 1,
                'state_order' => 12,
                'state_name' => '千葉県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'state_id' => 13,
                'counrty_id' => 1,
                'state_order' => 13,
                'state_name' => '東京都',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'state_id' => 14,
                'counrty_id' => 1,
                'state_order' => 14,
                'state_name' => '神奈川県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'state_id' => 15,
                'counrty_id' => 1,
                'state_order' => 15,
                'state_name' => '新潟県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'state_id' => 16,
                'counrty_id' => 1,
                'state_order' => 16,
                'state_name' => '富山県',
                'state_created' => '2020-02-07 20:07:26',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'state_id' => 17,
                'counrty_id' => 1,
                'state_order' => 17,
                'state_name' => '石川県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'state_id' => 18,
                'counrty_id' => 1,
                'state_order' => 18,
                'state_name' => '福井県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'state_id' => 19,
                'counrty_id' => 1,
                'state_order' => 19,
                'state_name' => '山梨県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'state_id' => 20,
                'counrty_id' => 1,
                'state_order' => 20,
                'state_name' => '長野県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'state_id' => 21,
                'counrty_id' => 1,
                'state_order' => 21,
                'state_name' => '岐阜県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'state_id' => 22,
                'counrty_id' => 1,
                'state_order' => 22,
                'state_name' => '静岡県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'state_id' => 23,
                'counrty_id' => 1,
                'state_order' => 23,
                'state_name' => '愛知県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'state_id' => 24,
                'counrty_id' => 1,
                'state_order' => 24,
                'state_name' => '三重県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'state_id' => 25,
                'counrty_id' => 1,
                'state_order' => 25,
                'state_name' => '滋賀県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'state_id' => 26,
                'counrty_id' => 1,
                'state_order' => 26,
                'state_name' => '京都府',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'state_id' => 27,
                'counrty_id' => 1,
                'state_order' => 27,
                'state_name' => '大阪府',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'state_id' => 28,
                'counrty_id' => 1,
                'state_order' => 28,
                'state_name' => '兵庫県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'state_id' => 29,
                'counrty_id' => 1,
                'state_order' => 29,
                'state_name' => '奈良県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'state_id' => 30,
                'counrty_id' => 1,
                'state_order' => 30,
                'state_name' => '和歌山県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'state_id' => 31,
                'counrty_id' => 1,
                'state_order' => 31,
                'state_name' => '鳥取県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'state_id' => 32,
                'counrty_id' => 1,
                'state_order' => 32,
                'state_name' => '島根県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'state_id' => 33,
                'counrty_id' => 1,
                'state_order' => 33,
                'state_name' => '岡山県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'state_id' => 34,
                'counrty_id' => 1,
                'state_order' => 34,
                'state_name' => '広島県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'state_id' => 35,
                'counrty_id' => 1,
                'state_order' => 35,
                'state_name' => '山口県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'state_id' => 36,
                'counrty_id' => 1,
                'state_order' => 36,
                'state_name' => '徳島県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'state_id' => 37,
                'counrty_id' => 1,
                'state_order' => 37,
                'state_name' => '香川県',
                'state_created' => '2020-02-07 20:07:27',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'state_id' => 38,
                'counrty_id' => 1,
                'state_order' => 38,
                'state_name' => '愛媛県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'state_id' => 39,
                'counrty_id' => 1,
                'state_order' => 39,
                'state_name' => '高知県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'state_id' => 40,
                'counrty_id' => 1,
                'state_order' => 40,
                'state_name' => '福岡県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'state_id' => 41,
                'counrty_id' => 1,
                'state_order' => 41,
                'state_name' => '佐賀県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'state_id' => 42,
                'counrty_id' => 1,
                'state_order' => 42,
                'state_name' => '長崎県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'state_id' => 43,
                'counrty_id' => 1,
                'state_order' => 43,
                'state_name' => '熊本県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'state_id' => 44,
                'counrty_id' => 1,
                'state_order' => 44,
                'state_name' => '大分県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'state_id' => 45,
                'counrty_id' => 1,
                'state_order' => 45,
                'state_name' => '宮崎県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'state_id' => 46,
                'counrty_id' => 1,
                'state_order' => 46,
                'state_name' => '鹿児島県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'state_id' => 47,
                'counrty_id' => 1,
                'state_order' => 47,
                'state_name' => '沖縄県',
                'state_created' => '2020-02-07 20:07:28',
                'state_updated' => '0000-00-00 00:00:00',
                'state_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}