<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'setting_id' => 1,
                'setting_sitename' => 'onlineprescribe-GYM',
                'setting_siteurl' => 'https://test.onlineprescribe-gym.com',
                'setting_email' => 'info@onlineprescribe-gym.com',
                'setting_manager' => '管理者',
                'setting_apipublic' => 'pk_test_zwAtF8AB3DJ7De6nEEy98aqt00bObIhA33',
                'setting_apisecret' => 'sk_test_u6evNRAJqmHvAGpresIbgqvJ00wBkZ5rIB',
                'setting_stripefee' => 360,
                'setting_bank' => 1,
                'setting_bankinfo' => '',
                'setting_paypay' => 1,
                'setting_cash' => 1,
                'setting_created' => '0000-00-00 00:00:00',
                'setting_updated' => '2020-04-20 03:50:39',
                'setting_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}