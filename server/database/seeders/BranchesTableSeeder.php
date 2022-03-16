<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branches')->delete();
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'branch_id' => 1,
                'branch_name' => '東新宿店',
                'state_id' => 13,
                'branch_city' => '新宿区',
                'branch_address' => '大久保1-1-45　新宿セントラルハイツ203',
                'branch_phone' => '050-5361-1095',
                'branch_lineid' => '@arw2662h',
                'branch_email' => 'h-shinjyuku@onlineprescribe-gym.com',
                'branch_map' => 'https://www.google.com/maps?ll=35.698496,139.707293&z=17&t=m&hl=ja-JP&gl=JP&mapclient=embed&q=%E6%96%B0%E5%AE%BF%E3%82%BB%E3%83%B3%E3%83%88%E3%83%A9%E3%83%AB%E3%83%8F%E3%82%A4%E3%83%84%E3%83%97%E3%83%A9%E3%82%B6+%E3%80%92169-0072+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E5%A4%A7%E4%B9%85%E4%BF%9D%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%91%E2%88%92%EF%BC%94%EF%BC%95',
                'branch_access' => '1階が東新宿食堂
東新宿駅A1出口もしくはB1出口から徒歩1分
新宿駅、東南口、東口から徒歩15分
新大久保駅より徒歩10分
若松河田駅、西早稲田駅より徒歩13分',
                'branch_desc' => '時間外対応可能 要相談',
                'branch_url' => 'https://onlineprescribe-gym.com/',
                'branch_starttime' => '08:00:00',
                'branch_endtime' => '22:30:00',
                'branch_members' => 2,
                'branch_status' => 1,
                'branch_created' => '2020-01-16 07:00:00',
                'branch_updated' => '2020-10-26 14:12:20',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'branch_id' => 2,
                'branch_name' => '新宿御苑・四谷三丁目店',
                'state_id' => 13,
                'branch_city' => '新宿区',
                'branch_address' => '四谷4-28-6-6F',
                'branch_phone' => '050-5361-1096',
                'branch_lineid' => '@rcz2943r',
                'branch_email' => 'shinjyukuyotsuya@onlineprescribe-gym.com',
                'branch_map' => 'https://www.google.com/maps?ll=35.687742,139.715537&z=17&t=m&hl=ja-JP&gl=JP&mapclient=embed&q=6F+%E3%80%92160-0004+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E5%9B%9B%E8%B0%B7%EF%BC%94%E4%B8%81%E7%9B%AE%EF%BC%92%EF%BC%98%E2%88%92%EF%BC%96',
                'branch_access' => '新宿御苑駅 2番出口 徒歩5分
四谷三丁目 2番出口 徒歩5分
新宿三丁目駅 C8 徒歩12分
曙橋 A1 徒歩10分
千駄ヶ谷駅、信濃町駅 徒歩14分',
                'branch_desc' => '時間外対応可能 要相談',
                'branch_url' => 'https://onlineprescribe-gym.com',
                'branch_starttime' => '08:00:00',
                'branch_endtime' => '22:30:00',
                'branch_members' => 2,
                'branch_status' => 1,
                'branch_created' => '2020-01-16 06:00:00',
                'branch_updated' => '2020-03-26 16:57:57',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'branch_id' => 3,
                'branch_name' => '西新宿店',
                'state_id' => 13,
                'branch_city' => '新宿区',
                'branch_address' => '西新宿4-17-5 T&Kビルディング B1F',
                'branch_phone' => '050-5438-4575',
                'branch_lineid' => '@jcr5957l',
                'branch_email' => 'nishishinjyuku@onlineprescribe-gym.com',
                'branch_map' => 'https://www.google.com/maps?ll=35.688945,139.687622&z=18&t=m&hl=ja-JP&gl=US&mapclient=embed&q=%E3%80%92160-0023+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E8%A5%BF%E6%96%B0%E5%AE%BF%EF%BC%94%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%97%E2%88%92%EF%BC%95',
                'branch_access' => '西新宿五丁目駅 徒歩5分
都庁前駅　徒歩5分
西新宿駅　徒歩10分
初台駅　徒歩10分',
                'branch_desc' => '間外対応可能 要相談',
                'branch_url' => 'https://onlineprescribe-gym.com',
                'branch_starttime' => '08:00:00',
                'branch_endtime' => '22:30:00',
                'branch_members' => 0,
                'branch_status' => 1,
                'branch_created' => '2020-02-09 12:25:29',
                'branch_updated' => '2020-02-17 16:15:02',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'branch_id' => 4,
                'branch_name' => '池袋・目白店',
                'state_id' => 13,
                'branch_city' => '豊島区',
                'branch_address' => '目白1-7-17清幸ビル3F',
                'branch_phone' => '050-5362-1291',
                'branch_lineid' => '@974qhpdc',
                'branch_email' => 'ikebukuromejiro@onlineprescribe-gym.com',
                'branch_map' => 'https://www.google.com/maps?ll=35.718961,139.713068&z=18&t=m&hl=ja-JP&gl=US&mapclient=embed&q=%E6%B8%85%E5%B9%B8%E3%83%93%E3%83%AB+3F+%E3%80%92171-0031+%E6%9D%B1%E4%BA%AC%E9%83%BD%E8%B1%8A%E5%B3%B6%E5%8C%BA%E7%9B%AE%E7%99%BD%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%97',
                'branch_access' => '雑司が谷駅 3番出口徒歩1分‬
‪ 目白駅徒歩 5分‬
‪池袋徒歩 15分',
                'branch_desc' => '時間外対応可能 要相談',
                'branch_url' => 'https://onlineprescribe-gym.com',
                'branch_starttime' => '08:00:00',
                'branch_endtime' => '22:30:00',
                'branch_members' => 0,
                'branch_status' => 1,
                'branch_created' => '2020-02-09 12:26:32',
                'branch_updated' => '2020-03-04 10:47:08',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'branch_id' => 5,
                'branch_name' => '練馬店',
                'state_id' => 13,
                'branch_city' => '練馬区',
                'branch_address' => '練馬一丁目13-10ダイヤコーポB101',
                'branch_phone' => '050-5374-7976',
                'branch_lineid' => '@665ghdgl',
                'branch_email' => 'nerima@onlineprescribe-gym.com',
                'branch_map' => 'https://www.google.com/maps/search/ダイヤコーポ+B101+〒176-0001+東京都練馬区練馬%EF%BC%91丁目%EF%BC%91%EF%BC%93−%EF%BC%91%EF%BC%90/@35.738289,139.652004,18z?hl=ja-JP',
                'branch_access' => '練馬駅北口徒歩1分',
                'branch_desc' => '時間外対応可能 要相談',
                'branch_url' => 'https://onlineprescribe-gym.com',
                'branch_starttime' => '08:00:00',
                'branch_endtime' => '22:30:00',
                'branch_members' => 0,
                'branch_status' => 1,
                'branch_created' => '2020-02-17 16:24:54',
                'branch_updated' => '0000-00-00 00:00:00',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'branch_id' => 6,
                'branch_name' => '若松河田・早稲田店',
                'state_id' => 13,
                'branch_city' => '新宿区',
                'branch_address' => '若松町24-10シャンベール若松町102B',
                'branch_phone' => '050 5876 7383',
                'branch_lineid' => '@236ildtz',
                'branch_email' => 'wakamatsu@onlineprescribe-gym.com',
                'branch_map' => '',
                'branch_access' => ' 若松河田駅　河田口徒歩3分
早稲田駅　2番出口徒歩10分',
                'branch_desc' => '時間外対応可能 要相談',
                'branch_url' => '',
                'branch_starttime' => '09:00:00',
                'branch_endtime' => '21:00:00',
                'branch_members' => 2,
                'branch_status' => 1,
                'branch_created' => '2020-11-28 23:41:23',
                'branch_updated' => '2020-11-28 23:47:56',
                'branch_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}