<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('products')->insert(


                [
                    'name'=>'Huda Eyeshadow',
                    'price'=>'900',
                    'category'=>'Eyeshadow',
                    'description'=>'This huda beauty pallete new edition is just awesome. I just love the colours and its pigmentation is perfect. I am excited that when I got chance to use this on any occasion.',
                    'gallery'=>'https://rukminim1.flixcart.com/image/416/416/k41mp3k0/eye-shadow/3/z/s/5-rose-gold-edition-eyeshadow-palette-18-shades-5-g-glowoly-original-imafnfpd6txvssqt.jpeg?q=70',

                ],
            );
    }
}
