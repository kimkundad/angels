<?php

use Illuminate\Database\Seeder;

class HeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('head_images')->insert([
            [
            'page1' => 'investment-debentures.jpg',
            'page2' => 'investment-debentures.jpg',
            'page3' => 'investment-debentures.jpg',
            'page4' => 'investment-debentures.jpg',
            'page5' => 'investment-debentures.jpg',
            'page6' => 'investment-debentures.jpg',
            'page7' => 'investment-debentures.jpg',
            'page8' => 'investment-debentures.jpg',
            'page9' => 'investment-debentures.jpg',
            'page10' => 'investment-debentures.jpg',
            'page11' => 'investment-debentures.jpg',
            'page12' => 'investment-debentures.jpg',
            'page13' => 'investment-debentures.jpg',
            'page14' => 'investment-debentures.jpg',
            'page15' => 'investment-debentures.jpg',
            'page16' => 'investment-debentures.jpg',
            'page17' => 'investment-debentures.jpg',
            'page18' => 'investment-debentures.jpg',
            'page19' => 'investment-debentures.jpg',
            'page20' => 'investment-debentures.jpg'
            ]
        ]);
    }
}
