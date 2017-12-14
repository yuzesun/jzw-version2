<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            'vendor_name' => 'Tops - Shi Jia Zhuang',
            'vendor_address' => 'RM.2001, ZHUANGJIA BUILDING, ZIQIANGRD., SHIJIAZHUANG, CHINA',
            'email_1' => 'global@hb-hardware.com',
            'bank_name' => 'BANK OF CHINA HEBEI BRANCH',
            'bank_address' => 'NO. 80 XINHUA ROAD SHIJIAZHUANG HEBEI CHINA',
            'bank_swift_code' => 'BKCHCNBJ220',
            'bank_beneficiary' => 'SHIJIAZHUANG TOPS HARDWARE MANUFACTURING CO., LTD',
            'account_number' => '100924097334',
        ]);

        DB::table('vendors')->insert([
            'vendor_name' => 'Zhu Cheng - Shan Dong',
            'vendor_address' => 'WEST ZHIGOU COMMUNITY INDUSTRIAL PARK, ZHIGOU TOWN, ZHUCHENG CITY, WEIFANG CITY, SHANDONG PROVINCE, CHINA',
            'email_1' => 'zhuchengjinming@163.com',
            'bank_name' => 'JINAN RURAL COMMERCIAL BANK CO., LTD',
            'bank_address' => 'NO.72 JINGSHIYI ROAD, JINAN, SHANDONG, CHINA',
            'bank_swift_code' => 'RFBKCNBJ',
            'bank_beneficiary' => 'ZHUCHENG JINMING METAL PRODUCTS CO., LTD',
            'account_number' => '9071428010062228100884',
        ]);


    }
}
