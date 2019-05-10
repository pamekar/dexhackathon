<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        $categories = [
            'Tuber crops',
            'Spices',
            'Fruits',
            'Vegetables',
            'Ornamental plants',
            'Grains'
        ];
        foreach ($categories as $category) {

            \App\Category::create([
                'order' => 1,
                'name'  => $category,
                'slug'  => \Illuminate\Support\Str::slug($category)
            ]);
        }

    }
}
