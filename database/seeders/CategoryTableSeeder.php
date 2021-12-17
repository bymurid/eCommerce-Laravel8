<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nom ="Films";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom ="Series TV";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom ="Musique";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom ="Jeux-Videos";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom ="Sport";
        $category->is_online = 1;
        $category->save();
        
       
    }
}
