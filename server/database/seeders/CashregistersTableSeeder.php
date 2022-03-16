<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CashregistersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cashregisters')->delete();
        
        \DB::table('cashregisters')->insert(array (
            0 => 
            array (
                'cashregsiter_id' => 1,
                'branch_id' => 1,
                'user_id' => 32,
                'cashregsiter_cashsale' => 68200,
                'cashregsiter_cardsale' => 0,
                'cashregsiter_paypaysale' => 0,
                'cashregsiter_banksale' => 0,
                'cashregsiter_subsale' => 0,
                'cashregsiter_cashrefund' => 68200,
                'cashregsiter_cardrefund' => 0,
                'cashregsiter_paypayrefund' => 0,
                'cashregsiter_bankrefund' => 0,
                'cashregsiter_saletotal' => 68200,
                'cashregsiter_refundtotal' => 68200,
                'cashregsiter_cashlastday' => 0,
                'cashregsiter_cashtotal' => 0,
                'cashregsiter_cashavailable' => 3000,
                'cashregsiter_cashnext' => 3000,
                'cashregsiter_cashmove' => -3000,
                'cashregsiter_cashover' => 3000,
                'cashregsiter_cashshort' => 0,
                'cashregsiter_comment' => 'テスト',
                'cashregsiter_date' => '2020-09-16',
                'cashregsiter_created' => '2020-09-16 14:37:08',
                'cashregsiter_updated' => '0000-00-00 00:00:00',
                'cashregsiter_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'cashregsiter_id' => 2,
                'branch_id' => 1,
                'user_id' => 32,
                'cashregsiter_cashsale' => 140800,
                'cashregsiter_cardsale' => 0,
                'cashregsiter_paypaysale' => 0,
                'cashregsiter_banksale' => 0,
                'cashregsiter_subsale' => 0,
                'cashregsiter_cashrefund' => 68200,
                'cashregsiter_cardrefund' => 0,
                'cashregsiter_paypayrefund' => 0,
                'cashregsiter_bankrefund' => 0,
                'cashregsiter_saletotal' => 140800,
                'cashregsiter_refundtotal' => 68200,
                'cashregsiter_cashlastday' => 3000,
                'cashregsiter_cashtotal' => 75600,
                'cashregsiter_cashavailable' => 75600,
                'cashregsiter_cashnext' => 75600,
                'cashregsiter_cashmove' => 0,
                'cashregsiter_cashover' => 0,
                'cashregsiter_cashshort' => 0,
                'cashregsiter_comment' => '',
                'cashregsiter_date' => '2020-09-24',
                'cashregsiter_created' => '2020-09-24 15:18:56',
                'cashregsiter_updated' => '0000-00-00 00:00:00',
                'cashregsiter_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'cashregsiter_id' => 3,
                'branch_id' => 1,
                'user_id' => 50,
                'cashregsiter_cashsale' => 0,
                'cashregsiter_cardsale' => 11600,
                'cashregsiter_paypaysale' => 0,
                'cashregsiter_banksale' => 0,
                'cashregsiter_subsale' => 0,
                'cashregsiter_cashrefund' => 0,
                'cashregsiter_cardrefund' => 0,
                'cashregsiter_paypayrefund' => 0,
                'cashregsiter_bankrefund' => 0,
                'cashregsiter_saletotal' => 11600,
                'cashregsiter_refundtotal' => 0,
                'cashregsiter_cashlastday' => 75600,
                'cashregsiter_cashtotal' => 75600,
                'cashregsiter_cashavailable' => 75600,
                'cashregsiter_cashnext' => 30000,
                'cashregsiter_cashmove' => 45600,
                'cashregsiter_cashover' => 0,
                'cashregsiter_cashshort' => 0,
                'cashregsiter_comment' => '',
                'cashregsiter_date' => '2021-10-29',
                'cashregsiter_created' => '2021-10-29 15:40:48',
                'cashregsiter_updated' => '0000-00-00 00:00:00',
                'cashregsiter_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}