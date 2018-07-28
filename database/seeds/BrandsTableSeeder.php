<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'title' => 'HUAWEI TECHNOLOGIES',
            'alias' => 'huawei-technologies',
            'introtext' => 'Одна из крупнейших китайских компаний в сфере телекоммуникаций. Основана бывшим инженером Народно-освободительной армии Китая Жэнем Чжэнфэем в 1987 году.'
        ]);
        DB::table('brands')->insert([
            'title' => 'APPLE',
            'alias' => 'apple',
            'introtext' => 'Американская корпорация, производитель персональных и планшетных компьютеров, аудиоплееров, телефонов, программного обеспечения. Один из пионеров в области персональных компьютеров и современных многозадачных операционных систем с графическим интерфейсом.'
        ]);
        DB::table('brands')->insert([
            'title' => 'XIAOMI',
            'alias' => 'xiaomi',
            'introtext' => 'Xiaomi была основана восемью партнёрами 6 апреля 2010 года. 16 августа 2010 года Xiaomi официально запустила первую MIUI прошивку, основанную на системе Android.'
        ]);
    }
}
