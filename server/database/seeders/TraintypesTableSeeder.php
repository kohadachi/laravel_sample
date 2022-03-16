<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TraintypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('traintypes')->delete();
        
        \DB::table('traintypes')->insert(array (
            0 => 
            array (
                'traintype_id' => 1,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'スクワット',
                'traintype_created' => '2020-09-20 22:45:02',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'traintype_id' => 2,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'スミススクワット',
                'traintype_created' => '2020-09-20 22:45:13',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'traintype_id' => 3,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'ワイドスクワット',
                'traintype_created' => '2020-09-20 22:45:26',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'traintype_id' => 4,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'スミスワイドスクワット',
                'traintype_created' => '2020-09-20 22:45:36',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'traintype_id' => 5,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'シッシースクワット',
                'traintype_created' => '2020-09-20 22:45:45',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'traintype_id' => 6,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'シングルレッグSQ（TRX）',
                'traintype_created' => '2020-09-20 22:45:54',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'traintype_id' => 7,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'アダクション',
                'traintype_created' => '2020-09-20 22:46:02',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'traintype_id' => 8,
                'traincat_id' => 1,
                'user_id' => 1,
                'traintype_name' => 'レッグEX',
                'traintype_created' => '2020-09-20 22:46:12',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'traintype_id' => 9,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'ブルガリアンSQ',
                'traintype_created' => '2020-09-20 22:46:30',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'traintype_id' => 10,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'デッドリフト',
                'traintype_created' => '2020-09-20 22:46:37',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'traintype_id' => 11,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'ワンレッグDL',
                'traintype_created' => '2020-09-20 22:46:47',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'traintype_id' => 12,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'ダンベルレッグカール',
                'traintype_created' => '2020-09-20 22:47:05',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'traintype_id' => 13,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'アブダクション',
                'traintype_created' => '2020-09-20 22:47:13',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'traintype_id' => 14,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'ヒップスラスト',
                'traintype_created' => '2020-09-20 22:47:20',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'traintype_id' => 15,
                'traincat_id' => 2,
                'user_id' => 1,
                'traintype_name' => 'ヒップリフト',
                'traintype_created' => '2020-09-20 22:48:10',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'traintype_id' => 16,
                'traincat_id' => 3,
                'user_id' => 1,
            'traintype_name' => 'ラットプルダウン(フロント)',
                'traintype_created' => '2020-09-20 22:50:20',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'traintype_id' => 17,
                'traincat_id' => 3,
                'user_id' => 1,
            'traintype_name' => 'ラットプルダウン(ビハインドネック)',
                'traintype_created' => '2020-09-20 22:50:29',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'traintype_id' => 18,
                'traincat_id' => 3,
                'user_id' => 1,
            'traintype_name' => 'ラットプルダウン(逆手)',
                'traintype_created' => '2020-09-20 22:50:37',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'traintype_id' => 19,
                'traincat_id' => 3,
                'user_id' => 1,
            'traintype_name' => 'ラットプルダウン(vバー)',
                'traintype_created' => '2020-09-20 22:50:45',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'traintype_id' => 20,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'シーテッドロー',
                'traintype_created' => '2020-09-20 22:50:53',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'traintype_id' => 21,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'ワンハンドロウ',
                'traintype_created' => '2020-09-20 22:50:59',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'traintype_id' => 22,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'チンニング',
                'traintype_created' => '2020-09-20 22:51:05',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'traintype_id' => 23,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'ダンベルプルオーバー',
                'traintype_created' => '2020-09-20 22:51:12',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'traintype_id' => 24,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'ベントオーバーロー（順手）',
                'traintype_created' => '2020-09-20 22:51:20',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'traintype_id' => 25,
                'traincat_id' => 3,
                'user_id' => 1,
                'traintype_name' => 'ベントオーバーロー（逆手）',
                'traintype_created' => '2020-09-20 22:51:27',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'traintype_id' => 26,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'ベンチプレス',
                'traintype_created' => '2020-09-20 22:51:49',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'traintype_id' => 27,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'インクラインベンチプレス',
                'traintype_created' => '2020-09-20 22:51:55',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'traintype_id' => 28,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'ダンベルプレス',
                'traintype_created' => '2020-09-20 22:52:01',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'traintype_id' => 29,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'ダンベルフライ',
                'traintype_created' => '2020-09-20 22:52:07',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'traintype_id' => 30,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'インクラインダンベルプレス',
                'traintype_created' => '2020-09-20 22:52:17',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'traintype_id' => 31,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'インクラインダンベルフライ',
                'traintype_created' => '2020-09-20 22:52:24',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'traintype_id' => 32,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'プッシュアップ',
                'traintype_created' => '2020-09-20 22:52:30',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'traintype_id' => 33,
                'traincat_id' => 4,
                'user_id' => 1,
                'traintype_name' => 'ケーブルクロスオーバー',
                'traintype_created' => '2020-09-20 22:52:36',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'traintype_id' => 34,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'フロントレイズ',
                'traintype_created' => '2020-09-20 22:52:55',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'traintype_id' => 35,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'インクラインフロントレイズ',
                'traintype_created' => '2020-09-20 22:53:04',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'traintype_id' => 36,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'サイドレイズ',
                'traintype_created' => '2020-09-20 22:53:12',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'traintype_id' => 37,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'インクラインサイドレイズ',
                'traintype_created' => '2020-09-20 22:53:21',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'traintype_id' => 38,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'リアレイズ',
                'traintype_created' => '2020-09-20 22:53:27',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'traintype_id' => 39,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'barショルダープレス',
                'traintype_created' => '2020-09-20 22:53:34',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'traintype_id' => 40,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'ダンベルショルダープレス',
                'traintype_created' => '2020-09-20 22:53:40',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'traintype_id' => 41,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'アーノルドプレス',
                'traintype_created' => '2020-09-20 22:53:46',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'traintype_id' => 42,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'アップライトロウ',
                'traintype_created' => '2020-09-20 22:54:03',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'traintype_id' => 43,
                'traincat_id' => 5,
                'user_id' => 1,
                'traintype_name' => 'シュラッグ',
                'traintype_created' => '2020-09-20 22:54:10',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'traintype_id' => 44,
                'traincat_id' => 6,
                'user_id' => 1,
                'traintype_name' => 'ダンベルアームカール',
                'traintype_created' => '2020-09-20 22:54:45',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'traintype_id' => 45,
                'traincat_id' => 6,
                'user_id' => 1,
                'traintype_name' => 'バーベルアームカール',
                'traintype_created' => '2020-09-20 22:54:55',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'traintype_id' => 46,
                'traincat_id' => 6,
                'user_id' => 1,
                'traintype_name' => 'インクラインダンベルカール',
                'traintype_created' => '2020-09-20 22:55:02',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'traintype_id' => 47,
                'traincat_id' => 6,
                'user_id' => 1,
                'traintype_name' => 'ハンマーカール',
                'traintype_created' => '2020-09-20 22:55:08',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'traintype_id' => 48,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'ライイングトライセプスEXT',
                'traintype_created' => '2020-09-20 22:55:19',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'traintype_id' => 49,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'プレスダウン',
                'traintype_created' => '2020-09-20 22:55:26',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'traintype_id' => 50,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'ダンベルトライセプス',
                'traintype_created' => '2020-09-20 22:55:35',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'traintype_id' => 51,
                'traincat_id' => 7,
                'user_id' => 1,
            'traintype_name' => 'ダンベルプルオーバー(三頭)',
                'traintype_created' => '2020-09-20 22:55:44',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'traintype_id' => 52,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'EZバープルオーバー',
                'traintype_created' => '2020-09-20 22:55:50',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            52 => 
            array (
                'traintype_id' => 53,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'キックバック',
                'traintype_created' => '2020-09-20 22:55:57',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            53 => 
            array (
                'traintype_id' => 54,
                'traincat_id' => 7,
                'user_id' => 1,
                'traintype_name' => 'ディップス',
                'traintype_created' => '2020-09-20 22:56:04',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'traintype_id' => 55,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'レッグレイズ',
                'traintype_created' => '2020-09-20 22:56:32',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            55 => 
            array (
                'traintype_id' => 56,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'ハンギングレッグレイズ',
                'traintype_created' => '2020-09-20 22:56:38',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            56 => 
            array (
                'traintype_id' => 57,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'クランチ',
                'traintype_created' => '2020-09-20 22:56:45',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            57 => 
            array (
                'traintype_id' => 58,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'デクラインクランチ',
                'traintype_created' => '2020-09-20 22:56:51',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            58 => 
            array (
                'traintype_id' => 59,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'バーティカルクランチ',
                'traintype_created' => '2020-09-20 22:56:58',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'traintype_id' => 60,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'シットアップ',
                'traintype_created' => '2020-09-20 22:57:04',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'traintype_id' => 61,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'スプリンターシットアップ',
                'traintype_created' => '2020-09-20 22:57:10',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'traintype_id' => 62,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'ニータック',
                'traintype_created' => '2020-09-20 22:57:19',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'traintype_id' => 63,
                'traincat_id' => 8,
                'user_id' => 1,
                'traintype_name' => 'アブローラー',
                'traintype_created' => '2020-09-20 22:57:26',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'traintype_id' => 64,
                'traincat_id' => 9,
                'user_id' => 32,
                'traintype_name' => 'その他',
                'traintype_created' => '2021-06-23 10:32:39',
                'traintype_updated' => '0000-00-00 00:00:00',
                'traintype_deleted' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}