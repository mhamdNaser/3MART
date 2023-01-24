<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
           [ 'name' => 'AC',
            'slug' => 'ac',
           'image' => '1521969358.png'],
           [ 'name' => 'Home Service',
            'slug' => 'Hm',
           'image' => '1521969358.png'],
           [ 'name' => 'Home clearings',
            'slug' => 'Hm',
           'image' => '1521969358.png'],
           [ 'name' => 'carpanater',
            'slug' => 'cp',
           'image' => '1521969358.png'],
          
        ]);
    }
}
