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
				  'name'=>'Laptop HP',
				  'price'=>'650',
				  'description'=>'A laptop with 8GB Ram and i5 processor.',
				  'category'=>'laptop',
				  'gallery'=>"https://ibb.co/MSsmt5C"
			],
			[
				  'name'=>'Samsung SmartTv',
				  'price'=>'450',
				  'description'=>'A smartv.',
				  'category'=>'Tv',
				  'gallery'=>"https://ibb.co/w7bmCpw"
			],
			[
				  'name'=>'Samsung mobile',
				  'price'=>'600',
				  'description'=>'A smart TV.',
				  'category'=>'mobile',
				  'gallery'=>"https://ibb.co/mzDVkK3"
				],
				[
				  'name'=>'Apple smartwatch',
				  'price'=>'350',
				  'description'=>'A smartwatch.',
				  'category'=>'smartwatch',
				  'gallery'=>"https://ibb.co/Ld7VbkR"
				]
        ]);
    }
}
