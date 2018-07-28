<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Планшет Apple iPad Air 2 64Gb Wi-Fi',
            'alias' => 'planshet-apple-ipad-air-2-64gb-wi-fi',
            'thumb' => 'default.png',
            'description' => 'Планшет Apple iPad Air 2 получил полностью обновленный дисплей Retina, уникальный датчик отпечатков пальцев Touch ID, мощный процессор A8X, улучшенные камеры iSight и FaceTime HD и еще более быструю беспроводную связь. И все это в прочном алюминиевом корпусе толщиной всего 6,1 мм. Новый планшет настолько портативен, что его можно брать с собой куда угодно. И делать с ним все, что захочется.',
            'price' => '47990',
            'old_price' => '49290',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 1,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([
            'title' => 'Смартфон Huawei P9 32Gb Grey',
            'alias' => 'smartfon-huawei-p9-32gb-grey',
            'thumb' => 'default.png',
            'description' => 'Смартфон Huawei P9 оснащается уникальной камерой с двумя линзами, разработанными компанией Leica, а также с двумя 12-мегапиксельными сенсорами - цветным и монохромным. Такая компоновка позволяет получать исключительно чёткие снимки с насыщенной цветовой гаммой даже при минимальной освещённости.',
            'price' => '19990',
            'old_price' => '20290',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 2,
            'brand_id' => 1
        ]);
        DB::table('products')->insert([
            'title' => 'Смартфон Xiaomi Redmi Note 5 64GB',
            'alias' => 'smartfon-xiaomi-redmi-note-5-64gb',
            'thumb' => 'default.png',
            'description' => 'Смартфон Xiaomi Redmi Note 5 – стильный, современный, мультимедийный. Следуя актуальным тенденциям, он обзавелся дисплеем с соотношением сторон 18:9. Он позволяет запускать два приложения одновременно, сохраняя отличную детализацию изображения. Благодаря этому пользователь может отвечать на сообщения или искать интересную информацию при просмотре видео. Удлиненный экран подходит и для игр – ведь геймер получает больший угол обзора.',
            'price' => '19990',
            'old_price' => '20690',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 2,
            'brand_id' => 3
        ]);
        DB::table('products')->insert([
            'title' => 'Ноутбук Apple MacBook Pro 13',
            'alias' => 'noutbuk-apple-macbook-pro-13',
            'thumb' => 'default.png',
            'description' => 'Apple MacBook Pro – настоящая рабочая станция в компактном корпусе. Применение мощного процессора Intel 7-го поколения и высокопроизводительной видеокарты позволяет ему справляться с наиболее сложными задачами, включая рендеринг, обработку трёхмерных моделей и воспроизведение игровой графики с новейшими спецэффектами. В нём также используются твердотельные накопители с пропускной способностью до 3,2 Гб/с, в 20–30 раз большей, чем у обычных винчестеров. Кроме того, пользователь может расширять конфигурацию устройства, подключая к портам Thunderbolt 3 мониторы с разрешением до 5K, высокоскоростные сетевые хранилища и другое периферийное оборудование.',
            'price' => '85990',
            'old_price' => '86990',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 3,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([
            'title' => 'Ноутбук Apple MacBook Air 13',
            'alias' => 'noutbuk-apple-macbook-air-13',
            'thumb' => 'default.png',
            'description' => 'Ноутбук Apple MacBook Air 13 i5 1.8/8Gb/128SSD предназначен для тех, кто много времени проводит в дороге. Это компактная и относительно лёгкая модель с диагональю экрана 33,8 см и весом 1,35 кг.',
            'price' => '61990',
            'old_price' => '62990',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 3,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([
            'title' => 'Ноутбук Apple MacBook Air 11',
            'alias' => 'noutbuk-apple-macbook-air-11',
            'thumb' => 'default.png',
            'description' => 'Ноутбук Apple MacBook Air (MJVM2RU/A) – изящный переносной компьютер. Его корпус выполнен из цельного алюминия, а крышку украшает знаменитое «яблоко». Несмотря на толщину всего 17 мм внутри скрыта мощная начинка для выполнения самых сложных задач.',
            'price' => '48990',
            'old_price' => '49990',
            'quantity' => 2,
            'images' => 'noimage.png',
            'category_id' => 3,
            'brand_id' => 2
        ]);
    }
}
