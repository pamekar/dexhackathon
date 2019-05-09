<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $role = Role::where('name', 'farmer')->firstOrFail();
        $users = \App\User::where('role_id', $role)->get();
        $categories = \App\Category::pluck('id');
        foreach ($users as $user) {
            foreach (range(1, 10 + mt_rand(0, 10)) as $index) {
                \App\Product::create([
                    'user_id'      => $user->id,
                    'category_id'  => $faker->randomElement($categories),
                    'amount'       => mt_rand(50, 100),
                    'product_name' => $faker->word
                ]);
            }
        }
    }
}
