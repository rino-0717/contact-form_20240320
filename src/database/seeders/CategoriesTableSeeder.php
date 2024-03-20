<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'contact'=>'商品の交換について',
        ];
        DB::table('categories')->insert($param);
        $param = [
        'contact'=>'商品のお届けについて',
        ];
        DB::table('categories')->insert($param);
        $param = [
        'contact'=>'商品トラブル',
        ];
        DB::table('categories')->insert($param);
        $param = [
        'contact'=>'ショップへのお問い合わせ',
        ];
        DB::table('categories')->insert($param);
        $param = [
        'contact'=>'その他',
        ];
    }
}
