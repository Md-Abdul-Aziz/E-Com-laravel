<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

        [
            'name'=>'LG mobile',
            'price'=>'100',
            'category'=>'mobile',
            'description'=>'best phone',
            'gallery'=>'https://www.cheap-phones.com/wp-content/uploads/2015/09/LG-G3-T-Mobile.jpg',
        ],
        [
            'name'=>'samsung mobile',
            'price'=>'500',
            'category'=>'mobile',
            'description'=>'nice phone',
            'gallery'=>'https://assets.wired.com/photos/w_1720/wp-content/uploads/2015/08/samsung-story1.jpg',
        ],
        [
            'name'=>'hp laptop',
            'price'=>'800',
            'category'=>'laptop',
            'description'=>'good laptop',
            'gallery'=>'https://www.notebookcheck.net/fileadmin/Notebooks/HP/Stream_14-z050ng/Stream14_Quer1.jpg',
        ],
        [
            'name'=>'dell laptop',
            'price'=>'500',
            'category'=>'laptop',
            'description'=>'best laptop',
            'gallery'=>'http://www.91-img.com/pictures/laptops/dell/dell-2520-core-i3-2nd-gen-2-gb-500-gb-windows-8-40127-large-1.jpg',
        ],
        [
            'name'=>'ipade',
            'price'=>'200',
            'category'=>'tab',
            'description'=>'good tab',
            'gallery'=>'https://store.stormfront.co.uk/content/images/thumbs/0005884_ipad-mini-4-wifi-goldjpg.jpeg',
        ]
        ] );
    }
}
