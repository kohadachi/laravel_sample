<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'job_id' => 1,
                'job_name' => '社長',
                'job_created' => '2020-04-28 02:56:46',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'job_id' => 2,
                'job_name' => '役員',
                'job_created' => '2020-04-28 02:57:31',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'job_id' => 3,
                'job_name' => '部長',
                'job_created' => '2020-04-28 02:57:59',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'job_id' => 4,
                'job_name' => '会社員',
                'job_created' => '2020-04-28 02:58:13',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'job_id' => 5,
                'job_name' => '公務員',
                'job_created' => '2020-04-28 02:58:30',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'job_id' => 6,
                'job_name' => '医師',
                'job_created' => '2020-04-28 02:58:40',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'job_id' => 7,
                'job_name' => '学生',
                'job_created' => '2020-04-28 02:59:03',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'job_id' => 8,
                'job_name' => 'パート',
                'job_created' => '2020-04-28 02:59:14',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'job_id' => 9,
                'job_name' => '学生',
                'job_created' => '2021-01-01 00:00:00',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'job_id' => 10,
                'job_name' => '専業主婦',
                'job_created' => '2021-01-01 00:00:00',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'job_id' => 11,
                'job_name' => 'その他',
                'job_created' => '2021-01-01 00:00:00',
                'job_updated' => '0000-00-00 00:00:00',
                'job_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}