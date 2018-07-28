<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Планшеты',
            'alias' => 'planshety',
            'description' => 'Полноразмерный IBM PC-совместимый ноутбук, оборудованный сенсорным экраном, позволяющий работать при помощи стилуса или пальцев, как с использованием, так и без использования клавиатуры и мыши.'
        ]);
        DB::table('categories')->insert([
            'title' => 'Смартфоны',
            'alias' => 'smartfony',
            'description' => 'Мобильный телефон, дополненный функциональностью карманного персонального компьютера.'
        ]);
        DB::table('categories')->insert([
            'title' => 'Ноутбуки',
            'alias' => 'noutbuki',
            'description' => 'Переносной персональный компьютер, в корпусе которого объединены типичные компоненты ПК, включая дисплей, клавиатуру и устройство указания (обычно сенсорная панель или тачпад), а также аккумуляторные батареи.'
        ]);
    }
}
