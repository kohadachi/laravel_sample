<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'branch_id' => 1,
                'position_id' => 0,
                'user_name' => 'admin',
                'user_password' => '$2y$10$I2MgaRc.SxBoj2kBgF2tyOFHAK80XXbQbxbupeg08xWPTtjfb.cIm',
                'user_email' => 'admin@zeyzone.com',
                'user_firstname' => 'ZEYZONE',
                'user_lastname' => 'INC',
                'user_firstnamekana' => '',
                'user_lastnamekana' => '',
                'user_phone' => '',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 1,
                'user_restriction' => '0',
                'user_comment' => '',
                'user_type' => 1,
                'user_status' => 1,
                'user_booking' => 0,
                'user_secret' => 'zeyzoneinc2020',
                'user_image' => '',
                'user_desc' => 'システム管理者です。よろしくお願いいたします。',
                'user_color' => '',
                'user_created' => '2020-01-15 00:00:00',
                'user_updated' => '2020-04-05 17:04:16',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'user_id' => 23,
                'branch_id' => 1,
                'position_id' => 4,
                'user_name' => 'demo',
                'user_password' => '$2y$10$r1it4hdmesUOMcH5KxuPPez7T.CCekWWh/ahpA.F7lnqOA1nzDhrS',
                'user_email' => 'test@test.com',
                'user_firstname' => '山田',
                'user_lastname' => '太郎',
                'user_firstnamekana' => 'ヤマダ',
                'user_lastnamekana' => 'タロウ',
                'user_phone' => '6545644545',
                'user_address' => '東京都港区北青山2-7-20',
                'user_lineid' => 'line_id',
                'user_reward' => 3,
                'user_restriction' => '3',
                'user_comment' => 'テストコメント',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'sdfsdsdsdfsdf',
                'user_image' => '',
                'user_desc' => 'テストプロフィールです。',
                'user_color' => '#ff00ff',
                'user_created' => '2020-01-15 00:00:00',
                'user_updated' => '2021-01-17 08:02:40',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'user_id' => 32,
                'branch_id' => 1,
                'position_id' => 2,
                'user_name' => 'onlineprescribe',
                'user_password' => '$2y$10$H6nEbPh8CpYt34PHxoiREucFD/olGI0I49rcNYm1NRS.6D4I6iyf.',
                'user_email' => 'h-shinjyuku@onlineprescribe-gym.com',
                'user_firstname' => 'onlineprescribe',
                'user_lastname' => '株式会社',
                'user_firstnamekana' => 'onlineprescribe',
                'user_lastnamekana' => '株式会社',
                'user_phone' => '05052387771',
                'user_address' => '東京都新宿区大久保1-1-45　新宿セントラルハイツ203',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 1,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'f340f1b1f65b6df5b5e3f94d95b11daf',
                'user_image' => '',
                'user_desc' => '',
                'user_color' => '#00bfff',
                'user_created' => '2020-01-16 13:45:49',
                'user_updated' => '2021-04-23 14:25:23',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'user_id' => 33,
                'branch_id' => 1,
                'position_id' => 3,
                'user_name' => 'uda',
                'user_password' => '$2y$10$LAY1kj8iv9TYONu1vS/lZOjgIa.xELlK8vWXm5hrHs4CpVqe7sRUe',
                'user_email' => 'uda@eucaly-inc.jp',
                'user_firstname' => 'ユーカリ',
                'user_lastname' => 'テスト',
                'user_firstnamekana' => 'ユーカリ',
                'user_lastnamekana' => 'テスト',
                'user_phone' => '08043236593',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 1,
                'user_restriction' => '1',
                'user_comment' => 'テストです。',
                'user_type' => 2,
                'user_status' => 0,
                'user_booking' => 1,
                'user_secret' => '35051070e572e47d2c26c241ab88307f',
                'user_image' => '',
                'user_desc' => '',
                'user_color' => '',
                'user_created' => '2020-02-17 17:28:24',
                'user_updated' => '2020-10-07 14:25:47',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'user_id' => 34,
                'branch_id' => 2,
                'position_id' => 2,
                'user_name' => 'tanimoto',
                'user_password' => '$2y$10$0G1SxZ7.rz.CGncatZFJHOSwDYVLNX0B2Zho5H0/c2QvpSgF8t.4W',
                'user_email' => 'tanimooooo@gmail.com',
                'user_firstname' => '谷本',
                'user_lastname' => '拓弥',
                'user_firstnamekana' => 'タニモト',
                'user_lastnamekana' => 'タクヤ',
                'user_phone' => '08035008669',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 1,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'da0d1111d2dc5d489242e60ebcbaf988',
                'user_image' => '',
                'user_desc' => '',
                'user_color' => '',
                'user_created' => '2020-03-26 11:24:59',
                'user_updated' => '2020-10-26 14:31:45',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'user_id' => 35,
                'branch_id' => 6,
                'position_id' => 2,
                'user_name' => 'yajima',
                'user_password' => '$2y$10$abkvQHqG2QxY/q8pZPUyxOY2JMSq3Qr9J32G09unV84SsesxN7cXy',
                'user_email' => 'yuking.0529@gmail.com',
                'user_firstname' => '矢島',
                'user_lastname' => '優樹',
                'user_firstnamekana' => 'ヤジマ',
                'user_lastnamekana' => 'ユウキ',
                'user_phone' => '09074116367',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 1,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '0fcbc61acd0479dc77e3cccc0f5ffca7',
                'user_image' => 'user5fe53b155491cprofile-35.png',
                'user_desc' => '日本大学文理学部体育学科卒業後、都内の業界最大手パーソナルジムに就職。約7年間の在籍で1万本以上のセッションを実施。延べ数百人にも及ぶクライアントの痩せたい、筋肉をつけたい、健康になりたいという方の目的達成に成功。
クライアントは一般の方から芸能人やアスリートまで多岐に渡り、現役オリンピック選手のトレーニング指導や、プロ野球選手の海外キャンプなどの帯同も経験。経験と理論に基づいたトレーニング指導と的確な食事改善のアドバイスでクライアントのボディメイクをサポートする。',
                'user_color' => '#dc143c',
                'user_created' => '2020-03-26 11:29:49',
                'user_updated' => '2020-12-25 10:35:22',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'user_id' => 36,
                'branch_id' => 3,
                'position_id' => 3,
                'user_name' => 'kubo',
                'user_password' => '$2y$10$AEywEvCoKK3t3SsfCWIY1unTi/thrYbGWWQ.T8Rya6UM.jWUKE/0G',
                'user_email' => 'yuji.kubo.0328@gmail.com',
                'user_firstname' => '久保',
                'user_lastname' => '悠治',
                'user_firstnamekana' => 'クボ',
                'user_lastnamekana' => 'ユウジ',
                'user_phone' => '09074198879',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '7c590f01490190db0ed02a5070e20f01',
                'user_image' => 'user5fe53ad6d6ce2profile-36.png',
                'user_desc' => '',
                'user_color' => '',
                'user_created' => '2020-03-26 11:32:10',
                'user_updated' => '2020-12-25 10:05:35',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'user_id' => 37,
                'branch_id' => 4,
                'position_id' => 2,
                'user_name' => 'yanagisawa',
                'user_password' => '$2y$10$HI8z0jh64en.YSHq7X0g4OtL63FsVkd9WeC0RTO80TAf.dt6tZ.dy',
                'user_email' => 'yu10.177777@gmail.com',
                'user_firstname' => '柳澤',
                'user_lastname' => '優斗',
                'user_firstnamekana' => 'ヤナギサワ',
                'user_lastnamekana' => 'ユウト',
                'user_phone' => '08037180335',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '池袋オーナー、東新宿トレーナー',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'c203d8a151612acf12457e4d67635a95',
                'user_image' => 'user5e9fefb368e65profile-37.png',
                'user_desc' => '高校サッカー部時代からウエイトトレーニングに興味を持つ。引退後もボディメイクを目的としてトレーニングを続け、国内最大規模のボディビル大会『ベストボディジャパン』に出場。月間約150本のパーソナルトレーニングをこなし、これまで一般の方から、スポーツ選手、芸能人、モデルなどを指導し、大会出場を目的とする方も指導している。
「正しく結果の出るトレーニングをもっと多くの方に伝えていきたい」という熱い想いを持ったトレーナー。',
                'user_color' => '#ffa500',
                'user_created' => '2020-03-26 11:33:47',
                'user_updated' => '2020-12-25 10:31:46',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'user_id' => 38,
                'branch_id' => 5,
                'position_id' => 2,
                'user_name' => 'fujii',
                'user_password' => '$2y$10$WtglZaukutCkuc6sJWe9duXU9zTRIh.ioMUquf29i/qwH9vtiueIS',
                'user_email' => 'f.ryo.fitness@gmail.com',
                'user_firstname' => '藤井',
                'user_lastname' => '遼',
                'user_firstnamekana' => 'フジイ',
                'user_lastnamekana' => 'リョウ',
                'user_phone' => '09053934516',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'd96409bf894217686ba124d7356686c9',
                'user_image' => '',
                'user_desc' => '',
                'user_color' => '#ff00ff',
                'user_created' => '2020-04-13 14:13:01',
                'user_updated' => '2020-12-25 10:32:43',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'user_id' => 39,
                'branch_id' => 1,
                'position_id' => 4,
                'user_name' => 'aoyagi',
                'user_password' => '$2y$10$dDLdsuxwGXhwQrfRdGs73e2qK0iw/Nz9cUeen8OBqWQwo5Bv.zPNm',
                'user_email' => 'r.yagi.1994@gmail.com',
                'user_firstname' => '青柳',
                'user_lastname' => '諒',
                'user_firstnamekana' => 'アオヤギ',
                'user_lastnamekana' => 'リョウ',
                'user_phone' => '09046798235',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 3,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '2d6cc4b2d139a53512fb8cbb3086ae2e',
                'user_image' => 'user5e9ff006f1816profile-39.png',
                'user_desc' => '野球10年、格闘技1年の経験があり、大手フィットネスジムの第一線でパーソナルトレーニングの指導経験を持つ。業界最大の認定パーソナルトレーナー資格NSCA-CPTを保有。英語力を活かして外国人トレーニーとのセッションも数多くこなす国際派プロトレーナー。月120本以上のパーソナルトレーニングを担当し、体の使い方、ウェイトトレーニングの知識に絶対の自信がある。情熱溢れる指導が好評。

指導経歴
大手フィットネスジムにてパーソナルトレーニング指導

指導資格 NSCA-CPT',
                'user_color' => '#483d8b',
                'user_created' => '2020-04-13 14:14:28',
                'user_updated' => '2020-12-25 10:30:22',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'user_id' => 40,
                'branch_id' => 2,
                'position_id' => 4,
                'user_name' => 'tsuruta',
                'user_password' => '$2y$10$/MdlM5lsTkUxeKMskI3nCenbIiYZJ2isujWyfIs9SJOt.ingXZegy',
                'user_email' => 'papapapapapapie@gmail.com',
                'user_firstname' => '鶴田',
                'user_lastname' => '佑助',
                'user_firstnamekana' => 'ツルタ',
                'user_lastnamekana' => 'ユウスケ',
                'user_phone' => '08033182933',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'fc8001f834f6a5f0561080d134d53d29',
                'user_image' => 'user5e9ff16e9e374profile-40.png',
                'user_desc' => '高校を卒業後、陸上自衛隊で約７年間勤務。自衛隊で最も過酷と言われるレンジャー課程を卒業し、アフリカのジブチ共和国への海外派遣や東日本大震災の人道復興支援などに携わる。
2014年、国内最多のパーソナル本数を誇る大手ジムに転職。年間2000本以上のセッションをこなし、トップアスリートや一流モデル、芸能人も数多く指導。豊富なトレーナー経験を活かしてお客様のニーズに合ったカラダを実現する。

資格
◉全米エクササイズ&コンディショニング認定トレーナー
◉赤十字ベーシックライフサポーター',
                'user_color' => '#008000',
                'user_created' => '2020-04-13 14:15:59',
                'user_updated' => '2020-12-25 10:28:43',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'user_id' => 41,
                'branch_id' => 2,
                'position_id' => 4,
                'user_name' => 'takanashi',
                'user_password' => '$2y$10$ekkrGVsjWZ4..DjCWdLEtON2y8DTVR7CPppgQwARAACH/pzWAUmjq',
                'user_email' => 'nashi37226@gmail.com',
                'user_firstname' => '高梨',
                'user_lastname' => '潮',
                'user_firstnamekana' => 'タカナシ',
                'user_lastnamekana' => 'ウシオ',
                'user_phone' => '08066336484',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 4,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'be83ab3ecd0db773eb2dc1b0a17836a1',
                'user_image' => 'user5e9ff3073a860profile-41.png',
                'user_desc' => '都内にあるトレーナー専門学校を卒業し、某大手パーソナルジムに就職。月間約180本のセッションをこなし、一般の方から、芸能人、モデルなどを指導し、大会出場を目的とする方も指導。
自身も大会に出場しておりクラス別準優勝など成績を収めている。幅広い知識と経験を元にお客様のニーズにコミットし理想の身体を実現します。「楽しくボディメイク・人生を幸せにする」をモットーに日々のセッションを行います。

資格
JATI-ATI
健康運動実践指導者
自然体験活動指導者(NEAL)',
                'user_color' => '#0000ff',
                'user_created' => '2020-04-13 14:17:17',
                'user_updated' => '2020-12-25 10:28:14',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'user_id' => 42,
                'branch_id' => 6,
                'position_id' => 4,
                'user_name' => 'murai',
                'user_password' => '$2y$10$HWwKenktD0muqgjVaBv./uiCvniU23s1tBtDgbPW/fLe7brl.6Iz2',
                'user_email' => 'sm.workout1@gmail.com',
                'user_firstname' => '村井',
                'user_lastname' => '信龍',
                'user_firstnamekana' => 'ムライ',
                'user_lastnamekana' => 'シンリュウ',
                'user_phone' => '09096826156',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 1,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '55743cc0393b1cb4b8b37d09ae48d097',
                'user_image' => 'user5e9ff1ffa7c11profile-42.png',
                'user_desc' => '日本大学文理学部英文学科卒業。国内最大手のパーソナルトレーニングジムに就職。一般の方からアスリート、芸能人に至るまで年間2000本以上のセッションを担当。
自身では2016年よりボディビル、フィジークといったコンテストへ出場し、優勝経験もある。
数多くのセッションや自身のトレーニング経験を通じ、クライアントの抱える悩みや目標に適切にアプローチする。

資格
全米エクササイズ&コンディショニング認定トレーナー',
                'user_color' => '#00bfff',
                'user_created' => '2020-04-13 14:18:34',
                'user_updated' => '2020-12-25 10:27:43',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'user_id' => 43,
                'branch_id' => 5,
                'position_id' => 4,
                'user_name' => 'suzuki',
                'user_password' => '$2y$10$RMyf.VqTtFttd1oL3cOTpu4mVxhZ77dlLkOFG7hbgMyyxLcADHTg6',
                'user_email' => 'suzumako.0806@gmail.com',
                'user_firstname' => '鈴木',
                'user_lastname' => '誠人',
                'user_firstnamekana' => 'スズキ',
                'user_lastnamekana' => 'マコト',
                'user_phone' => '07036044523',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '69adc1e107f7f7d035d7baf04342e1ca',
                'user_image' => 'user5fe53f2b65300profile-43.png',
                'user_desc' => '小学校から野球を始め高校2年で肩や肘の怪我が続き引退。
中学生の頃からトレーナーに興味を持ち、高校生の頃の怪我で悩んだ経験から、自分以外が誤った運動で怪我をしないようにと、トレーナーの専門学校に進学し、体の仕組みやメカニズムを学ぶ。

自身もトレーニングに励み、ボディメイクコンテストにも出場。

トレーニングや食事管理によって体に変化が出る事の嬉しさや楽しさ、素晴らしさを広めたいという信念から、パーソナルトレーニングジムに勤務しつつ、フリーランスのパーソナルトレーナーとしても活動し、数多くのセッションを行う。

数多くの経験、知識をもとに「キツイけど楽しい」をモットーにお客様を最大限にサポートしていきます。

資格
NSCA-CPT',
                'user_color' => '#ffd700',
                'user_created' => '2020-04-13 14:19:51',
                'user_updated' => '2020-12-25 10:24:27',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'user_id' => 44,
                'branch_id' => 3,
                'position_id' => 2,
                'user_name' => 'hirasawa',
                'user_password' => '$2y$10$Zzd1pss4wBayTEMnI/kn6.by8UqT15/tRCfmMJtAq2i7kD2n68sum',
                'user_email' => 'khkhkh0715@gmail.com',
                'user_firstname' => '平澤',
                'user_lastname' => '一憲',
                'user_firstnamekana' => 'ヒラサワ',
                'user_lastnamekana' => 'カズノリ',
                'user_phone' => '09015515599',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'e44fea3bec53bcea3b7513ccef5857ac',
                'user_image' => 'user5e9ff043d5922profile-44.png',
                'user_desc' => '2008年専門学校卒業後、コンディショニングトレーナーの第一人者である有吉与志恵氏監修のパーソナルトレーニングジムに就職。店舗責任者、トレーナー育成の役職を経験し、大手フィットネスクラブ店舗売上NO.1の実績を持つ。2016年フリーランスのトレーナーとして活動開始。
自身のボディメイクにも力を入れており、2018年ベストボディジャパン福島大会グランプリ獲得、同日本大会出場。10年間で1万セッション以上を実施。多くのセッションと自身のトレーニング経験から得た技術は、ボディメイクはもちろんのこと、機能改善、疼痛改善などあらゆる要望に対応し、クライアントを最短距離で目標達成まで導く。',
                'user_color' => '',
                'user_created' => '2020-04-13 14:21:12',
                'user_updated' => '2020-04-22 16:20:51',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'user_id' => 45,
                'branch_id' => 4,
                'position_id' => 4,
                'user_name' => 'oneda',
                'user_password' => '$2y$10$d8xkeJnfE.BTeGF73kDDNeETGvCcV.S6xPH1znf2DTXXV/KOCv1v.',
                'user_email' => 'oneda1520082@gmail.com',
                'user_firstname' => '大根田',
                'user_lastname' => '貴之',
                'user_firstnamekana' => 'オオネダ',
                'user_lastnamekana' => 'タカユキ',
                'user_phone' => '08030859115',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '3fe94a002317b5f9259f82690aeea4cd',
                'user_image' => 'user5fe53a542f397profile-45.png',
                'user_desc' => '小学生時代から13年間のサッカー歴。 専門学校時代にトレーニング を始める。 
自己流のトレーニングでは筋肉の発達がいまいちな事を感じ、onlineprescribeトレーナーの柳澤にトレーニングを教わる。

正しいトレーニング、正しい栄養の摂取の大切さ、トレーニングの無限の可能性を知りトレーニングにさらに熱が入る。 大手企業で3年経験後onlineprescribeに加入。 onlineprescribe加入1年未満の時、初出場の大会、サマースタイルアワードで部門優勝。 常にお客様の目線に立ち、目標達成を第一に考える。',
                'user_color' => '#808000',
                'user_created' => '2020-04-13 14:22:56',
                'user_updated' => '2020-12-25 10:34:07',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'user_id' => 46,
                'branch_id' => 4,
                'position_id' => 4,
                'user_name' => 'ohashi',
                'user_password' => '$2y$10$VaIGoU9MYzZykmouAEyTJuAqZwL2/VvaAefMQOwVKUdXL2.bWWi1C',
                'user_email' => 'shujimarines71@gmail.com',
                'user_firstname' => '大橋',
                'user_lastname' => '修治',
                'user_firstnamekana' => 'オオハシ',
                'user_lastnamekana' => 'シュウジ',
                'user_phone' => '08066189123',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '6a9aeddfc689c1d0e3b9ccc3ab651bc5',
                'user_image' => 'user5e9ff1b4efc16profile-46.png',
                'user_desc' => '中学生から器械体操を始め、駒澤大学高等学校3年時にインターハイに出場。大学で器械体操を続けるも、相次ぐ怪我の経験からトレーニングの重要性に気付く。正しいトレーニングを学ぶため、専門学校に進学し、競技に合わせたトレーニングやパフォーマンスアップのノウハウを学ぶ。
プロのアスリートから一般の方、学生まで多くのお客様を指導。楽しく長くをモットーにお客様のニーズに合わせたトレーニングを行う。

資格
NSCA認定パーソナルトレーナー',
                'user_color' => '#ffd700',
                'user_created' => '2020-04-13 14:24:07',
                'user_updated' => '2020-12-25 10:26:55',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'user_id' => 47,
                'branch_id' => 5,
                'position_id' => 4,
                'user_name' => 'nawa',
                'user_password' => '$2y$10$tPDXDmX/BMKVvylIvRrEsudSU4rTfllSPM45KSgv6/NW.lVUgXlMG',
                'user_email' => 'nwnts0302@gmail.com',
                'user_firstname' => '名和',
                'user_lastname' => '大志',
                'user_firstnamekana' => 'ナワ',
                'user_lastnamekana' => 'タイシ',
                'user_phone' => '07038723343',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 1,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => 'c15da1f2b5e5ed6e6837a3802f0d1593',
                'user_image' => 'user5fe539f425d4bprofile-47.png',
                'user_desc' => 'サッカーでプロを目指し、高校1年生まで続けていたが怪我により引退。
自分が行っていたトレーニングや食事が正しかったのか疑問に思い、3年間専門学校に通い、確かな知識を得る。

トレーニングや食事についてのノウハウを学び、より多くの人に正しいものを広めたいと、学生時代からパーソナルトレーニングジムに勤務し、1日10本前後のセッションを行う。

自身もボディメイクコンテストに向けて増量や減量を経験。
確かな知識と経験をもとに、お客様の目標まで安全に、効率よく、楽しく、トレーニングをサポートしていく。',
                'user_color' => '#fa8072',
                'user_created' => '2020-04-13 14:25:10',
                'user_updated' => '2020-12-25 10:26:13',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'user_id' => 48,
                'branch_id' => 2,
                'position_id' => 4,
                'user_name' => 'nishimoto',
                'user_password' => '$2y$10$.3CP72O9mhYQYDtGXZAjTOA0XTyIT3MiZKs9OPu6nJ2n2dHnqWIsO',
                'user_email' => 'ny.cliff.amo.calcio@gmail.com',
                'user_firstname' => '西本',
                'user_lastname' => '悠哉',
                'user_firstnamekana' => 'ニシモト',
                'user_lastnamekana' => 'ユウヤ',
                'user_phone' => '09069343790',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 0,
                'user_booking' => 1,
                'user_secret' => '66368270ffd51418ec58bd793f2d9b1b',
                'user_image' => 'user5fe53cd5cff44profile-48.png',
                'user_desc' => '都内トレーナーコースの大学を卒業後、都内最大手パーソナルジムへ就職。年間2000本のセッションをこなし、数多くの著名人も指導。

自身の趣味である料理を活かし、減量メニューの提案など、クライアントの目的とする身体へトレーニング、食事からのアプローチを得意とする。 「トレーニングも食事も全て楽しむ」をモットーにクライアントへの指導に定評がある。',
                'user_color' => '#dc143c',
                'user_created' => '2020-04-22 16:24:24',
                'user_updated' => '2020-12-25 10:25:10',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'user_id' => 49,
                'branch_id' => 5,
                'position_id' => 4,
                'user_name' => 'misumi',
                'user_password' => '$2y$10$qtrOSNpXbbfKsFQyBMkhdO.8KfwNNw7/kGN7k6ybyo72ErF/a3oC6',
                'user_email' => 'tetta128.physique@gmail.com',
                'user_firstname' => '三角',
                'user_lastname' => '哲大',
                'user_firstnamekana' => 'ミスミ',
                'user_lastnamekana' => 'テッタ',
                'user_phone' => '07035379572',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 2,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '3a835d3215755c435ef4fe9965a3f2a0',
                'user_image' => 'user5fe545675fe2aprofile-49.png',
                'user_desc' => '都内の専門学校を卒業後、パーソナルトレーニングジムで活動。 専門学校に在学中、理想のトレーナー像を目指し、ウェイトトレーニングを始める。 自身もボディメイクコンテストに出場。

その実体験と学んだ知識を元に、「痩せたい」「太りたい」という目標により効率的かつお客様のニーズに合わせてアプローチをする。 身体を変化させるのは「大変」ではなく「楽しい」と思えるセッションを行う。',
                'user_color' => '#7cfc00',
                'user_created' => '2020-12-25 10:50:10',
                'user_updated' => '2020-12-25 10:51:12',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'user_id' => 50,
                'branch_id' => 1,
                'position_id' => 2,
                'user_name' => 'testuda',
                'user_password' => '$2y$10$r2/UVU7WlszZWtLQbR.AkOWkGoZasDY/E8dXIgbCWH9M57SqOfZO6',
                'user_email' => 'a@gmail.com',
                'user_firstname' => '宇田',
                'user_lastname' => 'test',
                'user_firstnamekana' => 'ウダ',
                'user_lastnamekana' => 'テスト',
                'user_phone' => '09098765432',
                'user_address' => '',
                'user_lineid' => '',
                'user_reward' => 1,
                'user_restriction' => '',
                'user_comment' => '',
                'user_type' => 2,
                'user_status' => 1,
                'user_booking' => 1,
                'user_secret' => '07cdfd23373b17c6b337251c22b7ea57',
                'user_image' => '',
                'user_desc' => '',
                'user_color' => '#191970',
                'user_created' => '2021-08-03 13:54:21',
                'user_updated' => '0000-00-00 00:00:00',
                'user_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}