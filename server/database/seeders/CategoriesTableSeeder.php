<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'category_type' => 2,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => '定額コース									',
                'category_desc' => '定額コース									
',
                'category_created' => '2020-02-09 19:03:41',
                'category_updated' => '2020-03-06 15:23:49',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'category_id' => 2,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'Hot Pepper',
                'category_desc' => 'Hot Pepper
',
                'category_created' => '2020-02-09 19:38:51',
                'category_updated' => '2020-02-17 16:36:16',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'category_id' => 3,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'レンタル									',
                'category_desc' => 'レンタル									
',
                'category_created' => '2020-02-10 02:11:01',
                'category_updated' => '2020-02-17 16:37:59',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'category_id' => 4,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'プロテインドリンク								',
                'category_desc' => 'プロテインドリンク								
',
                'category_created' => '2020-02-10 14:22:52',
                'category_updated' => '2020-02-17 16:43:02',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'category_id' => 5,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => '紹介・VIP・限定',
                'category_desc' => '紹介・VIP・限定
',
                'category_created' => '2020-02-11 18:46:17',
                'category_updated' => '2020-02-17 16:40:27',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'category_id' => 6,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => '通常価格',
                'category_desc' => '通常価格
',
                'category_created' => '2020-02-11 18:46:26',
                'category_updated' => '2020-02-17 16:43:52',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'category_id' => 7,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => '友人・クーポン・モニター',
                'category_desc' => '友人・クーポン・モニター
',
                'category_created' => '2020-02-11 18:46:33',
                'category_updated' => '2020-02-17 16:42:20',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'category_id' => 8,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'Fitmo									',
                'category_desc' => 'Fitmo									
',
                'category_created' => '2020-02-11 19:04:22',
                'category_updated' => '2020-02-17 16:46:25',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'category_id' => 9,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'ポータルサイト',
                'category_desc' => 'ポータルサイト
',
                'category_created' => '2020-02-11 19:06:16',
                'category_updated' => '2020-02-17 16:44:48',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'category_id' => 10,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
                'category_name' => 'オプション									',
                'category_desc' => 'オプション									
',
                'category_created' => '2020-02-11 19:14:28',
                'category_updated' => '2020-02-17 16:39:38',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'category_id' => 11,
                'category_type' => 2,
                'category_status' => 1,
                'category_order' => 0,
            'category_name' => 'ポータルサイト(定額)',
                'category_desc' => '',
                'category_created' => '2020-03-25 09:52:40',
                'category_updated' => '0000-00-00 00:00:00',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'category_id' => 12,
                'category_type' => 1,
                'category_status' => 1,
                'category_order' => 0,
            'category_name' => '定額(都度払い)',
                'category_desc' => '',
                'category_created' => '2021-06-15 15:54:32',
                'category_updated' => '0000-00-00 00:00:00',
                'category_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}