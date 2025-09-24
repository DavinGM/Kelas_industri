<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;






class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        'name' => 'basreng',
        'deskpsi' => 'ini mentah Belum matang jangan di makan',
        'price' => 10000,
        'stock' => 20
        ]);
    }

     

}
