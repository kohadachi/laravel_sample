<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mails')->delete();
        
        \DB::table('mails')->insert(array (
            0 => 
            array (
                'mail_id' => 1,
                'mail_order' => 1,
                'mail_status' => 1,
                'mail_titile' => 'チェックイン承認メール',
            'mail_tags' => '((lastname))
((firstname))
((branchname))
((clickurl))',
                'mail_subject' => 'onlineprescribeのチェックイン確認メール',
            'mail_content' => '((lastname))((firstname))様

onlineprescribe PERSONAL TRAINING GYM　((branchname))へ
御来店いただき誠にありがとうございます。

お手数ですが来店証明として、
下記URLをクリックくださいませ。

((clickurl))

それでは、本日のレッスンをお楽しみください。
引き続きonlineprescribe PERSONAL TRAINING GYMをよろしくお願い致します。

◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
onlineprescribeパーソナルトレーニングジム

【新宿御苑・四谷三丁目店】
〒160-0004
東京都新宿区四谷4-28-6-6F
050-5361-1096
shinjyukuyotsuya@onlineprescribe-gym.com
LINE ID：@rcz2943r

【東新宿店】
〒169-0072
東京都新宿区大久保1-1-45　新宿セントラルハイツ203
050-5361-1095
h-shinjyuku@onlineprescribe-gym.com
LINE ID：@arw2662h

【西新宿店】
〒160-0023
東京都新宿区西新宿4-17-5 T&Kビルディング B1F
050-5438-4575
nishishinjyuku@onlineprescribe-gym.com
LINE ID：@jcr5957l

【池袋・目白店】
〒171-0031‬
東京都豊島区目白1-7-17清幸ビル3F
050-5362-1291‬
ikebukuromejiro@onlineprescribe-gym.com
LINE ID：@974qhpdc

【練馬店】
〒176-0001‬
東京都練馬区練馬一丁目13-10ダイヤコーポB101
050-5374-7976‬
nerima@onlineprescribe-gym.com
LINE ID：@665ghdgl

【若松河田・早稲田店】
〒162-0056
東京都新宿区若松町24-10シャンベール若松町102B
050-5876-7383
wakamatsu@onlineprescribe-gym.com
LINE ID：@236ildtz

★営業時間(全店舗)★
平日 8時00分～22時30分
土日・祝日 8時00分〜21時00分

◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇',
                'mail_updatedby' => 0,
                'mail_created' => '2020-10-23 00:00:00',
                'mail_updated' => '0000-00-00 00:00:00',
                'mail_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'mail_id' => 2,
                'mail_order' => 0,
                'mail_status' => 0,
                'mail_titile' => 'TEST',
                'mail_tags' => '',
                'mail_subject' => '',
                'mail_content' => '',
                'mail_updatedby' => 0,
                'mail_created' => '0000-00-00 00:00:00',
                'mail_updated' => '0000-00-00 00:00:00',
                'mail_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}