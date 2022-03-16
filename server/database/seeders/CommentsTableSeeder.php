<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'comment_id' => 1,
                'visit_id' => 7,
                'customer_id' => 2,
                'user_id' => 23,
                'branch_id' => 2,
                'comment_date' => '2020-09-20',
                'comment_content' => 'TESTsfssfdsddfssdfssfsfsdfdfsd',
                'comment_created' => '0000-00-00 00:00:00',
                'comment_updated' => '2020-09-20 13:09:58',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'comment_id' => 2,
                'visit_id' => 5,
                'customer_id' => 1,
                'user_id' => 23,
                'branch_id' => 1,
                'comment_date' => '2020-09-23',
                'comment_content' => 'まとめコメント',
                'comment_created' => '2020-09-23 07:09:41',
                'comment_updated' => '0000-00-00 00:00:00',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'comment_id' => 3,
                'visit_id' => 12,
                'customer_id' => 5,
                'user_id' => 32,
                'branch_id' => 1,
                'comment_date' => '2020-09-24',
                'comment_content' => 'ええええ',
                'comment_created' => '2020-09-24 14:09:40',
                'comment_updated' => '2020-09-24 15:09:12',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'comment_id' => 4,
                'visit_id' => 16,
                'customer_id' => 6,
                'user_id' => 32,
                'branch_id' => 1,
                'comment_date' => '2020-10-01',
                'comment_content' => 'aaa',
                'comment_created' => '2020-10-01 11:10:19',
                'comment_updated' => '0000-00-00 00:00:00',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'comment_id' => 5,
                'visit_id' => 21,
                'customer_id' => 4,
                'user_id' => 35,
                'branch_id' => 2,
                'comment_date' => '2020-10-26',
                'comment_content' => 'あ',
                'comment_created' => '2020-10-26 13:10:40',
                'comment_updated' => '0000-00-00 00:00:00',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'comment_id' => 6,
                'visit_id' => 62,
                'customer_id' => 23,
                'user_id' => 32,
                'branch_id' => 1,
                'comment_date' => '2021-08-02',
                'comment_content' => '',
                'comment_created' => '2021-08-02 16:08:21',
                'comment_updated' => '2021-08-03 11:08:31',
                'comment_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}